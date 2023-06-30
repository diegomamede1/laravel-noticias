<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasNoticias extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria',
        'status',
    ];
}
