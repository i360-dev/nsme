<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    protected string $csvPath = __DIR__ . '/../../database/data/nsme_events.csv';

    public function run(): void
    {
        if (! file_exists($this->csvPath)) {
            $this->command->error("  ✗ CSV not found: {$this->csvPath}");
            return;
        }

        $handle   = fopen($this->csvPath, 'r');
        $headers  = null;
        $imported = 0;
        $skipped  = 0;

        while (($row = fgetcsv($handle)) !== false) {
            if ($headers === null) {
                $row[0]  = ltrim($row[0], "\xEF\xBB\xBF\xFF\xFE");
                $headers = array_map('trim', $row);
                continue;
            }

            $data = array_combine($headers, array_map('trim', $row));

            $startDate = $this->parseDate($data['Start Date'] ?? '');
            if (! $startDate) {
                $this->command->warn("  ⚠ Skipping: {$data['Name']}");
                $skipped++;
                continue;
            }

            $endDate   = $this->parseDate($data['End Date'] ?? '') ?? $startDate;
            $startTime = $this->parseTime($data['Start Time'] ?? '');
            $endTime   = $this->parseTime($data['End Time']   ?? '');

            $legacySlug    = $data['URL Slug'] ?: null;
            $canonicalSlug = $this->uniqueSlug($data['Name'], $startDate);

            Event::updateOrCreate(
                ['legacy_slug' => $legacySlug ?? $canonicalSlug],
                [
                    'name'         => $data['Name'],
                    'slug'         => $canonicalSlug,
                    'legacy_slug'  => $legacySlug,
                    'start_date'   => $startDate,
                    'start_time'   => $startTime,
                    'end_date'     => $endDate,
                    'end_time'     => $endTime,
                    'is_published' => true,
                ]
            );

            $imported++;
        }

        fclose($handle);
        $this->command->info("  ✓ Events imported: {$imported}, skipped: {$skipped}");
    }

    protected function parseDate(string $raw): ?string
    {
        $raw = trim($raw);
        if (! $raw) return null;
        try {
            return Carbon::createFromFormat('m/d/Y', $raw)->toDateString();
        } catch (\Throwable) {
            return null;
        }
    }

    protected function parseTime(string $raw): ?string
    {
        $raw = trim($raw);
        if (! $raw) return null;
        try {
            return Carbon::createFromFormat('h:i A', $raw)->format('H:i:s');
        } catch (\Throwable) {
            return null;
        }
    }

    protected function uniqueSlug(string $name, string $date): string
    {
        $year = substr($date, 0, 4);
        $base = Str::slug($name . '-' . $year);
        $slug = $base;
        $i    = 1;
        while (Event::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }
}
