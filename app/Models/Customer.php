<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // preciser type de modèle à renvoyer
    // on veut forcer le boolean
    protected $casts = [
        'is_favorite' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'phone',
        'is_favorite',
    ];
}
