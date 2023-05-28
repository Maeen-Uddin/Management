<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addCategory()
    {
        return view('backend.category.add_category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertCategory(Request $request)
    {
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function allCategory()
    {
        $category = Category::all();
        return view('backend.category.all_category', compact('category'));
    }

    /**
     * Display the specified resource.
     */
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit_category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
