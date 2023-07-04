<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        $image = $request->file('file');
        $nameImage = Str::uuid() . "." . $image->extension();
        $imageServer = Image::make($image);
        $imageServer->fit(1_000, 1_000);
        $imagePath = public_path('uploads') . '/' . $nameImage;
        $imageServer->save($imagePath);

        return response()->json(['image' => $nameImage]);
    }
}
