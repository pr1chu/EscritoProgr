<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;
use Illumiate\Database\Eloquent\ModelNotFoundException;


class TareasController extends Controller
{
    public function buscarPorTitulo ($titulo) {
        try {
            $tituloDeTarea = Tareas::where('titulo', $titulo)->get();
            return $tituloDeTarea;
        } 
    
        catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Tareas no encontradas'], 404);
        }
    }
    
    public function buscarPorAutor ($autor) {
        try {
            $autorDeTarea = Tareas::where('autor', $autor)->get();
            return $autorDeTarea;
        } 
    
        catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Tareas no encontradas'], 404);
        }
    }

    public function buscarPorEstado ($estado) {
        try {
            $estadoDeTarea = Tareas::where('estado', $estado)->get();
            return $estadoDeTarea;
        } 
    
        catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Tareas no encontradas'], 404);
        }
    }

}

