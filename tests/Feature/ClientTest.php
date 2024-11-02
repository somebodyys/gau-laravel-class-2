<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function test_clients_can_be_created(): void
    {
        $payload = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'company' => $this->faker->company,
        ];

        $response = $this->postJson('/api/internal/clients', $payload);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'client' => [
                'first_name',
                'last_name',
                'email',
                'company',
                'roles'
            ]
        ]);

        $response->assertExactJson([
            'client' => [
                'first_name' => $payload['first_name'],
                'last_name' => $payload['last_name'],
                'email' => $payload['email'],
                'company' => $payload['company'],
                'roles' => ['Basic']
            ]
        ]);

    }
}
