<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Auth;

class CartController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = Auth::user();
        $product = Product::all();

        $cart = new Cart;
        $cart->product_name = $product->product_name;
        $cart->qty = $product->qty;
        $cart->price = $product->price;
        $cart->id = $user->id;
        $cart->save();

        // $data['id'] = $request->id;
        // $data['name ']= $request->product_name;
        // $data['qty'] = $request->qty;
        // $data['price'] = $request->price;

        return redirect()->back()->with('message', 'Product added successfully');
    }
    // public function cartUpdate(Request $request,$rowId){
    //     $qty=$request->qty;
    //     $update=Cart::update($rowId,$qty);
    // }
}
