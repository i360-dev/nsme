<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Lookup table for membership tiers.
     * 
     * Known levels from Member Roster export:
     *   - Professional Member
     *   - Executive Member
     *   - Executive/Board Member
     *   - Trade Agreement Member
     * 
     * Kept as a separate table so new levels can be added via admin UI
     * without schema changes.
     */
    public function up(): void
    {
        Schema::create('membership_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();                   // e.g. "Professional Member"
            $table->string('slug')->unique();                   // e.g. "professional-member"
            $table->text('description')->nullable();
            $table->decimal('annual_fee', 8, 2)->nullable();   // For future Stripe integration
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0); // Controls display order
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membership_levels');
    }
};
