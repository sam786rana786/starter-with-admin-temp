<?php

namespace App\Http\Controllers\Admin;

use App\Models\Highlight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class HighlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highlights = Highlight::all();
        return view('admin.highlight.index', compact('highlights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.highlight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $highlight = Highlight::create();
        $highlight->title = $request->title;
        $highlight->created_by = Auth::user()->name;
        $highlight->description = $request->description;

        if($request->file('card_image'))
        {
            $validateData = $request->validate([
                'card_image' => 'required|image:jpeg,jpg,png'
            ]);
            $image = $request->file('card_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(360, 263)->save('backend/uploads/highlights/'.$name_gen);
            $save_url = 'backend/uploads/highlights/'.$name_gen;
            $highlight['card_image'] = $save_url;
        }
        $highlight->save();
        return redirect()->back()->with('success', 'Highlight saved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $highlight = Highlight::findOrFail($id);
        return view('admin.highlight.edit', compact('highlight'));
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
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $highlight = Highlight::findOrFail($id);
        $highlight->title = $request->title;
        $highlight->created_by = Auth::user()->name;
        $highlight->description = $request->description;

        if($request->file('card_image'))
        {
            $validateData = $request->validate([
                'card_image' => 'required|image:jpeg,jpg,png'
            ]);
            $image = $request->file('card_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(360, 263)->save('backend/uploads/highlights/'.$name_gen);
            $save_url = 'backend/uploads/highlights/'.$name_gen;
            if($highlight['card_image'])
            {
                unlink($highlight['card_image']);
            }
            $highlight['card_image'] = $save_url;
        }
        $highlight->save();
        return redirect()->route('highlights.index')->with('success', 'Highlight saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $highlight = Highlight::findOrFail($id);
        if($highlight['card_image'])
        {
            unlink($highlight['card_image']);
        }
        $highlight->delete();
        return redirect()->route('highlights.index')->with('success', 'Highlight was removed successfully');
    }
}
