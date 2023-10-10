<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;
    protected $table = 'tareas';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'titulo',
        'contenido',
        'estado',
        'autor',
    ] 
}
