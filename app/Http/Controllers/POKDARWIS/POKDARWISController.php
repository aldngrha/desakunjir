<?php

namespace App\Http\Controllers\POKDARWIS;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class PokdarwisController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.POKDARWIS.dashboard", [
            "travel_packages" => TravelPackage::count(),
            "transaction" => Transaction::count(),
            "transaction_pending" => Transaction::where(
                "transaction_status",
                "PENDING"
            )->count(),
            "transaction_success" => Transaction::where(
                "transaction_status",
                "SUCCESS"
            )->count(),
        ]);
    }
}
