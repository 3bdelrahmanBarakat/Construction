<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function create()
    {
        return view('dashboard.logo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->extension();
        $logo->move(public_path('images'), $logoName);

        $logo = new Logo();
        $logo->logo = $logoName;
        $logo->save();

        return redirect()->route('admin.index');
    }

    public function edit()
    {
        $logo = Logo::first();
        return view('dashboard.logo.edit', compact('logo'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->extension();
        $logo->move(public_path('images'), $logoName);

        $logo = Logo::first();
        $logo->logo = $logoName;
        $logo->save();

        return redirect()->route('adminindex');
    }
}
