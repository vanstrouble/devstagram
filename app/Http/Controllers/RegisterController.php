<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return redirect()->route('home', [
                'posts' => auth()->user()->posts
            ]);
        }
        return view('auth.sign');
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => ['required', 'min:4', 'max:30', 'regex:/^[A-Za-záéíóúÁÉÍÓÚ\s]+$/u'],
            'username' => ['required', 'alpha_dash', 'unique:users', 'min:4', 'max:20'],
            'email' => ['required', 'email', 'unique:users', 'max:50'],
            'password' => ['required', 'confirmed',],
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username,),
            'email' => $request->email,
            'password' => Hash::make($request->password,),
        ]);

        // Authent user
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => Hash::make( $request->password,),
        // ]);

        // Another way to authent user
        auth()->attempt($request->only('email', 'password'));

        // Return view
        // return redirect()->route('dash.index');
        return redirect()->route('dash.index', ['user' => auth()->user()->username]);
    }
}
