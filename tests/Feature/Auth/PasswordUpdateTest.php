<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class PasswordUpdateTest extends TestCase
{
    public function test_profile_route_returns_testing_success()
    {
        $response = $this->get('/profile');
        $response->assertStatus(200);
        $response->assertSee('Testing Succes');
    }
}
