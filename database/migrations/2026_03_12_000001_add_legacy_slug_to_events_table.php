<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Adds legacy_slug to events for 301 redirect mapping from old SilverStripe URLs.
     *
     * e.g. /events/monthly-nsme-meeting-may-2017 → /events/monthly-nsme-meeting-2017
     *
     * This is a separate migration so it can be applied to existing installs
     * without touching the base events migration.
     */
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            // Original SilverStripe URL slug — kept permanently for redirect mapping.
            // Nullable because events created in the new CMS won't have one.
            $table->string('legacy_slug')->nullable()->unique()->after('slug');
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('legacy_slug');
        });
    }
};
