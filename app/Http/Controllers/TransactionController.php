<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZerosDev\TriPay\Client as TriPayClient;
use ZerosDev\TriPay\Transaction;
use ZerosDev\TriPay\Support\Constant;
use ZerosDev\TriPay\Support\Helper;
use App\Models\Transactions;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = Transactions::with('ticket')->paginate(10); // 10 data per halaman
        return view('admin.transaction.index_transaction', compact('transactions'));
    }


    public function store(Request $request)
    {
        $client = new TriPayClient(
            config('services.tripay.merchant_code'),
            config('services.tripay.api_key'),
            config('services.tripay.private_key'),
            config('services.tripay.mode')
        );

        $transaction = new Transaction($client);

        $transaction->addOrderItem('Contoh Produk', 10000, 1);

        $response = $transaction->create([
            'method' => $request->method,
            'merchant_ref' => 'INV-' . time(),
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'expired_time' => Helper::makeTimestamp('1 HOUR'),
            'return_url' => 'http://localhost:8000/price',
        ]);

        Transactions::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'status' => 'UNPAID',
            'type'   => $request->method,
        ]);

        return response()->json(json_decode($response->getBody()->getContents(), true));
    }
}
