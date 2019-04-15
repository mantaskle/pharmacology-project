<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacients;

class PacientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacients = Pacients::all()->toArray();
        return view('pacients.index', compact('pacients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'surname'     =>  'required',
            'age'   =>  'required',
            'height'    =>  'required',
            'weight'    =>  'required',
            'condition'    =>  'required',
            'additional_information'    => 'required'

        ]);
        $Pacients = new Pacients([
            'name'    =>  $request->get('name'),
            'surname'     =>  $request->get('surname'),
            'age'    =>  $request->get('age'),
            'height'    =>  $request->get('height'),
            'weight'    =>  $request->get('weight'),
            'condition'    =>  $request->get('condition'),
            'additional_information' => $request->get('additional_information')
        ]);
        $Pacients->save();
        return redirect()->route('pacients.create')->with('success', 'Informacija pridėta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacients = Pacients::find($id);
        return view('pacients.edit', compact('pacients', 'id'));
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
        $this->validate($request, [
            'name'    =>  'required',
            'surname'     =>  'required',
            'age'   =>  'required',
            'height'    =>  'required',
            'weight'    =>  'required',
            'condition'    =>  'required',
            'additional_information'    => 'required'
        ]);
        $pacients = Pacients::find($id);
        $pacients->name = $request->get('name');
        $pacients->surname = $request->get('surname');        
        $pacients->age = $request->get('age');
        $pacients->height = $request->get('height');        
        $pacients->weight = $request->get('weight');
        $pacients->condition = $request->get('condition');
        $pacients->additional_information = $request->get('additional_information');
        $pacients->save();
        return redirect()->route('pacients.index')->with('success', 'Informacija atnaujinta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacients = Pacients::find($id);
        $pacients->delete();
        return redirect()->route('pacients.index')->with('success', 'Informacija pašalinta');
    }
}
