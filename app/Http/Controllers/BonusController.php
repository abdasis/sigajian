<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bonus  = Bonus::all();
        return view('pages.Bonus.index')->withBonuses($bonus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        return view('pages.Bonus.create')->withEmployee($employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bonusValue = $request->get('salary') * 5 / 100;
        $employee = Employee::where('Emp_Code', $request->get('emp_code'))->first();
        $bonus = new Bonus();
        $bonus->Emp_Code = $request->get('emp_code');
        $bonus->Month = $request->get('month');
        $bonus->Year = $request->get('year');
        $bonus->Salary = $request->get('salary');
        $bonus->Bonus = $bonusValue;
        $bonus->Total = $request->get('salary') + $bonusValue;
        $bonus->employee_id = $employee->id;
        $bonus->save();
        Session::flash('status', 'Data bonus berhasil ditambahkan');
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
        $bonus = Bonus::find($id);
        return view('pages.Bonus.edit')->withBonus($bonus);
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
        $bonusValue = $request->get('salary') * 5 / 100;
        $employee = Employee::where('Emp_Code', $request->get('emp_code'))->first();
        $bonus = Bonus::find($id);
        $bonus->Emp_Code = $request->get('emp_code');
        $bonus->Month = $request->get('month');
        $bonus->Year = $request->get('year');
        $bonus->Salary = $request->get('salary');
        $bonus->Bonus = $bonusValue;
        $bonus->Total = $request->get('salary') + $bonusValue;
        $bonus->employee_id = $employee->id;
        $bonus->save();
        Session::flash('status', 'Data bonus berhasil ditambahkan');
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
        $bonus = Bonus::find($id);
        $bonus->delete();
        Session::flash('status', 'Data bonus berhasil di hapus');
        return redirect()->back();
    }

    public function laporan()
    {
        $bonus  = Bonus::all();
        return view('pages.Bonus.laporan')->withBonuses($bonus);
    }
}
