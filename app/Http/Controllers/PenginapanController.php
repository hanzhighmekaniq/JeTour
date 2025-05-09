<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenginapanController extends Controller
{
    public function index(Request $request)
    {
        $query = Penginapan::query();

        // Search by name
        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        // Filter by type
        if ($request->has('tipe') && $request->tipe !== '') {
            $query->where('tipe', $request->tipe);
        }

        // Filter by price range
        if ($request->has('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }
        if ($request->has('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $penginapans = $query->paginate(10);

        return view('admin.penginapan.index', compact('penginapans'));
    }

    public function create()
    {
        return view('admin.penginapan.create');
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
            $validated['gambar'] = $request->file('gambar')->store('penginapan', 'public');
        }

        Penginapan::create($validated);

        return redirect()->route('admin.penginapan.index')
            ->with('success', 'Penginapan berhasil ditambahkan.');
    }

    public function edit(Penginapan $penginapan)
    {
        return view('admin.penginapan.edit', compact('penginapan'));
    }

    public function update(Request $request, Penginapan $penginapan)
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
            if ($penginapan->gambar) {
                Storage::disk('public')->delete($penginapan->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('penginapan', 'public');
        }

        $penginapan->update($validated);

        return redirect()->route('admin.penginapan.index')
            ->with('success', 'Penginapan berhasil diperbarui.');
    }

    public function destroy(Penginapan $penginapan)
    {
        if ($penginapan->gambar) {
            Storage::disk('public')->delete($penginapan->gambar);
        }

        $penginapan->delete();

        return redirect()->route('admin.penginapan.index')
            ->with('success', 'Penginapan berhasil dihapus.');
    }
}
