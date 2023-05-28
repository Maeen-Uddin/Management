<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add()
    {
        return view('backend.customer.add_customer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insert(Request $request)
    {
        $validated = [
            'name' => 'required|max:255',
            'email' => 'required|unique:customers|max:255',
            'phone' => 'required',
            'address' => 'required',
            'shop_name' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',
        ];
        $cmmsge = [
            'name.required' => 'Enter Your name',
            'email.required' => 'Enter Your Email',
            'phone' => 'Enter Your phone',
            'address' => 'Address Here',
            'shop_name' => 'shop Nmae Here',
            'account_holder' => 'Account Holders Name Here',
            'account_number' => 'Account Number Here',
            'bank_name' => 'Bank Name Here',
            'branch_name' => 'Branch Here',
        ];
        $this->validate($request, $validated, $cmmsge);
        $customer = new Customer();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . uniqid('P', 20) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/uploads/');
            $image->move($destinationPath, $imageName);
            $customer->photo = $imageName;
        } else {
            $customer->photo = null;
        }
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->shop_name = $request->shop_name;
        $customer->account_holder = $request->account_holder;
        $customer->account_number = $request->account_number;
        $customer->bank_name = $request->bank_name;
        $customer->branch_name = $request->branch_name;
        $customer->city = $request->city;
        $customer->save();
        return redirect()->back()->with('$message', 'Customer Information Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function all()
    {
        $customer = Customer::all();
        return view('backend.customer.all_customer', compact('customer'));
    }

    /**
     * Display the specified resource.
     */
    public function viewCustomer($id)
    {
        $single = Customer::find($id);
        return view('backend.customer.view_customer', compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $single = Customer::first('$id');
        return view('backend.customer.edit_customer', compact('single'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $validated = [
        //     'name' => 'required|max:255',
        //     'email' => 'required|unique:customers|max:255',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'shop_name' => 'required',
        //     'account_holder' => 'required',
        //     'account_number' => 'required',
        //     'bank_name' => 'required',
        //     'branch_name' => 'required',
        // ];
        // $cmmsge = [
        //     'name.required' => 'Enter Your name',
        //     'email.required' => 'Enter Your Email',
        //     'phone' => 'Enter Your phone',
        //     'address' => 'Address Here',
        //     'shop_name' => 'shop Nmae Here',
        //     'account_holder' => 'Account Holders Name Here',
        //     'account_number' => 'Account Number Here',
        //     'bank_name' => 'Bank Name Here',
        //     'branch_name' => 'Branch Here',
        // ];
        // $this->validate($request, $validated, $cmmsge);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
