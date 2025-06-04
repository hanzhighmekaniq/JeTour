<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Destination::with('category');

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $data = $query->paginate(10)->withQueryString(); // penting agar filter & search tetap di URL saat paging

        return view('admin.destination.index_destination', compact('data', 'categories'));
    }



    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        $categories = Category::all();
        return view('admin.destination.create_destination', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
           $validated = $request->validate([
                'name' => 'required',
                'location' => 'required',
                'description' => 'required',
                'content' => 'required',
                'fasility' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

       if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('destination', 'public');
        }
        Destination::create($validated);
            return redirect()->route('destination.index')->with('success', 'Destination created successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Destination::findOrFail($id);
        return view('admin.destination.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Destination::findOrFail($id);
        $categories = Category::all();
        return view('admin.destination.edit_destination', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    try {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'content' => 'required',
            'fasility' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = Destination::findOrFail($id);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }

            // Simpan gambar baru ke storage
            $path = $request->file('image')->store('images', 'public');
            $data->image = $path;
        }

        // Update data lainnya
        $data->update([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'content' => $request->content,
            'fasility' => $request->fasility,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $data->image // pastikan image tetap disimpan meski tidak diupdate
        ]);

        return redirect()->route('destination.index')->with('success', 'Destination updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating destination: ' . $e->getMessage());
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Destination::findOrFail($id);
        $data->delete();
        return redirect()->route('destination.index')->with('success', 'Destination deleted successfully');
    }
}
