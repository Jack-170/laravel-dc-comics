<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicFormRequest;
use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->release_date = $data['release_date'];
        $newComic->price = $data['price'];

        $newComic->save();

        return redirect()->route('users.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicFormRequest $request, $id)
    {
        $comic = Comic::find($id);
        $data = $request->all();

        // $data = $request->validate([
        //     'title' => 'required|string|min:3|max:255',
        //     'release_date' => 'required|date',
        //     'price' => 'required|numeric',
        // ]);

        $comic->title = $data['title'];
        $comic->release_date = $data['release_date'];
        $comic->price = $data['price'];

        $comic->save();
        return redirect()->route('users.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('users.index');
    }
}
