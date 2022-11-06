<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Achivement;
use App\Http\Controllers\Controller;

class AchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achivements = Achivement::all();
        return view('admin.achievements.index', compact('achivements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achievements.create');
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
            'name' => 'required',
            'field' => 'required',
            'year' => 'required',
        ]);

        if ($request->file('photo'))
        {
            $file = $request->file('photo');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/achievements'), $filename);
            $imageName = 'backend/uploads/achievements/' . $filename;
            $validatedData['photo'] = $imageName;
        }

        Achivement::create($validatedData);
        return redirect()->route('achievement.index')->with('success', 'Achiever added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Achivement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achivement $achievement)
    {
        return view('admin.achievements.show', compact('achievement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Achivement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achivement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Achivement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achivement $achievement)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'field' => 'required',
            'year' => 'required',
        ]);

        if ($request->file('photo'))
        {
            $file = $request->file('photo');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/achievements'), $filename);
            $imageName = 'backend/uploads/achievements/' . $filename;
            if (file_exists(public_path($achievement->photo))){
                unlink($achievement->photo);
            }
            $validatedData['photo'] = $imageName;
        }

        $achievement->name = $validatedData['name'];
        $achievement->field = $validatedData['field'];
        $achievement->year = $validatedData['year'];
        $achievement->photo = $validatedData['photo'];
        $achievement->save();
        return redirect()->route('achievement.index')->with('success', 'Achiever updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Achivement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achivement $achievement)
    {
        if(file_exists(public_path($achievement->photo)))
        {
            unlink($achievement->photo);
        }
        $achievement->delete();
        return redirect()->route('achievement.index')->with('success', 'Achiever deleted successfully');
    }
}
