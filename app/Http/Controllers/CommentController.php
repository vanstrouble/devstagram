<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd('commenting...');
        $this->validate($request, [
            'comment' => ['required', 'max:255'],
        ]);
    }
}
