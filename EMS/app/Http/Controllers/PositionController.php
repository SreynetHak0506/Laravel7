<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positions;
class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Positions::all();
        return view('position.index', compact('data'));
    }

  
    public function create()
    {
        return view('position.create');
    }

  
    public function store(Request $request)
    { 
        $request ->validate([
            'position'=>'required|min:5|max:255|unique:positions',
            'note'=>'required|min:2'
        ],[
            'position.required' => 'The position need to input',
            'note.required'  => 'The note need to input',
           
        ]);
        $position = new Positions();
        $position->position = $request->get('position');
        $position->note = $request->get('note');
        $position->save();
        return redirect(route('position.index'))->with('success','The position create successful!');
    }


    public function show($id)
    {
        $data = Positions::find($id);
        return view('position.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = Positions::find($id);
        return view('position.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        $request ->validate([
            'position'=>'required|min:5|max:255|unique:positions',
            'note'=>'required|min:2'
        ],[
            'position.required' => 'The position need to input',
            'note.required'  => 'The note need to input',
           
        ]);
        $position = Positions::find($id);
        $position->position = $request->get('position');
        $position->note = $request->get('note');
        $position->save();
        return redirect(route('position.index'))->with('success','The position update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Positions::find($id);
        $position->delete();
        return redirect(route('position.index'))->with('danger','The position delete success!');
    }
}
