<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departments;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Departments::all();
        return view('department.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
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
            'department'=>'required|min:2|max:255|unique:departments',
            'note'=>'required|min:2'
        ],[
            'department.required' => 'The departmend need to input',
            'note.required'  => 'The note need to input',
           
        ]);
        $department = new Departments();
        $department->department = $request->get('department');
        $department->note = $request->get('note');
        $department->save();
        return redirect(route('department.index'))->with('success','The department create successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Departments::find($id);
        return view('department.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Departments::find($id);
        return view('department.edit', compact('data'));
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
            'department'=>'required|min:2|max:255|unique:departments',
            'note'=>'required|min:2'
        ],[
            'department.required' => 'The departmend need to input',
            'note.required'  => 'The note need to input',
           
        ]);
        $department = Departments::find($id);
        $department->department = $request->get('department');
        $department->note = $request->get('note');
        $department->save();
        return redirect(route('department.index'))->with('success','The department update successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Departments::find($id);
        $department->delete();
        return redirect(route('department.index'))->with('danger',' The department Delete success!');
    }
}
