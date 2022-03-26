<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use App\Models\Specialization;
use App\Models\Project;
use App\Models\Expert;

class MainController extends Controller
{
    public function welcome()
    {
        $about = About::first();
        $sliders = Slider::get();
        $projects = Project::get();
        $experts = Expert::get();
        $specializations = Specialization::get();
        return view('welcome' , compact('about' , 'sliders' , 'specializations' , 'projects' , 'experts'));
    }
    public function about()
    {
        $about = About::first();
        return view('about' , compact('about'));
    }
    public function faq()
    {
        return view('faq');
    }
    public function team()
    {
        return view('team');
    }
    public function service()
    {
        return view('service');
    }
    public function service_detail()
    {
        return view('service_detail');
    }
    public function project()
    {
        return view('project');
    }
    public function project_details()
    {
        return view('project_details');
    }
    public function blogs()
    {
        return view('blog');
    }
    public function blog_detail()
    {
        return view('blogs_detail');
    }
    public function contact()
    {
        return view('contact');
    }
}
