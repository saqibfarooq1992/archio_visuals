<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Str;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('user')->get();
        return view('blogs.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $request->validate([
            'blog_heading' =>   'required',
            'blog_details_heading'  =>  'required',
            'blog_slogan'   =>  'required',
            'title' =>  'required',
            'tags'  =>  'required',
            'short_description' => 'required',
            'details_description'   => 'required',
            'picture'   =>  'required',
        ]);
        $blogs = Blog::create([
            'blog_heading'  =>  $request->blog_heading,
            'blog_details_heading'  =>  $request->blog_details_heading,
            'blog_slogan'   =>  $request->blog_slogan,
            'title' =>  $request->title,
            'slug'  =>  Str::slug($request->title),
            'user_id'  =>  $id,
            'tags'  =>  $request->tags,
            'short_description' => $request->short_description,
            'details_description'   =>  $request->details_description,
            'picture'   =>  $request->file('picture')->store('blogs'),
        ]);
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
