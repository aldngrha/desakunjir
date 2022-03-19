<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(["galleries"])->get();
        $posts = Post::latest()->get();

        return view("pages.home", [
            "items" => $items,
            "posts" => $posts,
        ]);
    }
}
