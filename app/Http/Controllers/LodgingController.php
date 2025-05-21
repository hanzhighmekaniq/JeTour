<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class LodgingController extends Controller
{
    public function index(Request $request)
    {
        $query = Lodging::query();

        // Search by name
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        // Filter by type
        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }

        // Filter by price range
        if ($request->filled('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }
        if ($request->filled('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $lodgings = $query->paginate(10);

        return view('admin.lodging.index_lodging', compact('lodgings'));
    }

    public function create()
    {
        return view('admin.lodging.create_lodging');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tipe' => 'required|in:hotel,villa,guesthouse',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('lodging', 'public');
        }

        Lodging::create($validated);

        // Ambil ulang data
        $lodgings = Lodging::paginate(10);

        return view('admin.lodging.index_lodging', compact('lodgings'))
            ->with('success', 'data berhasil ditambahkan.');
    }


    public function edit(Lodging $lodging)
    {
        return view('admin.lodging.edit', compact('lodging'));
    }

    public function update(Request $request, Lodging $lodging)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tipe' => 'required|in:hotel,villa,guesthouse',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($lodging->gambar) {
                Storage::disk('public')->delete($lodging->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('lodging', 'public');
        }

        $lodging->update($validated);

        $lodgings = Lodging::paginate(10);

        return view('admin.lodging.index_lodging', compact('lodgings'))
            ->with('success', 'data berhasil diubah.');
    }

    public function destroy(Lodging $lodging)
    {
        if ($lodging->gambar) {
            Storage::disk('public')->delete($lodging->gambar);
        }

        $lodging->delete();

        $lodgings = Lodging::paginate(10);

        return view('admin.lodging.index_lodging', compact('lodgings'))
            ->with('success', 'data berhasil dihapus.');
    }
}
