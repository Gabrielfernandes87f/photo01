<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

/**
 * Class ImageController
 * @package App\Http\Controllers
 */
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate();

        return view('image.index', compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * $images->perPage());
    }

    public function dashboard(Request $request)
    {
        // $albums = Album::paginate();
        $albums = Album::all();
        $carts = Cart::all();
        $categories = Category::all();
        $users = User::all();
        $images = Image::all();

        return view('images', compact('$albums', '$carts', '$categories', '$users', '$images', 'existe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image = new Image();
        return view('image.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Image::$rules);

        $image = Image::create($request->all());

        $requesImg = $request->img;

        $extension = $requestImg->extension();

        $imgName = md5($requestImg->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImg->move(public_path('img/album/'), $imgName);

        $image->img = $imgName;



        $user = auth()->user();
        $image->user_id = $user->id;

        $image->save();

        return redirect('/')->with('msg', 'Album criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);

        return view('image.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);

        return view('image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        request()->validate(Image::$rules);

        $image->update($request->all());

        return redirect()->route('images.index')
            ->with('success', 'Image updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $image = Image::find($id)->delete();

        return redirect()->route('images.index')
            ->with('success', 'Image deleted successfully');
    }
}
