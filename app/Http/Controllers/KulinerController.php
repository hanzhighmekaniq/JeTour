<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KulinerController extends Controller
{
    public function index(Request $request)
    {
        $query = Kuliner::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('deskripsi', 'like', "%{$search}%")
                  ->orWhere('lokasi', 'like', "%{$search}%");
            });
        }

        // Filtering
        if ($request->has('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->has('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->has('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $kuliners = $query->latest()->paginate(10);

        return view('admin.kuliner.index', compact('kuliners'));
    }

    public function create()
    {
        return view('admin.kuliner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/kuliner');
            $validated['gambar'] = str_replace('public/', '', $gambarPath);
        }

        Kuliner::create($validated);

        return redirect()->route('admin.kuliner.index')
            ->with('success', 'Kuliner berhasil ditambahkan');
    }

    public function edit(Kuliner $kuliner)
    {
        return view('admin.kuliner.edit', compact('kuliner'));
    }

    public function update(Request $request, Kuliner $kuliner)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($kuliner->gambar) {
                Storage::delete('public/' . $kuliner->gambar);
            }

            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/kuliner');
            $validated['gambar'] = str_replace('public/', '', $gambarPath);
        }

        $kuliner->update($validated);

        return redirect()->route('admin.kuliner.index')
            ->with('success', 'Kuliner berhasil diperbarui');
    }

    public function destroy(Kuliner $kuliner)
    {
        if ($kuliner->gambar) {
            Storage::delete('public/' . $kuliner->gambar);
        }

        $kuliner->delete();

        return redirect()->route('admin.kuliner.index')
            ->with('success', 'Kuliner berhasil dihapus');
    }
}
