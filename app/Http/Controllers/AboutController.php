<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\SectionDetail;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $customers = Section::with('images')->where('id', '5')->first();
        $certificates = Section::with('images')->where('id', '8')->first();
        $video = Section::where('id', '9')->first();
        return view('about',[
            "customers" => $customers,
            "certificates" => $certificates,
            "video" => $video,
        ]);
    }

    public function project($locale, $id)
    {
        $project = SectionDetail::with('images')->where('id', $id)->first();
        return view('project-details',[
            "project" => $project,
        ]);
    }
}
