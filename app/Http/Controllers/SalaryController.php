<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function advanced()
    {
        return view('backend.salary.advanced_salary');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function advancedSalaryInsert(Request $request)
    {
        $month = $request->month;
        $emp_id = $request->emp_id;
        $advanced = FacadesDB::table('salaries')->where('month', $month)->where('emp_id', $emp_id)->first();
        if ($advanced === NULL) {
            $data = new Salary();
            $data->emp_id = $request->emp_id;
            $data->salary = $request->salary;
            $data->month = $request->month;
            $data->advanced_salary = $request->advanced_salary;
            $data->year = $request->year;
            $data->save();
            return redirect()->back()->with('message', 'Advance Salary inserted successfully');
        } else {
            return redirect()->back()->with('message', 'OOps !! Advance Salary Already paid');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function allAdvancedSalary()
    {
        $advanced = Salary::join('employees', 'salaries.emp_id', '=', 'employees.id')
            ->get(['salaries.*', 'employees.name', 'employees.photo', 'employees.salary'], 'id', 'ASC');
        return view('backend.salary.all_advanced_salary', compact('advanced'));
    }

    /**
     * Display the specified resource.
     */
    public function paySalary()
    {
        // $month = date("F", strtotime('-1 month'));
        // $pay = Salary::join('employees', 'salaries.emp_id', '=', 'employees.id')
        //     ->get(['salaries.*', 'employees.name', 'employees.photo', 'employees.salary'], 'id', 'ASC');
        // return view('backend.salary.pay_salary', compact('pay', 'month'));
        $employee = Employee::all();
        return view('backend.salary.pay_salary', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
