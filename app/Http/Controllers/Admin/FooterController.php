<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        return view('admin.footer.index', compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.edit', compact('footer'));
    }

    public function update($id, Request $request)
    {
        $footer = Footer::findOrFail($id);
        $footer->description = $request->description;
        $footer->address = $request->address;
        $footer->contact = $request->contact;
        $footer->email = $request->email;
        $footer->website = $request->website;
        $footer->facebook = $request->facebook;
        $footer->twitter = $request->twitter;
        $footer->youtube = $request->youtube;
        $footer->instagram = $request->instagram;
        if($request->file('logo'))
        {
            $image = $request->file('logo');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(200, 39)->save('backend/uploads/logo/'.$name_gen);
            $save_url = 'backend/uploads/logo/'.$name_gen;
            if(file_exists(public_path($footer->logo)))
            {
                unlink($footer->logo);
            }
            $footer['logo'] = $save_url;
        }
        $footer->save();
        return redirect()->route('footer.index')->with('success', 'Footer Updated Successfully');
    }
}
