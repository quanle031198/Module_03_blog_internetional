<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post.list');
    }
    public function create(){
        return view('post.create');
    }
}
