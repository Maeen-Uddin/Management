<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addSupplier()
    {
        return view('backend.supplier.add_supplier');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertSupplier(Request $request)
    {
        $single = new Supplier();
        $single->name = $request->name;
        $single->email = $request->email;
        $single->phone = $request->phone;
        $single->address = $request->address;
        $single->shop_name = $request->shop_name;
        $single->account_holder = $request->account_holder;
        $single->account_number = $request->account_number;
        $single->bank_name = $request->bank_name;
        $single->branch_name = $request->branch_name;
        $single->city = $request->city;
        $single->save();
        return redirect()->back()->with('$message', 'Supplier Information Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function allSupplier()
    {
        $supplier = Supplier::all();
        return view('backend.supplier.all_supplier', compact('supplier'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
