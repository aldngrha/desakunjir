<?php

namespace App\Http\Controllers\KIM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KimController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.KIM.dashboard");
    }
}
