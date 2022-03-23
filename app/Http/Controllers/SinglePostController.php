<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function index(Request $request, $slug)
    {
        $post = Post::with(["photos"])
            ->where("slug", $slug)
            ->firstOrFail();
        return view("pages.single-post", [
            "post" => $post,
        ]);
    }
}
