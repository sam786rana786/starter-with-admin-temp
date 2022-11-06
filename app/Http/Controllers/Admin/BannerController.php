<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'banner_image' => 'required|image:jpeg,jpg,png'
        ]);

        $banner = Banner::create();
        $banner->title = $request->title;
        $banner->short_title = $request->short_title;
        $banner->description = $request->description;

        if($request->file('banner_image'))
        {
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/banner/'.$name_gen);
            $save_url = 'backend/uploads/banner/'.$name_gen;
            $banner['banner_image'] = $save_url;
        }
        $banner->save();
        return redirect()->back()->with('success', 'Banner saved successfully');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
        ]);

        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->short_title = $request->short_title;
        $banner->description = $request->description;
        if($request->file('banner_image'))
        {
            $validateData = $request->validate([
                'banner_image' => 'required|image:jpeg,jpg,png'
            ]);
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/banner/'.$name_gen);
            $save_url = 'backend/uploads/banner/'.$name_gen;
            if(file_exists(public_path($banner['banner_image'])))
            {
                unlink($banner['banner_image']);
            }
            $banner['banner_image'] = $save_url;
        }
        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
    }

    public function delete($id)
    {
        $banner = Banner::findOrFail($id);
        if(file_exists(public_path($banner['banner_image'])))
        {
            unlink($banner['banner_image']);
        }
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner Deleted successfully');
    }
}
