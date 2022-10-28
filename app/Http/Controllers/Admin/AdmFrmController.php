<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdmFrm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdmFrmRequest;
use Illuminate\Support\Facades\Mail;

class AdmFrmController extends Controller
{
    public function showAdmFrm()
    {
        $admFrms = AdmFrm::all();
        return view('admin.admissionFormData', compact('admFrms'));
    }

    public function update(AdmFrm $admFrm, Request $request)
    {
        $admFrm->is_approved = $request->is_approved;
        $admFrm->save();
        $this->send_mail($admFrm);
        return redirect()->back()->with('success', 'You have successfully Approved/Disapproved the application');
    }

    public function send_mail(AdmFrm $admFrm)
    {
        if ($admFrm->is_approved == 1) {
            $details = [
                'title' => 'Application Approval Notice',
                'body' => 'Your application has been approved. Contact school authorities for more information.'
            ];
            Mail::to($admFrm->comn_mailid)->cc($admFrm->comn_mailid)->bcc($admFrm->f_mailid, $admFrm->m_mailid)->send(new \App\Mail\ApprovalEmail($details));
        } else {
            $details = [
                'title' => 'Application Disapproved',
                'body' => 'Sorry! Your application has been disapproved. Better luck next time.'
            ];
            Mail::to($admFrm->stu_mailid)->cc($admFrm->comn_mailid)->bcc($admFrm->f_mailid, $admFrm->m_mailid)->send(new \App\Mail\ApprovalEmail($details));
        }
        return redirect()->back()->with('success', 'Mail has been sent to the applicant\'s mail id');
    }

    public function storeAdmFrm(AdmFrmRequest $request) {
        $validatedData = $request->all();
        if($request->file('stu_photo'))
        {
            $file = $request->file('stu_photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/uploads/adm_frm'), $filename);
            $imageName = 'backend/uploads/adm_frm/' . $filename;
            $validatedData['stu_photo'] = $imageName;
        }

        if ($request->file('docum'))
        {
            $file = $request->file('docum');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/uploads/adm_frm/docu'), $filename);
            $pdfName = 'backend/uploads/adm_frm/docu' . $filename;
            $validatedData['docum'] = $pdfName;
        }

        AdmFrm::create($validatedData);
        return redirect()->route('adm_frm')->with('success', 'Admission form submitted successfully. Kindly check your email regularly for admission approval or wait for the phone call.');
    }
}
