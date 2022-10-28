<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Core\File;
use Intervention\Image\Facades\Image;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('admin.album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $album = Album::create();
        $album->name = $request->name;
        $album->slug = Str::slug($request->name);
        $album->save();
        return redirect()->route('album.index')->with('success', 'Album Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::findOrFail($id);
        $photos = Photo::where('album_id', $id)->get();
        return view('admin.album.show', compact('album', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        return view('admin.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $album = Album::findOrFail($id);
        $album->name = $request->name;
        $album->slug = Str::slug($request->name);
        $album->save();
        return redirect()->route('album.index')->with('success', 'Album Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $photos = Photo::where('album_id', $id)->get();
        if($photos)
        {
            foreach($photos as $photo)
            {
                unlink($photo->cover_image);
                $photo->delete();
            }
        }
        $album->delete();
        return redirect()->back()->with('success', 'Successfully Album deleted');
    }

    public function uploadImages(Request $request, $id)
    {
        $request->validate([
            'cover_image' => 'required'
        ]);


        $images = $request->file('cover_image');

        foreach($images as $image)
        {
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->save('backend/uploads/gallery/'.$name_gen);
            Image::make($image)->resize(360, 360)->save('backend/uploads/gallery/thumbnail/'.$name_gen);
            $save_url = 'backend/uploads/gallery/'.$name_gen;
            $thumbnail_url = 'backend/uploads/gallery/thumbnail/'.$name_gen;
            Photo::create([
                'album_id' => $id,
                'name' => $request->name,
                'cover_image' => $save_url,
                'thumbnail' => $thumbnail_url
            ]);
        }
        return redirect()->back()->with('info', 'Images Added to this album successfully');
    }

    public function deleteImages($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return redirect()->back()->with('success', 'Successfully deleted the image');
    }
}
