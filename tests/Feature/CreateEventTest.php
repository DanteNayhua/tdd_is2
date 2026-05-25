<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateEventTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_an_event_can_be_created()
{
    // Arrange (Preparar)
    $eventData = [
        'name' => 'Conferencia Deeps',
        'feature' => 'img.jpg',
        'date' => Carbon::now(),
        'time' => '10:00',
        'location' => 'Santiago Bernabéu'
    ];

    // Act (Actuar)
    $response = $this->post('/events', $eventData);

    // Assert (Afirmar)
    $response->assertStatus(302); // Redirección tras éxito
    $this->assertDatabaseHas('events', $eventData);
}
}
