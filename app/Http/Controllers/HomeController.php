<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Vandm;
use App\Models\AdmFrm;
use App\Models\Alumni;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\Notice;
use App\Models\School;
use App\Models\Highlight;
use App\Models\Facilities;
use App\Models\Admin\About;
use App\Models\Admin\Result;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Models\Admin\Employee;
use App\Models\Admin\Mandatory;
use App\Models\Admin\Achivement;
use App\Models\TransferCertificate;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $id = 1;
        $banners = Banner::all();
        $highlights = Highlight::all();
        $school = School::findOrFail($id);
        $albums = Album::all();
        $photos = Photo::with('album')->select('id', 'album_id', 'cover_image', 'name', 'thumbnail')->get();
        $vandm = Vandm::all();
        $counts = Banner::all()->count();
        return view('frontend.pages.index', compact('banners', 'highlights', 'school', 'albums', 'photos', 'vandm', 'counts'));
    }

    public function about()
    {
        $id = 1;
        $about = About::findOrFail($id);
        $vandm = Vandm::findOrFail(3);
        $employees = Employee::all();
        return view('frontend.pages.about', compact('about', 'vandm', 'employees'));
    }

    public function disclosure()
    {
        $id = 1;
        $mandatory = Mandatory::findOrFail($id);
        return view('frontend.pages.disclosure', compact('mandatory'));
    }

    public function facilities()
    {
        $facilities = Facilities::all();
        return view('frontend.pages.facilities', compact('facilities'));
    }

    public function admission()
    {
        return view('frontend.pages.admission');
    }

    public function achievements()
    {
        $achievements = Achivement::all();
        return view('frontend.pages.achievements', compact('achievements'));
    }

    public function events(Event $event)
    {
        return view('frontend.pages.events', compact('event'));
    }

    public function notices(Notice $notice)
    {
        return view('frontend.pages.notices', compact('notice'));
    }

    public function info_link()
    {
        $results = Result::all();
        return view('frontend.pages.info_link', compact('results'));
    }

    public function gallery()
    {
        $albums = Album::all();
        $photos = Photo::with('album')->select('id', 'album_id', 'cover_image', 'name', 'thumbnail')->get();
        return view('frontend.pages.gallery', compact('albums', 'photos'));
    }

    public function tcs()
    {
        return view('frontend.pages.tc');
    }

    public function tcsearch(Request $request)
    {
        $data = $request->all();
        if(!empty($data))
        {
            $tc = TransferCertificate::where('class', $data['class'])->where('section', $data['section'])->where('admission_no', $data['admission_no'])->first();
            if($tc) {
                $details = [
                    'title' => 'Transfer Certificate Downloaded',
                    'body' => 'A transfer Certificate has been downloaded. ' . $tc->admission_no . ' ' . $tc->class . ' ' . $tc->section,
                ];
                Mail::to('viveka_wrs2000@rediffmail.com')->send(new \App\Mail\ApprovalEmail($details));
                return view('frontend.pages.tc', compact('tc'))->with('success', 'Transfer Certificate found and loaded');
            }else {
                return redirect()->back()->with('warning', 'Either Transfer Certificate of the details submitted has not been uploaded yet or You have entered Wrong Details which donot match our records.');
            }
        }
    }

    public function alumni()
    {
        return view('frontend.pages.alumni');
    }

    public function alumni_add(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'nullable',
            'email' => 'required',
            'name' => 'required',
            'class' => 'nullable',
            'section' => 'nullable',
            'year_passing' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'landline' => 'nullable',
            'mobile' => 'required',
            'organization' => 'required',
            'location' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'institute' => 'required',
            'photo' => 'required'
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('backend/uploads/alumni'), $filename);
            $imageName = 'backend/uploads/alumni/' . $filename;
            $validatedData['photo'] = $imageName;
        }
        $details = [
            'title' => 'Alumni Details Has been uploaded to the CMS Kindly Check',
            'body' => 'Alumni details has been submitted to the CMS. Alumni Name ' . $validatedData['name'] . ' email ' . $validatedData['email'],
        ];
        Mail::to('viveka_wrs2000@rediffmail.com')->send(new \App\Mail\ApprovalEmail($details));
        Alumni::create($validatedData);
        return redirect()->route('alumni')->with('success', 'Your details has been sent to the Principal for Approval');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function storemessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $details = [
            'title' => 'A Contact Message has been Submitted',
            'body' => 'Message has been submitted to the CMS.',
            'sub-details' => 'Message Sender Name ' . $validatedData['name'] . ' Email ' . $validatedData['email'] . ' Message ' . $validatedData['message']
        ];
        Mail::to('viveka_wrs2000@rediffmail.com')->send(new \App\Mail\ApprovalEmail($details));
        Contact::create($validatedData);
        return redirect()->route('contact')->with('success', 'Your message has been sent to the School Principal');
    }

    public function adm_frm()
    {
        return view('frontend.pages.adm_frm');
    }
}
