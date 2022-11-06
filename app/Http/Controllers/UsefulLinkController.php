<?php

namespace App\Http\Controllers;

use App\Models\UsefulLink;
use Illuminate\Http\Request;

class UsefulLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usefulLinks = UsefulLink::all();
        return view('admin.footer.useful_links_list', compact('usefulLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.create_useful_link');
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
            'url' => 'required|url'
        ]);

        UsefulLink::create($validatedData);
        return redirect()->route('link.index')->with('success', 'Link has been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsefulLink  $usefulLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usefulLink = UsefulLink::findOrFail($id);
        return view('admin.footer.edit_useful_link', compact('usefulLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsefulLink  $usefulLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usefulLink = UsefulLink::findOrFail($id);
        $validatedData = $request->validate([
            'title' => 'required',
            'url' => 'required|url'
        ]);

        $usefulLink->title = $validatedData['title'];
        $usefulLink->url = $validatedData['url'];
        $usefulLink->save();
        return redirect()->route('link.index')->with('success', 'Link has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsefulLink  $usefulLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usefulLink = UsefulLink::findOrFail($id);
        $usefulLink->delete();
        return redirect()->route('link.index')->with('success', 'Link has been deleted');
    }
}
