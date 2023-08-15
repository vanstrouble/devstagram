<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (auth()->user()) {
            return redirect()->route('home', [
                'posts' => auth()->user()->posts
            ]);
        }
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd($request->remember); // Testing Remember checkbox

        $this->validate($request, [
            'email' => ['required', 'email',],
            'password' => ['required',],
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember))
        {
            return back()->with('message', 'Invalid credentials');
        }
        return redirect()->route('dash.index', auth()->user()->username);
    }
}
