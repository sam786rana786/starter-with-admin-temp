@extends('frontend.frontend_master')

@section('styles')
    <style>
        .header-adm {
            padding: 12px;
            line-height: 20px;
            text-align: center;
            font-size: 20px;
            color: #ffffff;
            border-radius: 10px;
        }

        .header-p1 {
            font-size: 30px;
            font-family: helvetica;
        }

        .header-p2 {
            font-size: 20px;
            font-family: helvetica;
        }

        .adm-frm {
            border: 2px solid #8A9292;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px #737878;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <section>
        <h1 class="header-adm latest pt-3">
            <p class="header-p1">Vivekanand Public School</p>
            @php
                $uni = App\Models\Uniform::findOrFail(1);
            @endphp
            <p class="header-p2">Online Admission Form ({{ $uni->year }})</p>
        </h1>
        <div class="adm-frm">
            <ol class="text-danger">
                <li>The information being sought by you will be kept strictly confidential.
                <li>Maximum image size that can be uploaded is 200KB and only in jpg, jpeg and png format.
                <li>Do not use any special characters (such as #, *, $ etc)
                <li>Please check all the information carefully before submitting the form. No changes will be
                    allowed after submission of the form.
                <li>Only viable Subject Combination will be allowed.
                <li>Write NA if any field is not applicable to you.
            </ol>
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
            <form action="{{ route('storeAdmFrm') }}" method="POST" enctype="multipart/form-data">@csrf
                <h2 class="bg-dark text-light h4 mb-3">Stream<span class="text-danger">*</span></h2>
                <div class="col">
                    <div class="row">
                        <label for="student_class" class="col-sm-2 col-form-label">Select Class for Admission</label>
                        <div class="col-sm-10  mb-3">
                            <select name="student_class" id="class" onclick="classFunction()" class="form-control"
                                required="true">
                                <option selected>--Select Class--</option>
                                <option value="NUR">NUR</option>
                                <option value="UKG">UKG</option>
                                <option value="I">ONE</option>
                                <option value="II">TWO</option>
                                <option value="III">THREE</option>
                                <option value="IV">FOUR</option>
                                <option value="V">FIVE</option>
                                <option value="VI">SIX</option>
                                <option value="VII">SEVEN</option>
                                <option value="VIII">EIGHT</option>
                                <option value="IX">NINE</option>
                                <option value="X">TEN</option>
                                <option value="XI">ELEVEN</option>
                            </select>
                        </div>
                        <span style="display:none;" id="lblstream">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select Stream</label>
                                <div class="col-sm-10">
                                    <select id="stream" name="stream" class="form-control">
                                        <option selected value="">--Select Stream--</option>
                                        <option value="BIO">Science(BIO)</option>
                                        <option value="MATH">Science(MATH)</option>
                                    </select>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <h2 class="bg-dark text-light h4 mb-3">Applicant's Details <span class="text-danger">*</span></h2>
                <div class="row mb-3">
                    <label for="stu_fname" class="col-sm-12 col-form-label">
                        First Name<span class="text-danger">*</span>
                        <span class="text-danger"> (Spellings
                            exactly
                            as per TC of previous school / Board Certificate, whichever is
                            applicable)
                        </span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" placeholder="Enter First Name..." name="stu_fname"
                            style="text-transform:uppercase;" class="form-control" required="true">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-12 col-form-label">Middle Name</label>
                    <div class="col-sm-12">
                        <input type="text" placeholder="Enter Middle Name..." name="stu_midname"
                            style="text-transform:uppercase;" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-12 col-form-label">
                        Last Name<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" placeholder="Enter Last Name..." name="stu_lastname"
                            style="text-transform:uppercase;" required="true" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <span style="font-family:Arial; font-weight:bold; font-size:14px;" class="text-danger"> (All
                        details
                        should be exactly as per TC of previous school / Board Certificate, whichever is
                        applicable)
                    </span>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        Gender<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-2">
                        <select name="gender" class="form-control" required="true">
                            <option selected>--Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">Enter DOB<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="stu_dob">
                    </div>
                    <label class="col-sm-1 col-form-label">Religion<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <select name="religion" class="form-control" required="true">
                            <option selected>--Religion--</option>
                            <option value="HINDU">Hindu</option>
                            <option value="MUSLIM">Muslim</option>
                            <option value="SIKH">Sikh</option>
                            <option value="CHRISTIAN">Christian</option>
                            <option value="JAINISM">Jainism</option>
                            <option value="BUDDHIST">Buddhist</option>
                            <option value="PARSI">Parsi</option>
                            <option value="OTHERS">Others</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label" style="margin-right: 0; padding-right: 0;">Select Category<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <select class="form-control" name="category" required="true">
                            <option value="">--Category--</option>
                            <option value="GEN">GENERAL</option>
                            <option value="OBC">OBC</option>
                            <option value="EWS">EWS</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">Nationality<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="nation" required="true">
                            <option value="">--Nationality--</option>
                            <option value="INDIAN">INDIAN</option>
                            <option value="FOREIGNER">FOREIGNER</option>
                        </select>
                    </div>
                    <label class="col-sm-1 col-form-label">Mobile No<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <input type="tel" placeholder="Mobile Number" name="stu_mobno" class="form-control"
                            required="true">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">
                        Specific Learning Disability<span class="text-danger">* <b>(if any)</b></span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="--If Any Otherwise write NA--" name="lrn_disbl"
                            style="text-transform:uppercase;" required="true" class="form-control">

                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">
                        Mental health concerns<span class="text-danger">* <b>(if
                                any)</b></span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="--If Any Otherwise write NA--" name="hlth_cncrn"
                            style="text-transform:uppercase;" class="form-control" required="true">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">Email ID<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="email" placeholder="Email ID" name="stu_mailid" class="form-control"
                            required="true">
                    </div>
                    <label class="col-sm-1 col-form-label">Preference<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="prefer" required="true">
                            <option value="">--Preference--</option>
                            <option value="Day Scholar">Day Scholar</option>
                            <option value="Boarding">Boarding</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Student Photo<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" name="stu_photo" required="true" autofocus class="form-control">
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <label style="color:red;">(only in jpg, jpeg, gif, png format)</label>
                    </div>
                </div>

                <div class="row mb-3">
                    <h2 class="bg-dark text-light h4 mb-3">Communication Details (which can be used by school for official
                        intimation)</h2>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">Mobile No<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="tel" placeholder="Mobile Number" name="comn_mobno" class="form-control"
                            required="true">
                    </div>

                    <label class="col-sm-1 col-form-label">Email ID<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="email" placeholder="Email ID" name="comn_mailid" class="form-control"
                            required="true">
                    </div>
                </div>

                <div class="row mb-3">
                    <h2 class="bg-dark text-light h4 mb-3">Residential Address</h2>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">Address<span class="text-danger">*</span></label>
                    <div class="col-sm-11">
                        <textarea type="text" placeholder="Enter Full Address here...." name="res_address"
                            style="text-transform:uppercase;" required="true" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">Post<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Post" name="res_post" style="text-transform: uppercase;"
                            class="form-control" required="true">
                    </div>

                    <label class="col-sm-1 col-form-label" style="margin-right: 0; padding-right: 0;">Dist<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="district" name="res_dist" style="text-transform: uppercase;"
                            required="true" class="form-control">
                    </div>

                    <label class="col-sm-1 col-form-label">State<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="State" name="res_state" style="text-transform: uppercase;"
                            required="true" class="form-control">
                    </div>

                    <label class="col-sm-1 col-form-label">Pin Code<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                        <input type="number" placeholder="Pin Code" name="res_pin" style="text-transform: uppercase;"
                            required="true" class="form-control">
                    </div>

                </div>

                <div class="row mb-3">
                    <h2 class="bg-dark text-light h4 mb-3">Father&apos;s Details</h2>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        Father&apos;s Name<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-11">
                        <input type="text" placeholder="Father's Name" name="f_name"
                            style="text-transform:uppercase;" class="form-control" required="true">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"label>Mobile No<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="tel" placeholder="Father Mobile number" name="f_mobile"
                            class="form-control"required="true">
                    </div>

                    <label class="col-sm-1 col-form-label">Email ID<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="email" placeholder="Father Email ID" name="f_mailid" class="form-control"
                            required="true">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"label>
                        Is Father a Modernite<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <select name="f_mnite" class="form-control" required="true">
                            <option selected>--Choose--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">
                        Educational Qualification<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <select name="f_qual" class="form-control"required="true">
                            <option selected>--Qualification--</option>
                            <option value="10th">Senior School Examination (10th) or Equivalent</option>
                            <option value="inter">Sr. Secondary (10+2) or Equiv.</option>
                            <option value="graduation">Graduation or Equivalent</option>
                            <option value="pg">Post Graduate or Equivalent</option>
                            <option value="Educated">Educated</option>
                            <option value="Un-Educated">Un-Educated</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"label>Occupation<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <select name="f_occup" class="form-control" required="true">
                            <option selected>--Occupation--</option>
                            <option value="advocate">Advocate</option>
                            <option value="advertise">Advertising</option>
                            <option value="airways">Airways</option>
                            <option value="architect">Architect</option>
                            <option value="defence">Defence</option>
                            <option value="banking">Banking</option>
                            <option value="CA">Chartered Accountatnt</option>
                            <option value="Civil service">Civil Service</option>
                            <option value="Doctor">Doctor</option>
                            <option value="education">Educationist</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Agriculture">Clerk</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">Designation</label>
                    <div class="col-sm-5">
                        <input type="text" placeholder="Write NA if No Data...." name="f_desig"
                            style="text-transform:uppercase;" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <h2 class="bg-dark text-light h4 mb-3">Mother&apos;s Details</h2>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        Mother&apos;s Name<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-11">
                        <input type="text" placeholder="Mother's Name" name="m_name"
                            style="text-transform: uppercase;" class="form-control" required="true">
                    </div>
                </div>

                <div class="row mb-3">

                    <label class="col-sm-1 col-form-label"label>Mobile No<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="tel" placeholder="Mother Mobile number" name="m_mobile" class="form-control"
                            required="true">
                    </div>

                    <label class="col-sm-1 col-form-label">Email ID</label>
                    <div class="col-sm-5">
                        <input type="email" placeholder="Mother Email ID" name="m_mailid" class="form-control"
                            required="true">
                    </div>

                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"label>
                        Is Mother a Modernite<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <select name="m_mnite" class="form-control" required="true">
                            <option selected>--Choose--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">
                        Educational Qualification<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <select name="m_qual" class="form-control" required="true">
                            <option selected>--Qualification--</option>
                            <option value="10th">Senior School Examination (10th) or Equivalent</option>
                            <option value="Inter">Sr. Secondary (10+2) or Equiv.</option>
                            <option value="Graduation">Graduation or Equivalent</option>
                            <option value="pg">Post Graduation or Equivalent</option>
                            <option value="Educated">Educated</option>
                            <option value="Un-Educated">Un-Educated</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        Occupation<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <select name="m_occup" class="form-control" required="true">
                            <option selected>--Occupation--</option>
                            <option value="advocate">Advocate</option>
                            <option value="advertise">Advertising</option>
                            <option value="airways">Airways</option>
                            <option value="architect">Architect</option>
                            <option value="defence">Defence</option>
                            <option value="banking">Banking</option>
                            <option value="CA">Chartered Accountatnt</option>
                            <option value="Civil service">Civil Service</option>
                            <option value="Doctor">Doctor</option>
                            <option value="education">Educationist</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="House Wife">House Wife</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <label class="col-sm-1 col-form-label">Designation</label>
                    <div class="col-sm-5">
                        <input type="text" placeholder="Write NA in case of No Data" name="m_desig"
                            style="text-transform:uppercase;" class="form-control">
                    </div>
                </div>

                <!--Details of Current School and Baord -->
                <div class="row mb-3">
                    <h2 class="bg-dark text-light h4 mb-3">Details of Current School and Board</h2>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        School Name<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-11">
                        <input type="text" placeholder="Current School Name" name="cur_schname"
                            style="text-transform: uppercase;" required="true" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"label>Board Name<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" placeholder="Board Name" name="cur_brdname"
                            style="text-transform: uppercase;" class="form-control" required="true">
                    </div>

                    <label class="col-sm-1 col-form-label">Year of Passing<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="number" placeholder="Year of passing" name="cur_brdpassyr" class="form-control"
                            required="true">
                    </div>

                </div>

                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">
                        Medium of Instruction<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" placeholder="Medium of Instructions" name="cur_medinst"
                            style="text-transform:uppercase;" class="form-control">
                    </div>

                    <label class="col-sm-1 col-form-label">Select Board Type<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <select name="cur_brdtype" class="form-control" required="true">
                            <option selected>--Board Type--</option>
                            <option value="cbse">CBSE</option>
                            <option value="other">OTHERS</option>
                        </select>
                    </div>
                </div>
                <!-- Current School Details Ended-->
                <div style="font-weight:bold; font-family:Arial; font-size:14px;">
                    <ol class="text-danger">Uploads
                        <li class="text-danger">All documents are accepted in .pdf format.</li>
                        <li class="text-danger">In case of multiple achievements certificates, kindly merge into a
                            single .pdf.</li>
                    </ol>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Class X Pre-Board Marksheet/Board Mark
                        Sheet/Achievements<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="file" name="docum" class="form-control" required="true" value="abc">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-12 col-form-label">
                        <input type="checkbox" id="declare" name="ack" value="declared" onclick="myFunction()">
                        I hereby declare that all the information given
                        above
                        is correct and authentic to the best of my knowledge.
                    </label>
                    <button type="submit" class="btn btn-primary btn-lg w-100" id="text">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function classFunction() {
            var stu_class = document.getElementById("class");
            var stu_stream = document.getElementById("lblstream");
            var stream_value = document.getElementById("stream");
            if (stu_class.value == 'XI') {
                stu_stream.style.display = "block";
            } else {
                stu_stream.style.display = "none";
                stream.value = "";
            }
        }
    </script>
    <script>
        function myFunction() {
            var checkBox = document.getElementById("declare");
            var text = document.getElementById("text");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>
@endsection
