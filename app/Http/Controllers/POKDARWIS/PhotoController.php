<?php

namespace App\Http\Controllers\POKDARWIS;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\POKDARWIS\PhotoRequest;
use App\Models\Photo;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Photo::all();
        return view("pages.POKDARWIS.photo.index", [
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
        return view("pages.POKDARWIS.photo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/photo", "public");

        Photo::create($data);
        return redirect()->route("photo.index");
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
        $item = Photo::findOrFail($id);

        return view("pages.POKDARWIS.photo.edit", [
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
    public function update(PhotoRequest $request, $id)
    {
        $data = $request->all();

        $item = Photo::findOrFail($id);
        $data["image"] = $request
            ->file("image")
            ->store("assets/photo", "public");

        $item->update($data);

        return redirect()->route("photo.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Photo::findOrFail($id);
        $item->delete();

        return redirect()->route("photo.index");
    }
}
