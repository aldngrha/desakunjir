<?php

namespace App\Http\Controllers\POKDARWIS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PokdarwisController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.POKDARWIS.dashboard");
    }
}
