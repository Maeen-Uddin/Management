<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Pos;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pos()
    {
        return view('backend.pos.pos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showPos()
    {
        $product = Product::all();
        dd($product);
        // $product = DB::table('products')
        //     ->join('categories', 'products.category_id', '=', 'categories.id')
        //     ->select('products.*', 'categories.cat_name')
        //     ->get();

        // $customer = Customer::all();
        // $category = Category::with('products')->get();
        return view('backend.pos.posAdd', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pos $pos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pos $pos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pos $pos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pos $pos)
    {
        //
    }
}
