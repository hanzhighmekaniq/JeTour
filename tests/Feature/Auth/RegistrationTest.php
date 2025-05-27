<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function test_register_route_returns_testing_success()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('Testing Succes');
    }
}
