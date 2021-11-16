<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;


class Job extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];


    /**
     * Get all of the job for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function job(): HasOneThrough
    {
        return $this->hasoneThrough(
            Rpdreal::class,
            Rpdplan::class,
            'jobs_id',
            'rpdplans_id',
            'id',
            'id'
        );
    }
}
