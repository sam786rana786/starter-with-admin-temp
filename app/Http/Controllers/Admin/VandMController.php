<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vandm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class VandMController extends Controller
{
    public function index()
    {
        $vandm = Vandm::all();
        return view('admin.vandm.index', compact('vandm'));
    }
    public function edit($id)
    {
        $vandm = Vandm::findOrFail($id);
        return view('admin.vandm.edit', compact('vandm'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $vandm = Vandm::findOrFail($id);
        $vandm->title = $request->title;
        $vandm->description = $request->description;
        if($request->file('cover_image'))
        {
            $request->validate(['cover_image' => 'required|mimes:png,jpg']);
            $image = $request->file('cover_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(555, 571)->save('backend/uploads/vandm/'.$name_gen);
            $save_url = 'backend/uploads/vandm/'.$name_gen;
            if(file_exists(public_path($vandm->cover_image)) )
            {
                unlink($vandm->cover_image);
            }
            $vandm->cover_image = $save_url;
        }
        $vandm->save();
        return redirect()->back()->with('success', 'Vision and Mission Section saved successfully');



    }
}
