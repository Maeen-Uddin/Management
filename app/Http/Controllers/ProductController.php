<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addProduct()
    {
        return view('backend.product.add_product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertProduct(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . uniqid('P', 20) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/uploads/');
            $image->move($destinationPath, $imageName);
            $product->product_image = $imageName;
        } else {
            $product->product_image = null;
        }
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
        $product->sup_id = $request->sup_id;
        $product->product_garage = $request->product_garage;
        $product->product_route = $request->product_name;
        $product->buy_date = $request->product_name;
        $product->expire_date = $request->product_name;
        $product->buying_price = $request->product_name;
        $product->selling_price = $request->product_name;
        $product->save();
        return redirect()->back()->with('message', 'Products Added successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function allProduct()
    {
        $product = Product::all();
        return view('backend.product.all_product', compact('product'));
    }

    /**
     * Display the specified resource.
     */
    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
