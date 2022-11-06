<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdmFrm;
use App\Mail\ApprovalEmail;
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
            Mail::to($admFrm->comn_mailid)->cc($admFrm->comn_mailid)->bcc($admFrm->f_mailid, $admFrm->m_mailid)->send(new ApprovalEmail($details));
        } else {
            $details = [
                'title' => 'Application Disapproved',
                'body' => 'Sorry! Your application has been disapproved. Better luck next time.'
            ];
            Mail::to($admFrm->stu_mailid)->cc($admFrm->comn_mailid)->bcc($admFrm->f_mailid, $admFrm->m_mailid)->send(new ApprovalEmail($details));
        }
        return redirect()->back()->with('success', 'Mail has been sent to the applicant\'s mail id');
    }

    public function storeAdmFrm(AdmFrmRequest $request) {
        $validatedData = $request->all();
        if($request->file('stu_photo'))
        {
            $file = $request->file('stu_photo');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/adm_frm'), $filename);
            $imageName = 'backend/uploads/adm_frm/' . $filename;
            $validatedData['stu_photo'] = $imageName;
        }

        if ($request->file('docum'))
        {
            $file = $request->file('docum');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/adm_frm/docu'), $filename);
            $pdfName = 'backend/uploads/adm_frm/docu/' . $filename;
            $validatedData['docum'] = $pdfName;
        }

        $adm = AdmFrm::create();
        $adm->student_class = $validatedData['student_class'];
        $adm->stu_fname = $validatedData['stu_fname'];
        $adm->stu_midname = $validatedData['stu_midname'];
        $adm->stu_lastname = $validatedData['stu_lastname'];
        $adm->gender = $validatedData['gender'];
        $adm->stu_dob = $validatedData['stu_dob'];
        $adm->religion = $validatedData['religion'];
        $adm->category = $validatedData['category'];
        $adm->nation = $validatedData['nation'];
        $adm->stu_mobno = $validatedData['stu_mobno'];
        $adm->lrn_disbl = $validatedData['lrn_disbl'];
        $adm->hlth_cncrn = $validatedData['hlth_cncrn'];
        $adm->stu_mailid = $validatedData['stu_mailid'];
        $adm->prefer = $validatedData['prefer'];
        $adm->comn_mobno = $validatedData['comn_mobno'];
        $adm->comn_mailid = $validatedData['comn_mailid'];
        $adm->res_address = $validatedData['res_address'];
        $adm->res_post = $validatedData['res_post'];
        $adm->res_dist = $validatedData['res_dist'];
        $adm->res_state = $validatedData['res_state'];
        $adm->res_pin = $validatedData['res_pin'];
        $adm->f_name = $validatedData['f_name'];
        $adm->f_mobile = $validatedData['f_mobile'];
        $adm->f_mailid = $validatedData['f_mailid'];
        $adm->f_mnite = $validatedData['f_mnite'];
        $adm->f_qual = $validatedData['f_qual'];
        $adm->f_occup = $validatedData['f_occup'];
        $adm->f_desig = $validatedData['f_desig'];
        $adm->m_name = $validatedData['m_name'];
        $adm->m_mobile = $validatedData['m_mobile'];
        $adm->m_mailid = $validatedData['m_mailid'];
        $adm->m_mnite = $validatedData['m_mnite'];
        $adm->m_qual = $validatedData['m_qual'];
        $adm->m_occup = $validatedData['m_occup'];
        $adm->m_desig = $validatedData['m_desig'];
        $adm->cur_schname = $validatedData['cur_schname'];
        $adm->cur_schcode = $validatedData['cur_schcode'];
        $adm->cur_brdroll = $validatedData['cur_brdroll'];
        $adm->cur_brdname = $validatedData['cur_brdname'];
        $adm->cur_brdpassyr = $validatedData['cur_brdpassyr'];
        $adm->cur_medinst = $validatedData['cur_medinst'];
        $adm->cur_brdtype = $validatedData['cur_brdtype'];
        $adm->ack = $validatedData['ack'];
        $adm->stream = $validatedData['stream'];
        $adm->stu_photo = $validatedData['stu_photo'];
        $adm->docum = $validatedData['docum'];
        $adm->save();

        $details = [
            'title' => 'A New Admission Form has been submitted.',
            'body' => 'A New Admission has been submitted to the CMS',
            'sub-details' => 'Student Name: ' . $request->stu_fname . ' ' . $request->stu_lastname . ' Email ' . $request->stu_mailid . ' Mobile Number ' . $request->stu_mobno,
        ];
        Mail::to('viveka_wrs2000@rediffmail.com')->send(new ApprovalEmail($details));
        return redirect()->route('adm_frm')->with('success', 'Admission form submitted successfully. Kindly check your email regularly for admission approval or wait for the phone call.');
    }

    public function destroy($id)
    {
        $admFrm = AdmFrm::findOrFail($id);
        if (file_exists(public_path($admFrm->docu))){
            unlink($admFrm->docu);
        }
        if (file_exists(public_path($admFrm->stu_photo))){
            unlink($admFrm->stu_photo);
        }
        $admFrm->delete();
        return redirect()->route('online.admission')->with('success', 'Admission Details has been deleted');
    }

    public function show($id)
    {
        $admFrm = AdmFrm::findOrFail($id);
        return view('admin.show_admFrm', compact('admFrm'));
    }
}
