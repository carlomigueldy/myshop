<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Authentication extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function user_sign_in_with_valid_credentials() 
    {
        $this->json('POST', '/api/auth/login', [
            'email' => $this->newUser()->email,
            'password' => 'password',
        ])
        ->assertStatus(200)
        ->assertJson([
            'access_token' => true,
        ]);
    }

    /** @test */
    public function user_sign_in_with_invalid_credentials()
    {
        $this->json('POST', '/api/auth/login', [
            'email' => $this->newUser()->email,
            'password' => 'passwords',
        ])
        ->assertStatus(401);
    }

    /** @test */
    public function user_refresh_token()
    {
        $res = $this->withHeaders([
            'Authorization' => 'bearer ' . $token,
        ]);
        
        $res->actingAs($this->newUser())
            ->json('POST', '/api/auth/refresh')
            ->assertStatus(200);
    }

    private function newUserLogsIn()
    {
        return $this->json('POST', '/api/auth/login', [
            'email' => $this->newUser()->email,
            'password' => 'password',
        ]);
    }
    
    private function newUser()
    {
        return factory('App\User')->create();
    }
}
