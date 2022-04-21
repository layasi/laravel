<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
        'name' => 'required|max:255',
        'email' => 'required|email',
        'password' => 'required|confirmed'
        ]);

        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);

        $register->save();

        auth()->attempt($request->only('email', 'password'));

        session()->flash('success', 'Your registration is successful.');
        return redirect()->route('dashboard');
    }
}

