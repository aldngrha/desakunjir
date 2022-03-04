<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryWisataController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.gallery");
    }
}
