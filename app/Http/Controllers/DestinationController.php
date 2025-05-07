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

        return view('admin.destination.destination', compact('data', 'categories'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        Destination::create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('destination.index')->with('success', 'Destination created successfully');
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
        return view('admin.destination.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = Destination::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $data->image = $imageName;
        }

        $data->name = $request->name;
        $data->address = $request->address;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('destination.index')->with('success', 'Destination updated successfully');
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
