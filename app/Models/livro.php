<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'editora', 'foto', 'autores'];
    protected $casts = [
    'autores' => 'array'
        ];
}
