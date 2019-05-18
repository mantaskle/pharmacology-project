<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescriptions;
use App\Pacients;
use App\Medication;

class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescriptions::paginate(10);

        return view('prescriptions.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $allPacients = pacients::all();
        $allMeds = medication::all();
        return view('prescriptions.create', compact('allMeds', 'allPacients'));
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
            'prescription_id'    =>  'required',
            'from_date'    =>  'required',
            'to_date'    =>  'required',
            'additional_information'    => 'required',
            'pacient_id'    =>  'required',
            'medication_id'    =>  'required'

        ]);
        $prescriptions = new Prescriptions([
            'prescription_id'    =>  $request->get('prescription_id'),
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
        $prescription = Prescriptions::find($id);
        $p = Pacients::find($prescription->pacient_id);
        
        
        $quantity = 0; 
        $time = 0;
        
        $pain = $p['condition'];
        $age = $p['age'];
        $weight = $p['weight'];
        switch ($pain)
        {
            case ($pain < 4 && $pain > 0):
                if($age < 12)
                { 
                    $quantity = $weight*0.05;
                    $time = 4;
                }
                else
                {
                    $quantity = $weight*0.1;
                    $time = 4;
                }
            break;

            case ($pain < 8 && $pain > 4):
                if($age < 12)
                { 
                    $quantity = $weight*0.1;
                    $time = 4;
                }
                else
                {
                    $quantity = $weight*0.2;
                    $time = 4;
                }
            break;

            default:
                if($age < 12)
                { 
                    $quantity = $weight*0.15;
                    $time = 3;
                }
                else
                {
                    $quantity = $weight*0.4;
                    $time = 3;
                }
            break;
        }

        $med = Medication::find($prescription->medication_id)->name;
        switch($med)
        {
            case 'Morphine':
                $quantity = $quantity / 10;
            break;
            
            case 'Codeine':
                $quantity = $quantity * 6.7;
            break;

            case 'Oxycodone':
                $time = $time * 2.2;
            break;

            case 'Methadone':
                $quantity = $quantity * 0.67;
                $time = $time * 2;
            break;

            case 'Hydromorphone':
                $quantity = $quantity * 0.25;
            break;

            case 'Meperidine':
                $quantity = $quantity * 10;
                $time = $time - 1;
            break;

            /* Morphine */
            default:                
                $quantity = $quantity / 10;
            break;

        }        
        
        return view('prescriptions.results', compact('quantity', 'time', 'p', 'prescription', 'med'));
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
        $allPacients = pacients::all();
        $pacient = pacients::find($prescriptions->pacient_id);
        $allMeds = medication::all();
        $medication = medication::find($prescriptions->medication_id);
        return view('prescriptions.edit', compact('prescriptions', 'id', 'allPacients', 'pacient', 'allMeds', 'medication'));
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
            'prescription_id'    =>  'required',
            'from_date'    =>  'required',
            'to_date'    =>  'required',
            'additional_information'    => 'required',
            'pacient_id'    =>  'required',
            'medication_id'    =>  'required'
        ]);
        $prescriptions = Prescriptions::find($id);
        $prescriptions->prescription_id = $request->get('prescription_id');
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
