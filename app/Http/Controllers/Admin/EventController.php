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
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'cover_image' => 'required',
            'link' => 'required'
        ]);

        if($request->file('cover_image'))
        {
            $image = $request->file('cover_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/events/'.$name_gen);
            $save_url = 'backend/uploads/events/'.$name_gen;
            Event::create([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'event_date' => $request->event_date,
                'link' => $request->link,
                'created_by' => Auth::user()->name,
                'cover_image' => $save_url
            ]);
        } else {
            Event::create([
                'title' => $request->title,
                'name' => $request->name,
                'description' => $request->description,
                'event_date' => $request->event_date,
                'link' => $request->link,
                'created_by' => Auth::user()->name,
            ]);
        }
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
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'cover_image' => 'required',
            'link' => 'required'
        ]);

        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->link = $request->link;
        $event->created_by = Auth::user()->name;

        if($request->file('cover_image'))
        {
            $image = $request->file('cover_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 800)->save('backend/uploads/events/'.$name_gen);
            $save_url = 'backend/uploads/events/'.$name_gen;
            if($event->cover_image)
            {
                unlink($event->cover_image);
            }
            $event->cover_image = $save_url;
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
