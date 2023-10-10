<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TareasTest extends TestCase
{

    public function testBuscarTareaExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/tareas/' . $tarea->id);
        $response->assertStatus(200);
        $response->assertJson($tarea->toArray());
    }

    public function testBuscarTareaNoExistente()
    {
      
        $response = $this->get('/tareas/9999'); 
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tarea no encontrada']);
    }

    public function testBuscarPorTituloExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/tareas/titulo/' . $tarea->titulo);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorTituloNoExistente()
    {
        $response = $this->get('/tareas/titulo/TituloInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }

    public function testBuscarPorAutorExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/tareas/autor/' . $tarea->autor);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorAutorNoExistente()
    {
        $response = $this->get('/tareas/autor/AutorInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }

    public function testBuscarPorEstadoExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/tareas/estado/' . $tarea->estado);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorEstadoNoExistente()
    {
        $response = $this->get('/tareas/estado/EstadoInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }
}
