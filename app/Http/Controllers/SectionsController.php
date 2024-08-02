<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\ImageUploader;
use App\Models\Section;
use App\Models\SectionDetail;
use App\Models\SectionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SectionsController extends Controller
{
    use ImageUploader;
    public function index()
    {
        if(auth()->check())
        {
            $locale = App::getLocale();
        $sections = Section::get();

            return view('dashboard.sections', compact('sections', 'locale'));
        }

        $locale = App::getLocale();
        $sections = Section::with(['details.images'])
                            ->where('is_visable', true)
                            ->get();

        return view('sections.index', compact('sections', 'locale'));
    }

    public function show($id)
    {
        $locale = App::getLocale(); // Get current locale
        $section = Section::with(['details.images'])
                          ->where('id', $id)
                          ->first();


        if (!$section) {
            return redirect()->route('dashboard.sections')->with('error', 'Section not found or not visible.');
        }

        return view('dashboard.section-details', compact('section', 'locale'));
    }

    public function edit($id)
    {
        $section = Section::where('id', $id)->with('images')->first();
        if (!$section) {
            return redirect()->route('sections.index')->with('error', 'Section not found.');
        }
        return view('Dashboard.edit-section', compact('section'));
    }

    public function update(Request $request, $id)
{
    $section = Section::findOrFail($id);

    $section->update([
        'section_title_en' => $request->input('section_title_en'),
        'section_title_ar' => $request->input('section_title_ar'),
        'section_description_en' => $request->input('section_description_en'),
        'section_description_ar' => $request->input('section_description_ar'),
        'is_visable' => $request->input('is_visable'),
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $section->images()->create(['image' => $this->uploadMultipleImages($image, 'public/uploads')]);
        }
    }

    return redirect()->route('adminsections.index')->with('success', 'Section updated successfully.');
}

    public function createDetail($id)
    {
        $section = Section::where('id', $id)->first();
        if (!$section) {
            return redirect()->back()->with('error', 'Section not found.');
        }
        return view('Dashboard.create-sectionDetail', compact('section'));
    }

    public function storeDetail(Request $request, $id)
    {
        $section = Section::where('id', $id)->first();
        if (!$section) {
            return redirect()->back()->with('error', 'Section not found.');
        }

        $detail = $section->details()->create([
            'content_title_en' => $request->input('content_title_en'),
            'content_title_ar' => $request->input('content_title_ar'),
            'content_description_en' => $request->input('content_description_en'),
            'content_description_ar' => $request->input('content_description_ar'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $detail->images()->create(['image' => $this->uploadMultipleImages($image, 'public/uploads')]);
            }
        }

        return redirect()->route('adminsections.details',$section->id)->with('success', 'Section detail created successfully.');
    }

    public function editDetail($id)
    {
        $detail = SectionDetail::where('id', $id)->with('images')->first();
        if (!$detail) {
            return redirect()->route('sections.index')->with('error', 'Section detail not found.');
        }
        return view('Dashboard.edit-sectionDetail', compact('detail'));
    }

    public function updateDetail(Request $request, $id)
    {
        $detail = SectionDetail::find($id);
        if (!$detail) {
            return redirect()->back()->with('error', 'Section detail not found.');
        }

        $detail->update([
            'content_title_en' => $request->input('content_title_en'),
            'content_title_ar' => $request->input('content_title_ar'),
            'content_description_en' => $request->input('content_description_en'),
            'content_description_ar' => $request->input('content_description_ar'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $detail->images()->create(['image' => $this->uploadMultipleImages($image, 'public/uploads')]);
            }
        }


        return redirect()->back()->with('success', 'Section detail updated successfully.');
    }



    public function destroyImage($id)
    {
        $image = SectionImage::find($id);
        if (!$image) {
            return redirect()->back()->with('error', 'Image not found.');
        }
        $this->removeImage("public/uploads", $image->image);
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function destroyDetail($id)
    {
        $detail = SectionDetail::find($id);
        if (!$detail) {
            return redirect()->route('adminsections.index')->with('error', 'Detail not found.');
        }

        // Delete associated images
        $images= SectionImage::where('section_detail_id', $id)->get();
        foreach ($images as $image) {
            $this->removeImage("public/uploads", $image->image);
            $image->delete();
        }

        $detail->delete();

        return redirect()->route('adminsections.index')->with('success', 'Section detail and its images deleted successfully.');
    }
}
