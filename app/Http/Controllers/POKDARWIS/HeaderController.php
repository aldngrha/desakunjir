<?php

namespace App\Http\Controllers\POKDARWIS;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\POKDARWIS\HeaderRequest;
use App\Http\Controllers\Controller;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Header::all();

        return view("pages.POKDARWIS.header.index", [
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
        return view("pages.POKDARWIS.header.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderRequest $request)
    {
        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/header", "public");

        Header::create($data);
        return redirect()->route("header.index");
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
        $item = Header::findOrFail($id);

        return view("pages.POKDARWIS.header.edit", [
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
    public function update(HeaderRequest $request, $id)
    {
        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/header", "public");

        $item = Header::findOrFail($id);
        $item->update($data);

        return redirect()->route("header.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Header::findOrFail($id);
        $item->delete();

        return redirect()->route("header.index");
    }
}
