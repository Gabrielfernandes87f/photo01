<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;


        $testimonial->name = $request->name;
        $testimonial->profissao = $request->profissao;
        $testimonial->depoimento = $request->depoimento;
        $testimonial->instagram = $request->instagram;





        // Image Upload
        if($request->hasFile('image_testimonial') && $request->file('image_testimonial')->isValid()) {

            $requestImage_testimonial = $request->image_testimonial;


            $extension = $requestImage_testimonial->extension();

            $image_testimonialName = md5($requestImage_testimonial->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage_testimonial->move(public_path('img/depoimento'), $image_testimonialName);

            $testimonial->image_testimonial = $image_testimonialName;


        }

        $user = auth()->user();
        $testimonial->user_id = $user->id;

        $testimonial->save();


        return redirect('/')->with('msg', 'Depoimento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $testimonial = Testimonial::findOrFail($id);
        $user = auth()->user();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }

}
