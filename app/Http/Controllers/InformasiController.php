<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with(["photos"])->latest()->get();

        return view("pages.informasi", [
            "posts" => $posts,
        ]);
    }
}
