<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Source: NSME_Events_export120220262116.csv
     * Columns in source: Name, URL Slug, Start Date, Start Time, End Date, End Time
     * 193 rows going back to 2017.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // ----------------------------------------------------------------
            // Core event info  (maps from CSV export)
            // ----------------------------------------------------------------
            $table->string('name');
            $table->string('slug')->unique();               // URL slug from export
            $table->text('description')->nullable();        // Not in export, added for CMS
            $table->string('location')->nullable();         // Venue name or address

            // ----------------------------------------------------------------
            // Date & Time  (from CSV export)
            // ----------------------------------------------------------------
            $table->date('start_date');
            $table->time('start_time')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();

            // ----------------------------------------------------------------
            // Registration & Ticketing  (for Stripe integration)
            // ----------------------------------------------------------------
            $table->decimal('price', 8, 2)->default(0.00);
            $table->unsignedInteger('capacity')->nullable();    // null = unlimited
            $table->boolean('registration_required')->default(false);
            $table->dateTime('registration_closes_at')->nullable();

            // ----------------------------------------------------------------
            // Publishing
            // ----------------------------------------------------------------
            $table->boolean('is_published')->default(false);
            $table->dateTime('published_at')->nullable();

            // ----------------------------------------------------------------
            // Media
            // ----------------------------------------------------------------
            $table->string('featured_image')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
