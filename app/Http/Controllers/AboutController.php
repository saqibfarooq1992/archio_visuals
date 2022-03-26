<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::get();
        return view('abouts.index' , compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading'             => ['required', 'string', 'max:255'],
            'slogan'               => ['required', 'string'],
            'short_description'   => ['required', 'string'],
            'detail_description'  => ['required', 'string'],
            'banner_image'        => ['required'],
            'background_image'    => ['required'],
            'picture_1'           => ['required'],
            'picture_2'           => ['required'],
        ]);
        $about = About::create([
            'heading'               =>   $request->heading,
            'slogan'                =>   $request->slogan,
            'short_description'     =>   $request->short_description,
            'detail_description'    =>   $request->detail_description,
            'banner_image'          =>   $request->file('banner_image')->store('abouts'),
            'background_image'      =>   $request->file('background_image')->store('abouts'),
            'picture_1'             =>   $request->file('picture_1')->store('abouts'),
            'picture_2'             =>   $request->file('picture_2')->store('abouts'),

        ]);
        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
