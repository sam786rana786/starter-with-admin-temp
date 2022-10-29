<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AlumniController extends Controller
{
    public function showAdmFrm()
    {
        $alumnis = Alumni::all();
        return view('admin.alumni.alumni', compact('alumnis'));
    }

    public function update(Alumni $alumni, Request $request)
    {
        $alumni->is_approved = $request->is_approved;
        $alumni->save();
        $this->send_mail($alumni);
        return redirect()->back()->with('success', 'You have successfully Approved/Disapproved the Alumni');
    }

    public function send_mail(Alumni $alumni)
    {
        if ($alumni->is_approved == 1) {
            $details = [
                'title' => 'Alumni Approval Notice',
                'body' => 'Your details have been verified and approved by the Principal.'
            ];
            Mail::to($alumni->email)->send(new \App\Mail\ApprovalEmail($details));
        } else {
            $details = [
                'title' => 'Alumni Disapproval Notice',
                'body' => 'Sorry! Your details were checked and are not matching our records. Kindly consult School Office for more clarification on this'
            ];
            Mail::to($alumni->email)->send(new \App\Mail\ApprovalEmail($details));
        }
        return redirect()->back()->with('success', 'Mail has been sent to the applicant\'s mail id');
    }
}
