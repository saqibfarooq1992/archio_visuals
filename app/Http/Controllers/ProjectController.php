<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
            'slider_title'              => ['required', 'string', 'max:255'],
            'title'                     => ['required', 'string'],
            'slogan'                    => ['required', 'string'],
            'project_name'              => ['required', 'string'],
            'client'                    => ['required', 'string'],
            'location'                  => ['required'],
            'surface_area'              => ['required', 'string'],
            'year_completed'            => ['required'],
            'value'                     => ['required', 'string'],
            'architect'                 => ['required', 'string'],
            'short_description'         => ['required', 'string'],
            'detail_description'        => ['required', 'string'],
            'banner_image'              => ['required'],
            'picture_1'                 => ['required'],
            'picture_2'                 => ['required'],
            'picture_3'                 => ['required'],
            'picture_slider_1'          => ['required'],
            'picture_slider_2'          => ['required'],
            'picture_slider_3'          => ['required'],
            'slug'                      => ['required'],
        ]);


        $project = Project::create([
            'slider_title'                  =>   $request->slider_title,
            'title'                         =>   $request->title,
            'slogan'                        =>   $request->slogan,
            'project_name'                  =>   $request->project_name,
            'client'                        =>   $request->client,
            'location'                      =>   $request->location,
            'surface_area'                  =>   $request->surface_area,
            'year_completed'                =>   $request->year_completed,
            'value'                         =>   $request->value,
            'architect'                     =>   $request->architect,
            'short_description'             =>   $request->short_description,
            'detail_description'            =>   $request->detail_description,
            'banner_image'                  =>   $request->file('banner_image')->store('project'),
            'picture_1'                     =>   $request->file('picture_1')->store('project'),
            'picture_2'                     =>   $request->file('picture_2')->store('project'),
            'picture_3'                     =>   $request->file('picture_3')->store('project'),
            'picture_slider_1'              =>   $request->file('picture_slider_1')->store('project'),
            'picture_slider_2'              =>   $request->file('picture_slider_2')->store('project'),
            'picture_slider_3'              =>   $request->file('picture_slider_3')->store('project'),
            'slug'                          =>   $request->slug,


        ]);
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->slider_title = $request->slider_title;
        $project->title        = $request->title;
        $project->slogan       = $request->slogan;
        $project->project_name = $request->project_name;
        $project->slug         = $request->slug;

        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
