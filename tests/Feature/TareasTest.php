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
        $response = $this->get('/api/' . $tarea->id);
        $response->assertStatus(200);
        $response->assertJson($tarea->toArray());
    }

    public function testBuscarTareaNoExistente()
    {
      
        $response = $this->get('/api/9999'); 
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tarea no encontrada']);
    }

    public function testBuscarPorTituloExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/api/titulo/' . $tarea->titulo);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorTituloNoExistente()
    {
        $response = $this->get('/api/titulo/TituloInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }

    public function testBuscarPorAutorExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/api/autor/' . $tarea->autor);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorAutorNoExistente()
    {
        $response = $this->get('/api/autor/AutorInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }

    public function testBuscarPorEstadoExistente()
    {
        $tarea = factory(Tareas::class)->create();
        $response = $this->get('/api/estado/' . $tarea->estado);
        $response->assertStatus(200);
        $response->assertJson([$tarea->toArray()]);
    }

    public function testBuscarPorEstadoNoExistente()
    {
        $response = $this->get('/api/estado/EstadoInexistente');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Tareas no encontradas']);
    }
}
