<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;


class RegistrationTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_load_register_page()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function test_new_users_can_register()

    {

        $response = $this->post('/register', [

            'full_name' => 'Test User',
            'user_name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',

        ]);



       // $this->assertAuthenticated();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
