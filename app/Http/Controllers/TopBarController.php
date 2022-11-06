<?php

namespace App\Http\Controllers;

use App\Models\TopBar;
use Illuminate\Http\Request;

class TopBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topbar = TopBar::findOrFail(1);
        return view('admin.topbar.index', compact('topbar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topBar = TopBar::findOrFail($id);
        return view('admin.topbar.edit', compact('topBar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topBar = TopBar::findOrFail($id);
        $validatedData = $request->validate([
            'from' => 'required',
            'to' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $topBar->opening = date('g:i A', strtotime($validatedData['from'])) . ' - ' . date('g:i A', strtotime($validatedData['to']));
        $topBar->phone = $validatedData['phone'];
        $topBar->address = $validatedData['address'];

        $topBar->save();
        return redirect()->route('topbar.index')->with('success', 'Data has been Updated');
    }
}
