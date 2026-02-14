<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\TeamMember;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::featured()->ordered()->take(6)->get();
        $projects = Project::featured()->latest()->take(6)->get();
        $testimonials = Testimonial::latest()->take(5)->get();

        return view('home', compact('services', 'projects', 'testimonials'));
    }

    public function about()
    {
        $team = TeamMember::ordered()->get();
        return view('about', compact('team'));
    }

    public function services()
    {
        $services = Service::ordered()->get();
        return view('services', compact('services'));
    }

    public function portfolio()
    {
        $projects = Project::latest()->get();
        $categories = Project::select('category')->distinct()->pluck('category');
        return view('portfolio', compact('projects', 'categories'));
    }

    public function contact()
    {
        $services = Service::ordered()->get();
        return view('contact', compact('services'));
    }
}
