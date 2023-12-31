<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;
    protected $table = 'apuestas';
    protected $fillable = ['equipo1', 'equipo2', 'apuesta', 'ganancia'];
}
