<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.single-post");
    }
}
