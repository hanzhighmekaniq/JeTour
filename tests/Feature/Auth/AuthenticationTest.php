<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_login_route_returns_testing_success()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Testing Succes');
    }
}
