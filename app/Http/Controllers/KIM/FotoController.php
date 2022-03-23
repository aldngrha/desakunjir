<?php

namespace App\Http\Controllers\KIM;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\KIM\FotoRequest;
use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Post;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Foto::with(["post"])->get();

        return view("pages.KIM.foto.index", [
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
        $posts = Post::all();
        return view("pages.KIM.foto.create", [
            "posts" => $posts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FotoRequest $request)
    {
        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/foto", "public");

        Foto::create($data);
        return redirect()->route("foto.index");
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
        $item = Foto::findOrFail($id);
        $posts = Post::all();

        return view("pages.KIM.foto.edit", [
            "item" => $item,
            "posts" => $posts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FotoRequest $request, $id)
    {
        $data = $request->all();

        $item = Foto::findOrFail($id);
        $data["image"] = $request
            ->file("image")
            ->store("assets/foto", "public");
        $item->update($data);

        return redirect()->route("foto.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Foto::findOrFail($id);
        $item->delete();

        return redirect()->route("foto.index");
    }
}
