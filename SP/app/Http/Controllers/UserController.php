<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::whereNull('approved_at')->get();        

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('Vartotojas patvirtintas sėkmingai!');
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();

        return redirect()->route('admin.users.index')->withMessage('Vartotojo registracija atmesta sėkmingai!');
    }

}