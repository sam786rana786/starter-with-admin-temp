<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notification = Notification::findOrFail(1);
        return view('admin.notification.index', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('admin.notification.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pdf' => 'required'
        ]);

        $notification = Notification::findOrFail($id);

        if($request->file('pdf'))
        {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/notification'), $filename);
            $imageName = 'backend/uploads/notification/' . $filename;
            if(file_exists(public_path($notification->pdf)))
            {
                unlink($notification->pdf);
            }
            $notification->pdf = $imageName;
        }

        if (!$notification)
        {
            return redirect()->route('notifications.index')->with('error', 'There was some error');
        }
        $notification->save();
        return redirect()->route('notifications.index')->with('success', 'Admission Notification saved successfully');
    }
}
