<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use App\Models\Specialization;
use App\Models\Project;
use App\Models\Expert;
use App\Models\Client;
use App\Models\Blog;
use App\Models\Company;

class MainController extends Controller
{
    public function welcome()
    {
        $about = About::first();
        $sliders = Slider::get();
        $projects = Project::get();
        $experts = Expert::get();
        $clients = Client::get();
        $companies = Company::get();
        $blogs = Blog::with('user')->get();
        $specializations = Specialization::get();
        return view('welcome', compact('about', 'sliders', 'specializations', 'projects', 'experts', 'clients', 'blogs', 'companies'));
    }
    public function about()
    {
        $about = About::first();
        $clients = Client::get();
        $companies = Company::get();
        $experts = Expert::get();
        // $projects = Project::get();
        return view('about', compact('about', 'clients', 'companies', 'experts'));
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
        // $about = About::first();
        $projects = Project::first();
        return view('project', compact('projects'));
    }
    public function project_details()
    {
        $projects = Project::first();
        return view('project_details', compact('projects'));
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
