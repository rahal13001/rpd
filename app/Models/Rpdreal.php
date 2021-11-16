<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use \Znck\Eloquent\Relations\BelongsToThrough;


class Rpdreal extends Model
{

    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    use \Znck\Eloquent\Traits\BelongsToThrough;

    public function job(): BelongsToThrough
    {
        return $this->belongsToThrough(
            'App\Models\job',
            'App\Models\rpdplan',
        );
    }

    public function user(): BelongsToThrough
    {
        return $this->belongsToThrough(
            'App\Models\user',
            'App\Models\rpdplan',
        );
    }

    // public function user(): BelongsToThrough
    // {
    //     return $this->belongsToThrough(
    //         User::class,
    //         Rpdplan::class,
    //         'users_id',
    //         'id',
    //         'id',
    //         'id'
    //     );
    // }

    /**
     * Get the rpdplan that owns the Rpdreal
     *
     * @return \Illuminate\Rpdplanbase\Eloquent\Relations\BelongsTo
     */
    public function rpdplan(): BelongsTo
    {
        return $this->belongsTo(Rpdplan::class, 'rpdplan_id', 'id');
    }

    /**
     * Get the documentation associated with the Rpdreal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function documentation(): HasOne
    {
        return $this->hasOne(Documentation::class, 'rpdreal_id', 'id');
    }
}
