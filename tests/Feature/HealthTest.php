<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HealthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_application_is_working(): void
    {
        $response = $this->get('/api/health');

        $response->assertStatus(200);
        $response->assertExactJson([
            'status' => true
        ]);
    }

    public function test_user_can_not_access_admin_health_endpoint() {
        $response = $this->get('/api/admin/health?user=user');

        $response->assertStatus(404);
        $response->assertJsonStructure([
            'status' => [
                'message' => [
                    'title'
                ]
            ]
        ]);
    }

    public function test_admin_can_access_admin_health_endpoint() {
        $response = $this->get('/api/admin/health?user=admin');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status'
        ]);

        $this->assertTrue($response->json('status'));
        $this->assertFalse(!$response->json('status'));
    }
}
