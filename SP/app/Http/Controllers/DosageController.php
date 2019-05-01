<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medication;
use App\Pacients;

class DosageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('vaistu-dozavimas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaistu-dozavimas');
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
            'age'   =>  'required',
            'weight'    =>  'required',
            'pain'    =>  'required',
            'medication'    => 'required'
        ]);

        $age = $request->get('age');
        $weight = $request->get('weight');
        $pain= $request->get('pain');        
        $medication = $request->get('medication');

        $selectedID = 1;

        $quantity = 0; 
        $time = 0;
        
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

        switch($medication)
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

        return view('/rezultatai', compact('time', 'quantity', 'medication'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
