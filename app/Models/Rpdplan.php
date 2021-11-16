<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Rpdplan extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
    /**
     * Get the rpdreal associated with the Rpdplan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rpdreal(): HasOne
    {
        return $this->hasOne(Rpdreal::class, 'rpdplan_id');
    }
}
