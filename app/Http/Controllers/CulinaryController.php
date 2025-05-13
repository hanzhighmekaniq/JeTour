<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culinary;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class CulinaryController extends Controller
{
    public function index(Request $request)
    {
        $query = Culinary::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%")
                    ->orWhere('lokasi', 'like', "%{$search}%");
            });
        }
        if ($request->has('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->has('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->has('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $culinarys = $query->latest()->paginate(10);

        return view('admin.culinary.index_culinary', compact('culinarys'));
    }

    public function create()
    {
        $destinations = Destination::all();

        return view('admin.culinary.create_culinary', compact('destinations'));
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
            $gambarPath = $gambar->store('public/Culinary');
            $validated['gambar'] = str_replace('public/', '', $gambarPath);
        }

        Culinary::create($validated);

        return redirect()->route('admin.culinary.index_culinary')
            ->with('success', 'Culinary berhasil ditambahkan');
    }

    public function edit(Culinary $Culinary)
    {
        return view('admin.culinary.edit_culinary', compact('Culinary'));
    }

    public function update(Request $request, Culinary $Culinary)
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
            if ($Culinary->gambar) {
                Storage::delete('public/' . $Culinary->gambar);
            }

            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/Culinary');
            $validated['gambar'] = str_replace('public/', '', $gambarPath);
        }

        $Culinary->update($validated);

        return redirect()->route('culinary.index')
            ->with('success', 'Culinary berhasil diperbarui');
    }

    public function destroy(Culinary $Culinary)
    {
        if ($Culinary->gambar) {
            Storage::delete('public/' . $Culinary->gambar);
        }

        $Culinary->delete();

        return redirect()->route('culinary.index')
            ->with('success', 'Culinary berhasil dihapus');
    }
}
