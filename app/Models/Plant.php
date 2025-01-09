<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'age',
        'height',
    ];

    // Relations
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function plantDetails(): HasOne
    {
        return $this->hasOne(PlantDetails::class);
    }

    public function item(): HasOneThrough
    {
        return $this->hasOneThrough(Item::class, PlantDetails::class);
    }
}
