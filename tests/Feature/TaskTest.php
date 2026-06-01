<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/tasks',[
                'title' => 'Test Task',
                'description' => 'Test Task'
            ]);

        $response->assertRedirect();
    }
}
