<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    public function test_confirm_password_route_returns_testing_success()
    {
        $response = $this->get('/confirm-password');
        $response->assertStatus(200);
        $response->assertSee('Testing Succes');
    }
}
