<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillabe = [
    'nome',
    'materia',
    'ano_atual',
    'notas',
    ];
}
