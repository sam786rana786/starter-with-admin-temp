<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('admin.result.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.result.create');
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
            'description' => 'required',
            'pdf' => 'required',
            'is_active' => 'required'
        ]);

        if($request->file('pdf'))
        {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/result'), $filename);
            $imageName = 'backend/uploads/result/' . $filename;
            $validatedData['pdf'] = $imageName;
        }

        Result::create($validatedData);
        return redirect()->route('result.index')->with('success', 'Result Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        return view('admin.result.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        return view('admin.result.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'is_active' => 'required'
        ]);

        if($request->file('pdf'))
        {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/result'), $filename);
            $imageName = 'backend/uploads/result/' . $filename;
            if(file_exists(public_path($result->pdf)) ){
                unlink($result->pdf);
            }
            $result->pdf = $imageName;

        }

        $result->title = $validatedData['title'];
        $result->description = $validatedData['description'];
        $result->is_active = $validatedData['is_active'];
        $result->save();
        return redirect()->route('result.index')->with('success', 'Result Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        if(file_exists(public_path($result->pdf)) )
        {
            unlink($result->pdf);
        }
        $result->delete();
        return redirect()->route('result.index')->with('success', 'Result Deleted Successfully');
    }
}
