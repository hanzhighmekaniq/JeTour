<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Destination;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Contracts\Auth\Authenticatable;

class DestinationTest extends TestCase
{
    use RefreshDatabase;

    protected ?Authenticatable $user;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->user = $user;
        $this->actingAs($this->user);
    }

    public function test_user_can_view_destinations_list()
    {
        $response = $this->get(route('destination.index'));
        $response->assertStatus(200);
    }

    public function test_user_can_create_new_destination()
    {
        $destinationData = [
            'name' => 'Test Destination',
            'description' => 'Test Description',
            'location' => 'Test Location',
            'price' => 100000,
            'image' => 'test.jpg'
        ];

        $response = $this->post(route('destination.store'), $destinationData);
        $response->assertRedirect(route('destination.index'));

        $this->assertDatabaseHas('destinations', [
            'name' => 'Test Destination',
            'description' => 'Test Description'
        ]);
    }

    public function test_user_can_view_destination_details()
    {
        $destination = Destination::factory()->create();

        $response = $this->get(route('destination.show', $destination));
        $response->assertStatus(200);
        $response->assertSee($destination->name);
    }

    public function test_user_can_update_destination()
    {
        $destination = Destination::factory()->create();

        $updateData = [
            'name' => 'Updated Destination',
            'description' => 'Updated Description',
            'location' => 'Updated Location',
            'price' => 200000,
            'image' => 'updated.jpg'
        ];

        $response = $this->put(route('destination.update', $destination), $updateData);
        $response->assertRedirect(route('destination.index'));

        $this->assertDatabaseHas('destinations', [
            'id' => $destination->id,
            'name' => 'Updated Destination'
        ]);
    }

    public function test_user_can_delete_destination()
    {
        $destination = Destination::factory()->create();

        $response = $this->delete(route('destination.destroy', $destination));
        $response->assertRedirect(route('destination.index'));

        $this->assertDatabaseMissing('destinations', [
            'id' => $destination->id
        ]);
    }
}
