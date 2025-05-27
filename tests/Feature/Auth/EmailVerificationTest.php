<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    public function test_verify_email_route_returns_testing_success()
    {
        $response = $this->get('/verify-email');
        $response->assertStatus(200);
        $response->assertSee('Testing Succes');
    }
}
