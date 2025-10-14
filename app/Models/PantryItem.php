<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'unit',
        'expires_at',
    ];
}
