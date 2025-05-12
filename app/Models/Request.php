<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'cost',
        'tour_id',
        'user_id',
    ];

    private function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }
}
