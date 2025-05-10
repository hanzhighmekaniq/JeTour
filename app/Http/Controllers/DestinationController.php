<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;


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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        Destination::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'content' => $request->content,
            'fasility' => $request->fasility,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'image' => $imageName,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

            return redirect()->route('admin.destination.index')->with('success', 'Destination created successfully');
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

            if ($request->hasFile('image')) {
                // Delete old image
                if ($data->image) {
                    $oldImagePath = public_path('images/' . $data->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);
                $data->image = $imageName;
            }

            $data->update([
                'name' => $request->name,
                'location' => $request->location,
                'description' => $request->description,
                'content' => $request->content,
                'fasility' => $request->fasility,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'price' => $request->price,
                'category_id' => $request->category_id
            ]);

            return redirect()->route('admin.destination.index')->with('success', 'Destination updated successfully');
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
