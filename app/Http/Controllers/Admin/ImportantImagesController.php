<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ImportantImages;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ImportantImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imp = ImportantImages::findOrFail(2);
        return view('admin.important.index', compact('imp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImportantImages  $importantImages
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportantImages $importantImages)
    {
        $importantImages = ImportantImages::findOrFail(2);
        return view('admin.important.edit', compact('importantImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImportantImages  $importantImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportantImages $importantImages)
    {
        $request->validate([
            'style' => 'required'
        ]);
        $importantImages = ImportantImages::findOrFail(2);
        if($request->file('header_image'))
        {
            $request->validate([
                'header_image' => 'required|image|mimes:png,jpg'
            ]);
            $header_image = $request->file('header_image');
            $name_gen = hexdec(uniqid()). '.' .$header_image->getClientOriginalExtension();
            Image::make($header_image)->resize(1920, 141)->save('backend/uploads/importantImages/'.$name_gen);
            $h_url = 'backend/uploads/importantImages/'.$name_gen;
            if(file_exists(public_path($importantImages->header_image))){unlink($importantImages->header_image);}
            $importantImages->header_image = $h_url;
        }

        if($request->file('mandatory_image'))
        {
            $request->validate([
                'mandatory_image' => 'required|image|mimes:png,jpg'
            ]);
            $mandatory_image = $request->file('mandatory_image');
            $name_gen = hexdec(uniqid()). '.' .$mandatory_image->getClientOriginalExtension();
            Image::make($mandatory_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $m_url = 'backend/uploads/importantImages/'.$name_gen;
            if(file_exists(public_path($importantImages->mandatory_image))){unlink($importantImages->mandatory_image);}
            $importantImages->mandatory_image = $m_url;
        }

        if($request->file('facilities_image'))
        {
            $request->validate([
                'facilities_image' => 'required|image|mimes:png,jpg'
            ]);
            $facilities_image = $request->file('facilities_image');
            $name_gen = hexdec(uniqid()). '.' .$facilities_image->getClientOriginalExtension();
            Image::make($facilities_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $f_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->facilities_image){unlink($importantImages->facilities_image);}
            $importantImages->facilities_image = $f_url;
        }

        if($request->file('admission_image'))
        {
            $request->validate([
                'admission_image' => 'required|image|mimes:png,jpg'
            ]);
            $admission_image = $request->file('admission_image');
            $name_gen = hexdec(uniqid()). '.' .$admission_image->getClientOriginalExtension();
            Image::make($admission_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $ad_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->admission_image){unlink($importantImages->admission_image);}
            $importantImages->admission_image = $ad_url;
        }

        if($request->file('achievements_image'))
        {
            $request->validate([
                'achievements_image' => 'required|image|mimes:png,jpg'
            ]);
            $achievements_image = $request->file('achievements_image');
            $name_gen = hexdec(uniqid()). '.' .$achievements_image->getClientOriginalExtension();
            Image::make($achievements_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $ach_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->achievements_image){unlink($importantImages->achievements_image);}
            $importantImages->achievements_image = $ach_url;
        }

        if($request->file('info_link_image'))
        {
            $request->validate([
                'info_link_image' => 'required|image|mimes:png,jpg'
            ]);
            $infoLink_image = $request->file('info_link_image');
            $name_gen = hexdec(uniqid()). '.' .$infoLink_image->getClientOriginalExtension();
            Image::make($infoLink_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $info_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->infoLink_image){unlink($importantImages->infoLink_image);}
            $importantImages->infoLink_image = $info_url;
        }

        if($request->file('gallery_image'))
        {
            $request->validate([
                'gallery_image' => 'required|image|mimes:png,jpg'
            ]);
            $gallery_image = $request->file('gallery_image');
            $name_gen = hexdec(uniqid()). '.' .$gallery_image->getClientOriginalExtension();
            Image::make($gallery_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $g_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->gallery_image){unlink($importantImages->gallery_image);}
            $importantImages->gallery_image = $g_url;
        }

        if($request->file('tc_image'))
        {
            $request->validate([
                'tc_image' => 'required|image|mimes:png,jpg'
            ]);
            $tc_image = $request->file('tc_image');
            $name_gen = hexdec(uniqid()). '.' .$tc_image->getClientOriginalExtension();
            Image::make($tc_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $tc_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->tc_image){unlink($importantImages->tc_image);}
            $importantImages->tc_image = $tc_url;
        }

        if($request->file('alumni_image'))
        {
            $request->validate([
                'alumni_image' => 'required|image|mimes:png,jpg'
            ]);
            $alumni_image = $request->file('alumni_image');
            $name_gen = hexdec(uniqid()). '.' .$alumni_image->getClientOriginalExtension();
            Image::make($alumni_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $al_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->alumni_image){unlink($importantImages->alumni_image);}
            $importantImages->alumni_image = $al_url;
        }

        if($request->file('contact_image'))
        {
            $request->validate([
                'contact_image' => 'required|image|mimes:png,jpg'
            ]);
            $contact_image = $request->file('contact_image');
            $name_gen = hexdec(uniqid()). '.' .$contact_image->getClientOriginalExtension();
            Image::make($contact_image)->resize(1920, 800)->save('backend/uploads/importantImages/'.$name_gen);
            $ct_url = 'backend/uploads/importantImages/'.$name_gen;
            if($importantImages->contact_image){unlink($importantImages->contact_image);}
            $importantImages->contact_image = $ct_url;
        }

        if($request->style){
            $importantImages->style = $request->style;
        }
        $importantImages->save();
        return redirect()->route('important.index')->with('success', 'All Images saved successfully');
    }
}
