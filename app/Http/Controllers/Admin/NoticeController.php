<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();

        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'cover_image' => 'required',
            'link' => 'required'
        ]);

        if($request->file('cover_image'))
        {
            $image = $request->file('cover_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/notices/'.$name_gen);
            $save_url = 'backend/uploads/notices/'.$name_gen;
            Notice::create([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'link' => $request->link,
                'created_by' => Auth::user()->name,
                'cover_image' => $save_url
            ]);
        } else {
            Notice::create([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'link' => $request->link,
                'created_by' => Auth::user()->name,
            ]);
        }
        return redirect()->route('notice.index')->with('success', 'Notice created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notice.edit', compact('notice'));
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
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'cover_image' => 'required',
            'link' => 'required'
        ]);

        $notice = Notice::findOrFail($id);
        $notice->title = $request->title;
        $notice->short_title = $request->short_title;
        $notice->description = $request->description;
        $notice->link = $request->link;
        $notice->created_by = Auth::user()->name;

        if($request->file('cover_image'))
        {
            $image = $request->file('cover_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/notices/'.$name_gen);
            $save_url = 'backend/uploads/notices/'.$name_gen;
            if($notice->cover_image)
            {
                unlink($notice->cover_image);
            }
            $notice->cover_image = $save_url;
        }
        $notice->save();
        return redirect()->route('notice.index')->with('success', 'Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $notice = Notice::findOrFail($id);
        if($notice->cover_image)
        {
            unlink($notice->cover_image);
        }
        $notice->delete();
        return redirect()->route('notice.index')->with('info', 'Notice Deleted Successfully');
    }
}
