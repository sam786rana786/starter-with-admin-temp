<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $about = About::findOrFail($id);
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'about_school' => 'required',
            'about_image' => 'required|mimes:png,jpg'
        ]);

        $about->about_school = $request->about_school;
        if($request->file('about_image'))
        {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/about/'.$name_gen);
            $save_url = 'backend/uploads/about/'.$name_gen;
            if($about->about_image)
            {
                unlink($about->about_image);
            }
            $about['about_image'] = $save_url;
        }
        $about->save();
        return redirect()->route('about.index')->with('success', 'About Section Updated Successfully');
    }
}
