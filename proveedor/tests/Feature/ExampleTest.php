<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_update()
    {
         $response = $this->put('/api/proveedor/2', ['nombre' => 'Victor','tipo' => 'Laptop']);
       
         $response
            ->assertStatus(200)
             ->assertJson([
                 'mensaje' => 'proveedor actualizado exitosamente',
             ]);
     }

}
