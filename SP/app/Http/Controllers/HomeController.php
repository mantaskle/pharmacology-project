<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email = Auth::user()->email;
        return view('home');
    }

    public function approval()
    {
        return view('approval');
    }    

    public function profile()
    {
        return view('profile');
    }

    public function edit()
    {        
        $user = User::find(Auth::user()->id);
        return view('edit_profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');  
        $user->save();
        return redirect()->route('profile')->with('success', 'Informacija atnaujinta');
    }
}
