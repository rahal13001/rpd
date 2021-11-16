<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Documentation extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the rpdreal that owns the Documentation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rpdreal(): BelongsTo
    {
        return $this->belongsTo(Rpdreal::class);
    }
}
