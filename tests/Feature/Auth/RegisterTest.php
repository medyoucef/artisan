<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_with_valid_data()
    {
        $response = $this->post('/register', [
            'name' => 'Karim',
            'email' => 'karim@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/home');

        $this->assertDatabaseHas('users', [
            'email' => 'karim@example.com',
        ]);

        $this->assertAuthenticated();
    }
    public function test_registration_fails_if_email_already_exists()
{
    User::factory()->create([
        'email' => 'karim@example.com'
    ]);

    $response = $this->post('/register', [
        'name' => 'Karim',
        'email' => 'karim@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ]);

    $response->assertSessionHasErrors('email');
    $this->assertGuest();
}
}
