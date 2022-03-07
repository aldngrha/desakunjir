<?php

namespace App\Http\Controllers\POKDARWIS;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\POKDARWIS\OwnerRequest;
use App\Models\Owner;
use App\Http\Controllers\Controller;
use App\Models\TravelPackage;

class ownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Owner::with(["travel_package"])->get();

        return view("pages.POKDARWIS.owner.index", [
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
        $travel_package = TravelPackage::all();
        return view("pages.POKDARWIS.owner.create", [
            "travel_packages" => $travel_package,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        $data = $request->all();

        Owner::create($data);
        return redirect()->route("owner.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Owner::findOrFail($id);
        $travel_package = TravelPackage::all();

        return view("pages.POKDARWIS.owner.edit", [
            "item" => $item,
            "travel_packages" => $travel_package,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, $id)
    {
        $data = $request->all();

        $item = Owner::findOrFail($id);
        $item->update($data);

        return redirect()->route("owner.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Owner::findOrFail($id);
        $item->delete();

        return redirect()->route("owner.index");
    }
}
