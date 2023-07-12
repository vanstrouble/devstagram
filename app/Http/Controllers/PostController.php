<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // dd('Creando publicacion');
        $this->validate($request, [
            'title' => ['required','max:255'],
            'description' => ['required','max:2200'],
            'image' => ['required'],
        ]);
    }
}
