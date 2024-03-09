<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academiacour extends Model
{
    use HasFactory;
    protected $fillable = [
        'mail',
        'teacher',
        'cours',
        'promotion',
        'academia',
    ];
}
