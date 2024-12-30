<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**

     * Display a listing of the resource.
     */
    public function index()
    {
        // Paginate categories, 10 per page (you can adjust the number)
        $categories = Category::paginate(10);

        return view('category.index', [
            'categories' => $categories
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**

     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'nullable|integer|min:0', // Validate age as an integer
            'contact' => 'nullable|numeric|digits_between:1,10', // Ensures contact is numeric and between 1-10 digits
            'description' => 'nullable|string|max:255',
            'specialty' => 'required|string|max:50', // Specialty is required
            'date' => 'nullable|date', // Validate date field
        ]);

        Category::create([
            'name' => $request->name,
            'age' => $request->age,
            'contact' => $request->contact,
            'description' => $request->description,
            'specialty' => $request->specialty,
            'date' => $request->date,
        ]);

        return redirect('/category')->with('status', 'Appointment added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'age' => 'nullable|integer|min:0', // Validate age as an integer
            'contact' => 'nullable|numeric|digits_between:1,10', // Ensures contact is numeric and between 1-10 digits
            'specialty' => 'required|string|max:50', // Specialty is required
            'date' => 'nullable|date', // Validate date field

        ]);

        $category->update([
            'name' => $request->name,
            'age' => $request->age,
            'contact' => $request->contact,
            'description' => $request->description,
            'specialty' => $request->specialty,
            'date' => $request->date,

        ]);

        return redirect('/category')->with('status', 'Appointment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/category')->with('status', 'Appointment Deleted Successfully');
    }
}
