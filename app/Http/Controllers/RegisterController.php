<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // dd($request);
        $this->validate($request, [
            'name' => ['required', 'min:4', 'max:30', 'regex:/^[A-Za-záéíóúÁÉÍÓÚ\s]+$/u'],
            'username' => ['required', 'alpha_dash','unique:users', 'min:4', 'max:20'],
            'email' => ['required', 'email','unique:users', 'max:50'],
            'password' => ['required', 'confirmed',],
        ]);

    }
}
