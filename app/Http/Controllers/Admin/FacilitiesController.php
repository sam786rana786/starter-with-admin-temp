<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facilities::all();
        return view('admin.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('facilty_image'))
        {
            $file = $request->file('facilty_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/uploads/adm_frm'), $filename);
            $imageName = 'backend/uploads/adm_frm/' . $filename;
            $validatedData['facilty_image'] = $imageName;
        }

        if ($request->sub_title)
        {
            $validatedData['sub_title'] = $request->sub_title;
        }

        Facilities::create($validatedData);
        return redirect()->route('facilities.index')->with('success', 'Facility created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Facilities $facility)
    {
        return view('admin.facilities.show', compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facilities $facility)
    {
        return view('admin.facilities.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facilities $facility)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('facilty_image'))
        {
            $file = $request->file('facilty_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/uploads/adm_frm'), $filename);
            $imageName = 'backend/uploads/adm_frm/' . $filename;
            $facility->facilty_image = $imageName;
        }

        if ($request->sub_title)
        {
            $facility->sub_title = $request->sub_title;
        }

        $facility->title = $request->title;
        $facility->body = $request->body;
        $facility->save();
        return redirect()->route('facilities.index')->with('success', 'Facility created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Facilities $facility)
    {
        if($facility->facilty_image)
        {
            unlink($facility->facilty_image);
        }
        $facility->delete();
        return redirect()->route('facilities.index')->with('success', 'Facility deleted successfully');
    }
}
