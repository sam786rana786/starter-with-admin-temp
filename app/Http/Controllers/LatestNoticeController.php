<?php

namespace App\Http\Controllers;

use App\Models\LatestNotice;
use Illuminate\Http\Request;

class LatestNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestNotice = LatestNotice::findOrFail(1);
        return view('admin.latestnotice.index', compact('latestNotice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestNotice  $latestNotice
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestNotice $latestNotice)
    {
        return view('admin.latestnotice.edit', compact('latestNotice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestNotice  $latestNotice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'cover_image' => 'required',
        ]);

        $latestNotice = LatestNotice::findOrFail($id);
        $latestNotice->title = $request->title;
        $latestNotice->short_title = $request->short_title;
        $latestNotice->description = $request->description;
        if($request->file('cover_image'))
        {
            $file = $request->file('cover_image');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/latest_notice'), $filename);
            $imageName = 'backend/uploads/latest_notice/' . $filename;
            if(file_exists(public_path($latestNotice->cover_image)))
            {
                unlink($latestNotice->cover_image);
            }
            $latestNotice->cover_image = $imageName;
        }
        if (!$latestNotice)
        {
            return redirect()->route('latest_notice.index')->with('error', 'Something went wrong.');
        }
        $latestNotice->save();
        return redirect()->route('latest_notice.index')->with('success', 'Latest notice has been saved successfully.');
    }

    public function show(LatestNotice $latestNotice)
    {
        return view('frontend.pages.latestNotice', compact('latestNotice'));
    }
}
