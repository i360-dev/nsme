<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Sources:
     *   - NSME_Security_members_export120220262119.csv  (First Name, Surname, Email)
     *   - Member_Roster_Report_export160220261509.csv   (adds Company, Phone, Chapter,
     *                                                    Membership Level, Expiration Date)
     *
     * Roles (who can log in and what they can do) are handled by Spatie Laravel Permission
     * on the `users` table — NOT here. This table is purely organizational membership data.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            // ----------------------------------------------------------------
            // Portal login link
            // Nullable — a member record can exist before they create a login.
            // When they register on the site, user_id gets populated.
            // ----------------------------------------------------------------
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            // ----------------------------------------------------------------
            // Identity  (from both CSV exports)
            // ----------------------------------------------------------------
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();

            // ----------------------------------------------------------------
            // Company / Professional info  (from Roster export)
            // ----------------------------------------------------------------
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();           // Not in export, but you'll want it

            // ----------------------------------------------------------------
            // Address  (not in current exports, but needed for membership apps)
            // ----------------------------------------------------------------
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city')->nullable();
            $table->string('state', 2)->nullable();            // e.g. "OH"
            $table->string('zip', 10)->nullable();
            $table->string('country', 2)->default('US');

            // ----------------------------------------------------------------
            // Membership details  (from Roster export)
            // ----------------------------------------------------------------
            $table->foreignId('membership_level_id')
                  ->nullable()
                  ->constrained('membership_levels')
                  ->nullOnDelete();

            $table->string('chapter')->nullable();             // e.g. "Akron/Canton"
                                                               // Cleaned on import — source data
                                                               // contains SilverStripe namespace junk

            $table->date('membership_expires_at')->nullable();
            $table->date('membership_joined_at')->nullable();  // Not in export, good to track

            // ----------------------------------------------------------------
            // Status & audit
            // ----------------------------------------------------------------
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
