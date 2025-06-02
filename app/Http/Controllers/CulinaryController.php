<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // Validasi input
        $validated = $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'culinaries.*.title' => 'required|string',
            'culinaries.*.description' => 'required|string',
            'culinaries.*.location' => 'nullable|string',
            'culinaries.*.open' => 'nullable',
            'culinaries.*.close' => 'nullable',
            'culinaries.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'culinaries.*.multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $destinationId = $request->input('destination_id');

        DB::beginTransaction();
        try {
            foreach ($request->culinaries as $index => $culinary) {
                $data = [
                    'title' => $culinary['title'],
                    'description' => $culinary['description'],
                    'location' => $culinary['location'] ?? null,
                    'open' => $culinary['open'] ?? null,
                    'close' => $culinary['close'] ?? null,
                    'destination_id' => $destinationId,
                ];

                // Proses gambar utama
                if ($request->hasFile("culinaries.$index.image")) {
                    $imageFile = $request->file("culinaries.$index.image");
                    $imagePath = $imageFile->store('public/culinary');
                    $data['image'] = str_replace('public/', '', $imagePath);
                }

                // Proses gambar tambahan
                if ($request->hasFile("culinaries.$index.multiple_images")) {
                    $multipleImages = $request->file("culinaries.$index.multiple_images");
                    $storedImages = [];

                    foreach ($multipleImages as $image) {
                        $storedPath = $image->store('public/multiple/culinary');
                        $storedImages[] = str_replace('public/', '', $storedPath);
                    }

                    $data['multiple_images'] = json_encode($storedImages);
                }

                // Simpan data ke database
                Culinary::create($data);
            }

            DB::commit();
            return redirect()->route('culinary.index')->with('success', 'Data kuliner berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Gagal menyimpan data: ' . $e->getMessage()]);
        }
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
