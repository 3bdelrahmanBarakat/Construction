<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $get_started = Section::with('images')->where('id', '1')->first();
        $services = Section::with('images', 'details.images')->where('id', '2')->first();
        $projects = Section::with('images', 'details.images')->where('id', '3')->first();
        $testimonials = Section::with('images', 'details.images')->where('id', '4')->first();
        $logo = Section::with('images')->where('id', '6')->first();
        $aboutUs = Section::with('images')->where('id', '7')->first();

        return view('index',[
            'get_started' => $get_started,
            'services' => $services,
            'projects' => $projects,
            'testimonials' => $testimonials,
            'logo' => $logo,
            'about_us' => $aboutUs,
        ]);
    }
}
