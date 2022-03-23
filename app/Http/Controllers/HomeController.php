<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Post;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(["galleries"])->get();
        $post = Post::with(["photos"])
            ->latest()
            ->get();

        return view("pages.home", [
            "items" => $items,
            "post" => $post,
        ]);
    }
}
