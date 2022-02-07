<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $albums = Album::all();
      //  $carts = Cart::all();
        $categories = Category::all();
        $users = User::all();
        $images = Image::all();

        return view('album.index', compact('albums', /* 'carts', */ 'categories', 'users', 'images'));
    }

    public function dashboard(Request $request)
    {

        $albums = Album::all();
        $carts = Cart::all();
        $categories = Category::all();
        $users = User::all();
        $images = Image::all();

        return view('albums.dashboard', compact('albums', 'carts', 'categories', 'users', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = new Album();
        return view('album.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Album::$rules);

        $album = Album::create($request->all());

        return redirect()->route('albums.index')
            ->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $albums = Album::all();
        $carts = Cart::all();
        $categories = Category::all();
        $users = User::all();
        $images = Image::all();
        $existes = 'existe';



        return view('album.show', compact('albums', 'carts', 'categories', 'users', 'images', 'existes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);

        return view('album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Album $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        request()->validate(Album::$rules);

        $album->update($request->all());

        return redirect()->route('albums.index')
            ->with('success', 'Album updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $album = Album::find($id)->delete();

        return redirect()->route('albums.index')
            ->with('success', 'Album deleted successfully');
    }
}
