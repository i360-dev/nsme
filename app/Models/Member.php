<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'job_title',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'zip',
        'country',
        'membership_level_id',
        'chapter',
        'membership_expires_at',
        'membership_joined_at',
        'is_active',
    ];

    protected $casts = [
        'membership_expires_at' => 'date',
        'membership_joined_at'  => 'date',
        'is_active'             => 'boolean',
    ];

    /**
     * The Jetstream/Fortify user account linked to this member.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The membership tier for this member.
     */
    public function membershipLevel(): BelongsTo
    {
        return $this->belongsTo(MembershipLevel::class);
    }

    /**
     * Full name helper.
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
