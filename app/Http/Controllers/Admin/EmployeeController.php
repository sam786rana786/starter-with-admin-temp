<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Employee;
use App\Imports\ImportEmployee;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'is_teacher' => 'required'
        ]);
        $employee = Employee::create();
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->subject = $request->subject;
        $employee->is_teacher = $request->is_teacher;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Data saved Successfully');
    }

    public function upload()
    {
        return view('admin.employee.upload');
    }

    public function uploadContent(Request $request)
    {
        $file = $request->file('upload_file');
        Excel::import(new ImportEmployee, $file);

        return redirect()->route('employee.index')->with('success','Excel file imported succsessfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit', compact($employee));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'is_teacher' => 'required'
        ]);
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->subject = $request->subject;
        $employee->is_teacher = $request->is_teacher;
        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {   
        $employee->delete();
        return redirect()->back()->with('success', 'Employee Deleted Successfully');
    }
}
