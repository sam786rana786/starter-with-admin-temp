<?php

namespace App\Http\Controllers;

use App\Models\Modal;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class ModalController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modal  $modal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = 1;
        $modal = Modal::findOrFail($id);
        return view('admin.modal.edit', compact('modal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modal  $modal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modal $modal)
    {
        $modal = Modal::findOrFail(1);
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $modal->title = $request->title;
        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/modal'), $filename);
            $imageName = 'backend/uploads/modal/' . $filename;
            if(file_exists(public_path($modal->image)))
            {
                unlink($modal->image);
            }
            $modal->image = $imageName;
        }
        $modal->save();
        return redirect()->back()->with('success', 'Modal Image has been saved successfully.');
    }
}
