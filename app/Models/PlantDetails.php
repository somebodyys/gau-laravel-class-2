<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PlantDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'color',
        'characteristics',
    ];

    // Relationships
    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class);
    }

    public function item(): HasOne
    {
        return $this->hasOne(Item::class);
    }
}
