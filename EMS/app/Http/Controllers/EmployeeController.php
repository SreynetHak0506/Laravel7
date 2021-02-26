<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use App\Departments;
use App\Positions;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employees::all();
        return view('employee.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::all();
        $positions = Positions::all();
        return view('employee.create',compact('departments','positions'));
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
            'emp_code'=>'required|unique:employees',
            'emp_name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'marital_status'=>'required',
            'basic_salary'=>'required',
            'email'=>'required||email',
            'phone'=>'required',
            'address'=>'required',
            'file'=> 'required|image|mimes:png,jpg,gif|max:2048',
            'department_id'=>'required|not_in:-1|integer',
            'position_id'=>'required|not_in:-1|integer',
            
        ],[
            'emp_code.required'=>'The employee code must be complete',
            'emp_name.required'=>'The employee name must be complete',
            'gender.required'=>'The gender must be complete',
            'dob.required'=>'The day of birth must be complete',
            'marital_status.required'=>'The status must be complete',
            'basic_salary.required'=>'The salary must be complete',
            'email.required'=>'The email must be complete',
            'phone.required'=>'The phone number must be complete',
            'address.required'=>'The address must be complete',
            'file.required'=>'The photo must be complete',
           
        ]);
        $employee = new Employees();
        $employee->emp_code = $request->get('emp_code');
        $employee->emp_name = $request->get('emp_name');
        $employee->gender = $request->get('gender');
        $employee->dob = $request->get('dob');
        $employee->marital_status = $request->get('marital_status');
        $employee->basic_salary = $request->get('basic_salary');
        $employee->joining_date = $request->get('joining_date');
        $employee->leaving_date = $request->get('leaving_date');
        $employee->email= $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->address = $request->get('address');
        $employee->other = $request->get('other');
        if ($files = $request->file('file')) {
            $destinationPath = 'public/images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $employee->photo = "$profileImage";
            }
        $employee->department_id = $request->get('department_id');
        $employee->position_id = $request->get('position_id');
        $employee->save();
        return redirect(route('employee.index'))->with('success',' The employee create successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employees::find($id);
        return view('employee.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employees::find($id);
        $departments = Departments::all();
        $positions = Positions::all();
        return view('employee.edit',compact('data','departments','positions'));
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
        $request ->validate([
            'emp_code'=>'required',
            'emp_name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'marital_status'=>'required',
            'basic_salary'=>'required',
            'joining_date'=>'required',
            'email'=>'required||email',
            'phone'=>'required',
            'address'=>'required',
            'department_id'=>'required|not_in:-1|integer',
            'position_id'=>'required|not_in:-1|integer',
            
        ],[
            'emp_code.required'=>'The employee code must be complete',
            'emp_name.required'=>'The employee name must be complete',
            'gender.required'=>'The gender must be complete',
            'dob.required'=>'The day of birth must be complete',
            'marital_status.required'=>'The status must be complete',
            'basic_salary.required'=>'The salary must be complete',
            'email.required'=>'The email must be complete',
            'phone.required'=>'The phone number must be complete',
            'address.required'=>'The address must be complete',
          
           
        ]);
        $employee = Employees::find($id);
        $employee->emp_code = $request->get('emp_code');
        $employee->emp_name = $request->get('emp_name');
        $employee->gender = $request->get('gender');
        $employee->dob = $request->get('dob');
        $employee->marital_status = $request->get('marital_status');
        $employee->basic_salary = $request->get('basic_salary');
        $employee->joining_date = $request->get('joining_date');
        $employee->leaving_date = $request->get('leaving_date');
        $employee->email= $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->address = $request->get('address');
        $employee->other = $request->get('other');
        if ($files = $request->file('file')) {
            $destinationPath = 'public/images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $employee->photo = "$profileImage";
            }
        $employee->department_id = $request->get('department_id');
        $employee->position_id = $request->get('position_id');
        $employee->save();
        return redirect(route('employee.index'))->with('success',' The employee update successful!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect(route('employee.index'))->with('danger',' The employee delete success!');
    
    }
}
