<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::all();
        return view("pages.paket", [
            "items" => $items,
        ]);
    }
}
