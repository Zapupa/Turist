<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'path_img',
        'date',
        'price',
    ];

    private function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }
}
