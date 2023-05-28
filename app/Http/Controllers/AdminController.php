<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AdminController extends Controller
{
    public function admin()
    {
        return view('layouts.home');
    }
    public function add()
    {
        return view('backend.employee.add');
    }
    public function insert(Request $request)
    {
        $validated = [
            'name' => 'required||max:255',
            'email' => 'required|unique:employees|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
            'nid_no' => 'required',
            'salary' => 'required',
            'photo' => 'required',
        ];
        $empmsge = [
            'name.required' => 'Enter Your name',
            'name.max' => 'Your name cannot contain more than 20 charecter',
            'email.required' => 'Enter Your Email',
            'phone' => 'Enter Your phone',
            'address' => 'Address Here',
            'nid_no' => 'NID Here',
            'salary' => 'Mention salary',
            'photo' => 'Image here',
        ];

        $this->validate($request, $validated, $empmsge);
        $employee = new Employee();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . uniqid('P', 20) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/uploads/');
            $image->move($destinationPath, $imageName);
            $employee->photo = $imageName;
        } else {
            $employee->photo = null;
        }
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->nid_no = $request->nid_no;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->back()->with('$message', 'Employees Added Successfully!');
        // return view('backend.employee.add');
    }
    public function all()
    {
        $employee = Employee::latest()->get();
        return view('backend.employee.all', compact('employee'));
    }
    public function viewEmployee($id)
    {
        $single = Employee::findOrfail($id);
        return view('backend.employee.view_employee', compact('single'));
    }
    public function destroy($id)
    {
        $delete = Employee::find($id);
        $delete->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }
    public function edit($id)
    {
        $single = Employee::find($id);
        return view('backend.employee.edit', compact('single'));
    }
    public function update(Request $request, $id)
    {
        $validated = [
            'name' => 'required||max:255',
            'email' => 'required|unique:employees|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
            'nid_no' => 'required',
            'salary' => 'required',
            'photo' => 'required',
        ];
        $message = [
            'name.required' => 'Enter Your name',
            'name.max' => 'Your name cannot contain more than 20 charecter',
            'email.required' => 'Enter Your Email',
            'phone' => 'Enter Your phone',
            'address' => 'Address Here',
            'nid_no' => 'NID Here',
            'salary' => 'Mention salary',
            'photo' => 'Image here',
        ];
        $this->validate($request, $validated, $message);
        $employee = Employee::find($id);
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . uniqid('P', 20) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/uploads/');
            $image->move($destinationPath, $imageName);
            $employee->photo = $imageName;
        } else {
            $employee->photo = null;
        }
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->nid_no = $request->nid_no;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->back()->with('$message', 'Employees Updated Successfully!');
    }
}
