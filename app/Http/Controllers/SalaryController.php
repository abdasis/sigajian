<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries  = Salary::all();
        return view('pages.Salary.index')->withSalaries($salaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        return view('pages.Salary.create')->withEmployee($employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::where('Emp_Code', $request->get('emp_code'))->first();
        $salari = new Salary();
        $salari->Emp_Code = $request->get('emp_code');
        $salari->Month = $request->get('month');
        $salari->Year = $request->get('year');
        $salari->Salary = $request->get('salary');
        $salari->employee_id = $employee->id;
        $salari->save();
        Session::flash('status', 'Data salary berhasil di tambahkan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salary = Salary::find($id);
        return view('pages.Salary.edit')->withSalary($salari);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::where('Emp_Code', $request->get('emp_code'))->first();
        $salari = Salary::find($id);
        $salari->Emp_Code = $request->get('emp_code');
        $salari->Month = $request->get('month');
        $salari->Year = $request->get('year');
        $salari->Salary = $request->get('salary');
        $salari->employee_id = $employee->id;
        $salari->save();
        Session::flash('status', 'Data salary berhasil diupdate');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salary::find($id);
        $salary->delete();
        Session::flash('status', 'Data salary berhasil di update');
        return redirect()->back();

    }
}
