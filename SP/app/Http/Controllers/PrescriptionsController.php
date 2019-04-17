<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescriptions;

class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescriptions::all()->toArray();
        return view('prescriptions.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prescriptions.create');
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
            'dosage_amount'     =>  'required',
            'dosage_time'   =>  'required',
            'from_date'    =>  'required',
            'to_date'    =>  'required',
            'additional_information'    => 'required',
            'pacient_id'    =>  'required',
            'medication_id'    =>  'required'

        ]);
        $prescriptions = new Prescriptions([
            'name'    =>  $request->get('name'),
            'dosage_amount'     =>  $request->get('dosage_amount'),
            'dosage_time'    =>  $request->get('dosage_time'),
            'from_date'    =>  $request->get('from_date'),
            'to_date'    =>  $request->get('to_date'),
            'additional_information' => $request->get('additional_information'),
            'pacient_id'    =>  $request->get('pacient_id'),
            'medication_id'    =>  $request->get('medication_id')
        ]);
        $prescriptions->save();
        return redirect()->route('prescriptions.create')->with('success', 'Informacija pridėta');
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
        $prescriptions = prescriptions::find($id);
        return view('prescriptions.edit', compact('prescriptions', 'id'));
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
            'dosage_amount'     =>  'required',
            'dosage_time'   =>  'required',
            'from_date'    =>  'required',
            'to_date'    =>  'required',
            'additional_information'    => 'required',
            'pacient_id'    =>  'required',
            'medication_id'    =>  'required'
        ]);
        $prescriptions = Prescriptions::find($id);
        $prescriptions->name = $request->get('name');
        $prescriptions->dosage_amount = $request->get('dosage_amount');        
        $prescriptions->dosage_time = $request->get('dosage_time');
        $prescriptions->from_date = $request->get('from_date');        
        $prescriptions->to_date = $request->get('to_date');
        $prescriptions->additional_information = $request->get('additional_information');
        $prescriptions->pacient_id = $request->get('pacient_id');        
        $prescriptions->medication_id = $request->get('medication_id');
        $prescriptions->save();
        return redirect()->route('prescriptions.index')->with('success', 'Informacija atnaujinta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prescriptions = Prescriptions::find($id);
        $prescriptions->delete();
        return redirect()->route('prescriptions.index')->with('success', 'Informacija pašalinta');
    }
}
