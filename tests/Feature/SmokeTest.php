<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class SmokeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_load_home_page()
    {
        $response = $this->get('projects');

        $response->assertStatus(200);
    }
    public function test_load_register_page()
    {
        $response = $this->get('register');

        $response->assertStatus(200);
    }
    public function test_load_login_page()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
    }
    public function test_load_services_page()
    {
        $response = $this->get('professions');

        $response->assertStatus(200);
    }
    public function test_load_freelancers_page()
    {
        $response = $this->get('freelancers');

        $response->assertStatus(200);
    }
    public function test_load_projects_page()
    {
        $response = $this->get('projects');

        $response->assertStatus(200);
    }
    public function test_load_become_freelancer_page()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('freelancer/sign');

        $response->assertStatus(200);
    }
    public function test_load_get_contact_page()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('contact');

        $response->assertStatus(200);
    }
    public function test_load_get_my_notification_page()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('mynotification');

        $response->assertStatus(200);
    }
    public function test_load_project_create_page()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('projects/create');

        $response->assertStatus(200);
    }
    public function test_load_profile_page()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('user');

        $response->assertStatus(200);
    }

    public function test_load_contact_me_page()
    {
        $user = User::find(1);
        $userm = User::find(2);

        $this->actingAs($user);
        $response = $this->get(route('contact_me',$userm->id));

        $response->assertStatus(200);
    }

}
