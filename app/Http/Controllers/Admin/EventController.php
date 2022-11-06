<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'cover_image' => 'nullable',
            'link' => 'nullable'
        ]);

        if($request->file('cover_image'))
        {
            $file = $request->file('cover_image');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/events'), $filename);
            $imageName = 'backend/uploads/events/' . $filename;
            $validatedData['cover_image'] = $imageName;
        }
        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'cover_image' => 'nullable',
            'link' => 'nullable'
        ]);

        $event = Event::findOrFail($id);
        $event->title = $validatedData['title'];
        $event->name = $validatedData['name'];
        $event->description = $validatedData['description'];
        $event->event_date = $validatedData['event_date'];
        $event->link = $validatedData['link'];
        $event->created_by = Auth::user()->name;

        if($request->file('cover_image'))
        {
            $file = $request->file('cover_image');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/events'), $filename);
            $imageName = 'backend/uploads/events/' . $filename;
            if(file_exists(public_path($event->cover_image)))
            {
                unlink($event->cover_image);
            }
            $event->cover_image = $imageName;
        }
        $event->save();
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if($event->cover_image)
        {
            unlink($event->cover_image);
        }
        $event->delete();
        return redirect()->route('events.index')->with('info', 'Event Deleted Successfully');
    }
}
