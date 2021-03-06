<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->findOrFail($id);

        return view("pages.checkout", [
            "item" => $item,
        ]);
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        $transaction = Transaction::create([
            "travel_packages_id" => $id,
            "users_id" => Auth::user()->id,
            "transaction_total" =>
                ($travel_package->price * 5) / 100 + $travel_package->price,
            "transaction_status" => "IN_CART",
        ]);

        TransactionDetail::create([
            "transactions_id" => $transaction->id,
            "name" => Auth::user()->name,
            "email" => Auth::user()->email,
            "number" => Auth::user()->whatsapp_number,
        ]);

        return redirect()->route("checkout", $transaction->id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|string|exists:users,email",
            "number" => "required|string",
        ]);

        $data = $request->all();
        $data["transactions_id"] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(["travel_package"])->find($id);

        // $total = ($transaction->travel_package->price * 5 / 100) + ($transaction->travel_package->price)

        $transaction->transaction_total +=
            ($transaction->travel_package->price * 5) / 100 +
            $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route("checkout", $id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = "PENDING";

        $transaction->save();

        return view("pages.success");
    }
}
