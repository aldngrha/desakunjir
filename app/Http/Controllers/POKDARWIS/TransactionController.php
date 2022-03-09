<?php

namespace App\Http\Controllers\POKDARWIS;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\POKDARWIS\TransactionRequest;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->get();

        return view("pages.POKDARWIS.transaction.index", [
            "items" => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("pages.POKDARWIS.transaction.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($request->title);

        Transaction::create($data);
        return redirect()->route("transaction.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->findOrFail($id);

        return view("pages.POKDARWIS.transaction.detail", [
            "item" => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view("pages.POKDARWIS.transaction.edit", [
            "item" => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($request->title);

        $item = Transaction::findOrFail($id);
        $item->update($data);

        return redirect()->route("transaction.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();

        return redirect()->route("transaction.index");
    }
}
