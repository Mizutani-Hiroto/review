<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index(){
        
        $posts = Auth::user()->posts;
        
        return view('posts.mypage', compact('posts'));
    }
}
