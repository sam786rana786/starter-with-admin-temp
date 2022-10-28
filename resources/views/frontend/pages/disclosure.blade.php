@extends('frontend.frontend_master')

@section('content')
    @php
    $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->mandatory_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Mandatory Public Disclosure</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Mandatory Public Disclosure</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section class="about about-one padding-120" style="background-color: #f5f8fa;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5" data-aos="fade-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">General Information</h5>
                            <table class="table table-striped table-bordered mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Information</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">NAME OF SCHOOL</td>
                                        <td class="text-center">{{ $mandatory->name_of_school }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">AFFILIATION NUMBER</td>
                                        <td class="text-center">{{ $mandatory->aff_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">SCHOOL CODE (If Applicable)</td>
                                        <td class="text-center">{{ $mandatory->school_code }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">Complete Address With Pin Code</td>
                                        <td class="text-center">{{ $mandatory->add_pin }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">Principal Name & Qualification</td>
                                        <td class="text-center">{{ $mandatory->principal_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">School Email Id.</td>
                                        <td class="text-center">{{ $mandatory->school_email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">Contact Details</td>
                                        <td class="text-center">{{ $mandatory->contact }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-5" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">Documents and Information</h5>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Document and Information</th>
                                        <th class="text-center">Links</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT
                                            EXTENSION OF AFFILIATION IF
                                            ANY</td>
                                        <td class="text-center"><a href="{{ asset($mandatory->aff_doc) }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL
                                            CERTIFICATE AS PER
                                            APPLICABLE</td>
                                        <td class="text-center"><a href="{{ $mandatory->society_doc }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED IF APPLICABLE
                                            BY THE STATE
                                            GOVT./UT</td>
                                        <td class="text-center"><a href="{{ $mandatory->noc_gov }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT. 2009 AND
                                            ITS RENEWAL IF
                                            APPLICABLE</td>
                                        <td class="text-center"><a href="{{ $mandatory->recognition_doc }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE
                                            NATIONAL BUILDING CODE</td>
                                        <td class="text-center"><a href="{{ $mandatory->building_noc }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY COMPETENT
                                            AUTHORITY</td>
                                        <td class="text-center"><a href="{{ $mandatory->fire_noc }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">COPY OF DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                            AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL
                                        </td>
                                        <td class="text-center"><a href="{{ $mandatory->self_doc }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">COPIES OF VALID WATER HEALTH AND SANITATION CERTIFICATES
                                        </td>
                                        <td class="text-center"><a href="{{ $mandatory->iph_noc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-5" data-aos="fade-up">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">Result & Academics</h5>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Documents/Information</th>
                                        <th class="text-center">Download Documents</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">FEE STRUCTURE OF THE SCHOOL</td>
                                        <td class="text-center"><a href="{{ $mandatory->fee_structure }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">ANNUAL ACADEMIC CALENDER</td>
                                        <td class="text-center"><a href="{{ $mandatory->academic_cal }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                        <td class="text-center"><a href="{{ $mandatory->smc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                        <td class="text-center"><a href="{{ $mandatory->pta }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER
                                            APPLICABLE</td>
                                        <td class="text-center"><a href="{{ $mandatory->three_year_result }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-5" data-aos="fade-down">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">Result Class X</h5>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Year</th>
                                        <th class="text-center">No. Of Registered Students</th>
                                        <th class="text-center">No. Of Students Passed</th>
                                        <th class="text-center">Pass Percentage</th>
                                        <th class="text-center">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">{{ $mandatory->x_year1 }}</td>
                                        <td class="text-center">{{ $mandatory->x_students1 }}</td>
                                        <td class="text-center">{{ $mandatory->x_pass1 }}</td>
                                        <td class="text-center">{{ $mandatory->x_percentage1 }}</td>
                                        <td class="text-center">{{ $mandatory->x_remarks1 }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">{{ $mandatory->x_year2 }}</td>
                                        <td class="text-center">{{ $mandatory->x_students2 }}</td>
                                        <td class="text-center">{{ $mandatory->x_pass2 }}</td>
                                        <td class="text-center">{{ $mandatory->x_percentage2 }}</td>
                                        <td class="text-center">{{ $mandatory->x_remarks2 }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">{{ $mandatory->x_year3 }}</td>
                                        <td class="text-center">{{ $mandatory->x_students3 }}</td>
                                        <td class="text-center">{{ $mandatory->x_pass3 }}</td>
                                        <td class="text-center">{{ $mandatory->x_percentage3 }}</td>
                                        <td class="text-center">{{ $mandatory->x_remarks3 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-5" data-aos="zoom-out-up">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">Staff(Teaching)</h5>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Information</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Principal</td>
                                        <td class="text-center">{{ $mandatory->principal_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">PGT</td>
                                        <td class="text-center">{{ $mandatory->prt_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">TGT</td>
                                        <td class="text-center">{{ $mandatory->tgt }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">PRT</td>
                                        <td class="text-center">{{ $mandatory->prt }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">Teacher Section Ratio</td>
                                        <td class="text-center">{{ $mandatory->ratio }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">Details Of Special Educator</td>
                                        <td class="text-center">{{ $mandatory->special_educator }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">Details Of Counsellor & Wellness Teacher</td>
                                        <td class="text-center">{{ $mandatory->counsellor }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-5" data-aos="flip-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h54">SCHOOL INFRASTRUCTURE</h5>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr.No.</th>
                                        <th class="text-center">Information</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ. MTRS.)</td>
                                        <td class="text-center">{{ $mandatory->campus_area }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">NUMBER AND SIZE OF THE CLASS ROOMS (IN SQ. FT/MTRS)</td>
                                        <td class="text-center">{{ $mandatory->class_room }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">NUMBER AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN
                                            SQ. MTRS.)</td>
                                        <td class="text-center">{{ $mandatory->lab }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">INTERNET FACILITY (Y/N)</td>
                                        <td class="text-center">{{ $mandatory->internet }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">NUMBER OF GIRLS TOILETS</td>
                                        <td class="text-center">{{ $mandatory->girl_toilet }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">NUMBER OF BOYS TOILETS</td>
                                        <td class="text-center">{{ $mandatory->boy_toilet }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING
                                            THE INFRASTRUCTURE OF
                                            THE SCHOOL</td>
                                        <td class="text-center"><a href="{{ $mandatory->youtube_link }}"
                                                class="btn btn-primary" target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
