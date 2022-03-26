<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::get();
        return view('experties.index' , compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experties.create');
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
            'name'             => ['required', 'string', 'max:255'],
            'designation'               => ['required', 'string'],
            'facebook'   => ['required', 'string'],
            'instagram'  => ['required', 'string'],
            'twitter'        => ['required'],
            'gmail'    => ['required'],
            'whatsapp'           => ['required'],
            'picture'           => ['required'],
        ]);
        $experts = Expert::create([
            'name'                       =>   $request->name,
            'designation'                =>   $request->designation,
            'facebook'                   =>   $request->facebook,
            'instagram'                  =>   $request->instagram,
            'twitter'                    =>   $request->twitter,
            'gmail'                      =>   $request->gmail,
            'whatsapp'                   =>   $request->whatsapp,
            'picture'                    =>   $request->file('picture')->store('experts'),

        ]);
        return redirect()->route('experts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function edit(Expert $expert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expert $expert)
    {
        //
    }
}
