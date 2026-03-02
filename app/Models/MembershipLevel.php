<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MembershipLevel extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'annual_fee',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'annual_fee' => 'decimal:2',
        'is_active'  => 'boolean',
    ];

    /**
     * Members at this membership level.
     */
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
