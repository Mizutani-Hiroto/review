<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function input(Request $request)
    {
        return view('posts.index');
    }
    
    public function upload(Request $request)
    {
        $this->validate($request,[
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png',
                ]
                ]);

if($request->file('file')->isValed([])) {
    $path = $request->file->store('public');
    
    $file_name = basename($path);
    $user_id = Auth::id();
    $new_image_data = new Image();
    $new_image_data->user_id = $user_id;
    $new_image_data->file_name = $file_name;
    
    $new_image_data->save();
    
    return redirect('posts.img');
} else {
    return redirect()
    ->back()
    ->withInput()
    ->withErrors();
}
}

public function output() {
    $user_id = Auth::id();
    $user_images = Image::whereUser_id($user_id)->get();
    return view('posts.img',['user_images' => $user_images]);
}
}