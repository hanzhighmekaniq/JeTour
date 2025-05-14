<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $categories = Category::where('name', 'like', "%{$search}%")->paginate(10);
        return view("admin.category.index_category", compact("categories", "search"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create_category");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);

        Category::create([
            'name' => $validatedData['name'],  // Pastikan nama kategori yang dikirim tersimpan dengan benar
        ]);
        return redirect()->route('category.index')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return view('admin.category.show_category', [
        //     'category' => $category
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // return view('admin.category.edit_category', [
        //     'category' => $category
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->update($validateData);

        return redirect()->route('category.index')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category has been deleted!');
    }
}
