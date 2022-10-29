<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Vandm;
use App\Models\AdmFrm;
use App\Models\Banner;
use App\Models\School;
use App\Models\Highlight;
use App\Models\Facilities;
use App\Models\Admin\About;
use Illuminate\Http\Request;
use App\Models\Admin\Employee;
use App\Models\Admin\Mandatory;
use App\Http\Requests\AdmFrmRequest;
use App\Models\Alumni;
use App\Models\TransferCertificate;
use Intervention\Image\Facades\Image;
use Mockery\Generator\StringManipulation\Pass\Pass;

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
        return view('frontend.pages.index', compact('banners', 'highlights', 'school', 'albums', 'photos', 'vandm'));
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
        return view('frontend.pages.achievements');
    }

    public function info_link()
    {
        return view('frontend.pages.info_link');
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
            'student_id' => 'required',
            'email' => 'required',
            'name' => 'required',
            'class' => 'required',
            'section' => 'required',
            'year_passing' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'landline' => 'required',
            'mobile' => 'required',
            'organization' => 'required',
            'location' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'institute' => 'required',
        ]);
        // dd($validatedData);
        Alumni::create($validatedData);
        return redirect()->route('alumni')->with('success', 'Your details has been sent to the Principal for Approval');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function adm_frm()
    {
        return view('frontend.pages.adm_frm');
    }

    public function storeAdmFrm(AdmFrmRequest $request)
    {

        $pcfad = new AdmFrm();
        if ($request->file('stu_photo')) {
            $image1 = $request->file('stu_photo');
            $name_gen = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(360, 263)->save('backend/uploads/online_admission/' . $name_gen);
            $save_url1 = 'backend/uploads/online_admission/' . $name_gen;
            $pcfad->stu_photo = $save_url1;
        }

        if ($request->file('docum')) {
            $image2 = $request->file('docum')->store('backend/uploads/online_admission/',  ['disk' => 'public_uploads']);
            $save_url2 = $image2;
            $pcfad->docum = $save_url2;
        }

        $pcfad->student_class = $request->student_class;
        $pcfad->stream = $request->stream;
        $pcfad->stu_fname = $request->stu_fname;
        $pcfad->stu_midname = $request->stu_midname;
        $pcfad->stu_lastname = $request->stu_lastname;
        $pcfad->gender = $request->gender;
        $pcfad->stu_dob = $request->stu_dob;
        $pcfad->religion = $request->religion;
        $pcfad->category = $request->category;
        $pcfad->nation = $request->nation;
        $pcfad->stu_mobno = $request->stu_mobno;
        $pcfad->lrn_disbl = $request->lrn_disbl;
        $pcfad->hlth_cncrn = $request->hlth_cncrn;
        $pcfad->stu_mailid = $request->stu_mailid;
        $pcfad->prefer = $request->prefer;
        $pcfad->comn_mobno = $request->comn_mobno;
        $pcfad->comn_mailid = $request->comn_mailid;
        $pcfad->res_address = $request->res_address;
        $pcfad->res_post = $request->res_post;
        $pcfad->res_dist = $request->res_dist;
        $pcfad->res_state = $request->res_state;
        $pcfad->res_pin = $request->res_pin;
        $pcfad->f_name = $request->f_name;
        $pcfad->f_mobile = $request->f_mobile;
        $pcfad->f_mailid = $request->f_mailid;
        $pcfad->f_mnite = $request->f_mnite;
        $pcfad->f_qual = $request->f_qual;
        $pcfad->f_occup = $request->f_occup;
        $pcfad->f_desig = $request->f_desig;
        $pcfad->m_name = $request->m_name;
        $pcfad->m_mobile = $request->m_mobile;
        $pcfad->m_mailid = $request->m_mailid;
        $pcfad->m_mnite = $request->m_mnite;
        $pcfad->m_qual = $request->m_qual;
        $pcfad->m_occup = $request->m_occup;
        $pcfad->m_desig = $request->m_desig;
        $pcfad->cur_schname = $request->cur_schname;
        $pcfad->cur_schcode = $request->cur_schcode;
        $pcfad->cur_brdroll = $request->cur_brdroll;
        $pcfad->cur_brdname = $request->cur_brdname;
        $pcfad->cur_brdpassyr = $request->cur_brdpassyr;
        $pcfad->cur_medinst = $request->cur_medinst;
        $pcfad->cur_brdtype = $request->cur_brdtype;
        $pcfad->ack = $request->ack;
        $pcfad->save();

        return redirect()->route('home');
    }
}
