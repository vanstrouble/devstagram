<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd('This is the profile');
        return view('settings.index');
    }

    public function store(Request $request)
    {
        // dd('This is a test');
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'username' => ['required', 'alpha_dash', 'unique:users,username,' . auth()->user()->id, 'min:4', 'max:20', 'not_in:edit-profile,'],
        ]);
    }
}
