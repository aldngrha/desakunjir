<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryWisataController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Photo::all();
        return view("pages.gallery", [
            "galleries" => $galleries,
        ]);
    }
}
