<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Destination;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $destination = Destination::all();
        $tickets = Ticket::query();

        if ($request->has('search')) {
            $tickets->where('name', 'like', '%' . $request->search . '%');
        }

        $tickets = $tickets->get();

        return view('admin.ticket.index_ticket', compact('tickets', 'destination'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'destination_id' => 'required',
        ]);

        // Simpan data tiket
        Ticket::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'destination_id' => $request->destination_id,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('ticket.index')->with('success', 'Tiket berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
