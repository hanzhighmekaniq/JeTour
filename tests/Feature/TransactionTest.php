<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Destination;
use App\Models\Transactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Contracts\Auth\Authenticatable;

class TransactionTest extends TestCase
{
    use RefreshDatabase;

    protected ?Authenticatable $user;
    protected $destination;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->user = $user;
        $this->destination = Destination::factory()->create();
        $this->actingAs($this->user);
    }

    public function test_user_can_view_transactions_list()
    {
        $response = $this->get(route('transaction.index'));
        $response->assertStatus(200);
    }

    public function test_user_can_create_new_transaction()
    {
        $transactionData = [
            'destination_id' => $this->destination->id,
            'quantity' => 2,
            'total_price' => $this->destination->price * 2,
            'status' => 'pending'
        ];

        $response = $this->post(route('transaction.store'), $transactionData);
        $response->assertRedirect(route('transaction.index'));

        $this->assertDatabaseHas('transactions', [
            'destination_id' => $this->destination->id,
            'quantity' => 2
        ]);
    }

    public function test_user_can_view_transaction_details()
    {
        $transaction = Transactions::factory()->create([
            'user_id' => $this->user->id,
            'destination_id' => $this->destination->id
        ]);

        $response = $this->get(route('transaction.show', $transaction));
        $response->assertStatus(200);
    }

    public function test_user_can_update_transaction_status()
    {
        $transaction = Transactions::factory()->create([
            'user_id' => $this->user->id,
            'destination_id' => $this->destination->id,
            'status' => 'pending'
        ]);

        $response = $this->put(route('transaction.update', $transaction), [
            'status' => 'completed'
        ]);

        $response->assertRedirect(route('transaction.index'));
        $this->assertDatabaseHas('transactions', [
            'id' => $transaction->id,
            'status' => 'completed'
        ]);
    }

    public function test_user_can_view_payment_status()
    {
        $transaction = Transactions::factory()->create([
            'user_id' => $this->user->id,
            'destination_id' => $this->destination->id,
            'order_id' => 'TEST-ORDER-123'
        ]);

        $response = $this->get(route('transactions.status', ['order_id' => 'TEST-ORDER-123']));
        $response->assertStatus(200);
        $response->assertSee('Status Pembayaran Berhasil');
    }
}
