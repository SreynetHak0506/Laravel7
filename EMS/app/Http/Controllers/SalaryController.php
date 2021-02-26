<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salarys;
use App\Employees;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Salarys::all(); 
        return view('salary.index',compact('data','employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $employees = Employees::all();
        return view('salary.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'release_date'=>'required',
            'paid_date'=>'required',
            'basic_salary'=>'required',
            'note'=>'required',
            'employee_id' => 'required|not_in:-1|integer',
        ],[
            'release_date.required' => 'The release need to input',
            'paid_date.required' => 'The paid date need to input',
            'basic_salary.required' => 'The basic salary need to input',
            'note.required'  => 'The note need to input',
            'employee_id.required' => 'The employee id reqired',
           
        ]);
        $salary = new Salarys();
        $salary->release_date = $request->get('release_date');
        $salary->paid_date = $request->get('paid_date');
        $salary->basic_salary = $request->get('basic_salary');
        $salary->note = $request->get('note');
        $salary->employee_id = $request->get('employee_id');
        $salary->save();
        return redirect(route('salary.index'))->with('success','The salary create successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Salarys::find($id);
        return view('salary.show',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Salarys::find($id);
        $employees = Employees::all();
        return view('salary.edit',compact('data','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {    $request ->validate([
            'release_date'=>'required',
            'paid_date'=>'required',
            'basic_salary'=>'required',
            'note'=>'required',
            'employee_id' => 'required|not_in:-1|integer',
        ],[
            'release_date.required' => 'The release need to input',
            'paid_date.required' => 'The paid date need to input',
            'basic_salary.required' => 'The basic salary need to input',
            'note.required'  => 'The note need to input',
            'employee_id.required' => 'The employee id reqired',
           
        ]);
        $salary = Salarys::find($id);
        $salary->release_date = $request->get('release_date');
        $salary->paid_date = $request->get('paid_date');
        $salary->basic_salary = $request->get('basic_salary');
        $salary->note = $request->get('note');
        $salary->employee_id = $request->get('employee_id');
        $salary->save();
        return redirect(route('salary.index'))->with('success','The salary update successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salarys::find($id);
        $salary->delete();
        return redirect(route('salary.index'))->with('success','The salary delete successful!');
    }
}
