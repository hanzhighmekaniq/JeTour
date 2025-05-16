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
$culinarys = Culinary::with("destination")->paginate(10);
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
