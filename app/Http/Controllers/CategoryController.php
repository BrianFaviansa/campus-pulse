<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        Category::create($validatedData);

        return redirect()->route('dashboard.admin.categories')->with('success', 'Category created successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        $category->update($validatedData);

        return redirect()->route('dashboard.admin.categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
