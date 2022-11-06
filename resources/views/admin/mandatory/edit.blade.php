@extends('admin.admin_master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.css') }}">
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                <form action="{{ route('mandatory.update', $mandatory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Wizard with progressbar</h4>

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <span class="step-number">01</span>
                                                <span class="step-title">General Information</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <span class="step-number">02</span>
                                                <span class="step-title">Documents and Information</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">03</span>
                                                <span class="step-title">Result & Academics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-x-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">04</span>
                                                <span class="step-title">Result Class X</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-staff-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">05</span>
                                                <span class="step-title">Staff(Teaching)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-school-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">06</span>
                                                <span class="step-title">SCHOOL INFRASTRUCTURE</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">07</span>
                                                <span class="step-title">Confirm Detail</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                        </div>
                                    </div>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-firstname-input">Name Of School</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-firstname-input" name="name_of_school"
                                                            value="{{ $mandatory->name_of_school }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-lastname-input">Affiliation
                                                            Number</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-lastname-input" name="aff_no"
                                                            value="{{ $mandatory->aff_no }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-phoneno-input">School Code</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-phoneno-input" name="school_code"
                                                            value="{{ $mandatory->school_code }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-email-input">Address with Pin</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-email-input" name="add_pin"
                                                            value="{{ $mandatory->add_pin }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">Principal Name And
                                                            Qualification</label>
                                                        <input type="text" id="progress-basicpill-address-input"
                                                            class="form-control" name="principal_name"
                                                            value="{{ $mandatory->principal_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">School Email</label>
                                                        <input type="text" id="progress-basicpill-address-input"
                                                            class="form-control" name="school_email"
                                                            value="{{ $mandatory->school_email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">Contact Details</label>
                                                        <input type="text" id="progress-basicpill-address-input"
                                                            class="form-control" name="contact"
                                                            value="{{ $mandatory->contact }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-pancard-input">Affiliation
                                                                Document</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-pancard-input" name="aff_doc">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-vatno-input">Society
                                                                Document</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-vatno-input" name="society_doc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-cstno-input">Govt. Noc</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-cstno-input" name="noc_gov">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-servicetax-input">Recognition
                                                                Document</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-servicetax-input"
                                                                name="recognition_doc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-companyuin-input">Building
                                                                NOC</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-companyuin-input"
                                                                name="building_noc">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-declaration-input">Fire NOC</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-declaration-input" name="fire_noc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-companyuin-input">SELF
                                                                CERTIFICATION BY SCHOOL</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-companyuin-input" name="self_doc">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-declaration-input">HEALTH AND
                                                                SANITATION CERTIFICATES</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-declaration-input" name="iph_noc">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-bank-detail">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-namecard-input">FEE STRUCTURE OF
                                                                THE SCHOOL</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-namecard-input"
                                                                name="fee_structure">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-namecard-input">ANNUAL ACADEMIC
                                                                CALENDER</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-namecard-input"
                                                                name="academic_cal">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-cardno-input">LIST OF SCHOOL
                                                                MANAGEMENT COMMITTEE (SMC)</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-cardno-input" name="smc">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-card-verification-input">LIST OF
                                                                PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-card-verification-input"
                                                                name="pta">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-expiration-input">LAST THREE-YEAR
                                                                RESULT OF THE BOARD EXAMINATION AS PER APPLICABLE</label>
                                                            <input type="file" class="form-control"
                                                                id="progress-basicpill-expiration-input"
                                                                name="three_year_result">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-x-detail">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <h5>S.No</h5>
                                                        <p>1</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_year1-cardno-input">Xth Class Year
                                                                One</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_year1-cardno-input" name="x_year1"
                                                                value="{{ $mandatory->x_year1 }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_students1-card-verification-input">Registered
                                                                Students Of Year One</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_students1-card-verification-input"
                                                                name="x_students1" value="{{ $mandatory->x_students1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_pass1-card-verification-input">Students
                                                                Passed Of Year One</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_pass1-card-verification-input"
                                                                name="x_pass1" value="{{ $mandatory->x_pass1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_percentage1-card-verification-input">Pass
                                                                Percentage Of Year One</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_percentage1-card-verification-input"
                                                                name="x_percentage1"
                                                                value="{{ $mandatory->x_percentage1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_remarks1-card-verification-input">Remarks
                                                                For Year One</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_remarks1-card-verification-input"
                                                                name="x_remarks1" value="{{ $mandatory->x_remarks1 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <h5></h5>
                                                        <p>2</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_year2-cardno-input">Xth Class Year
                                                                Two</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_year2-cardno-input" name="x_year2"
                                                                value="{{ $mandatory->x_year2 }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_students2-card-verification-input">Registered
                                                                Students Of Year Two</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_students2-card-verification-input"
                                                                name="x_students2" value="{{ $mandatory->x_students2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_pass2-card-verification-input">Students
                                                                Passed Of Year Two</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_pass2-card-verification-input"
                                                                name="x_pass2" value="{{ $mandatory->x_pass2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_percentage2-card-verification-input">Pass
                                                                Percentage Of Year Two</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_percentage2-card-verification-input"
                                                                name="x_percentage2"
                                                                value="{{ $mandatory->x_percentage2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_remarks2-card-verification-input">Remarks
                                                                For Year Two</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_remarks2-card-verification-input"
                                                                name="x_remarks2" value="{{ $mandatory->x_remarks2 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <h5></h5>
                                                        <p>3</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_year3-cardno-input">Xth Class Year
                                                                Three</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_year3-cardno-input" name="x_year3"
                                                                value="{{ $mandatory->x_year3 }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_students3-card-verification-input">Registered
                                                                Students Of Year Three</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_students3-card-verification-input"
                                                                name="x_students3" value="{{ $mandatory->x_students3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_pass3-card-verification-input">Students
                                                                Passed Of Year Three</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_pass3-card-verification-input"
                                                                name="x_pass3" value="{{ $mandatory->x_pass3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_percentage3-card-verification-input">Pass
                                                                Percentage Of Year Three</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_percentage3-card-verification-input"
                                                                name="x_percentage3"
                                                                value="{{ $mandatory->x_percentage3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-x_remarks3-card-verification-input">Remarks
                                                                For Year Three</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-x_remarks3-card-verification-input"
                                                                name="x_remarks3" value="{{ $mandatory->x_remarks3 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-staff-detail">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-principal_no-namecard-input">Principal</label>
                                                            <input type="number" class="form-control"
                                                                id="progress-principal_no-namecard-input"
                                                                name="principal_no"
                                                                value="{{ $mandatory->principal_no }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-prt_no-namecard-input">PGT</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->prt_no }}"
                                                                id="progress-prt_no-namecard-input" name="prt_no">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-tgt-namecard-input">TGT</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->tgt }}"
                                                                id="progress-tgt-namecard-input" name="tgt">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-prt-namecard-input">PRT</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->prt }}"
                                                                id="progress-prt-namecard-input" name="prt">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-ratio-namecard-input">Teacher Section
                                                                Ratio</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $mandatory->ratio }}"
                                                                id="progress-ratio-namecard-input" name="ratio">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-special_educator-namecard-input">Details Of
                                                                Special Educator</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->special_educator }}"
                                                                id="progress-special_educator-namecard-input"
                                                                name="special_educator">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-counsellor-namecard-input">Details Of
                                                                Counsellor & Wellness Teacher</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->counsellor }}"
                                                                id="progress-counsellor-namecard-input" name="counsellor">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-school-detail">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-campus_area-namecard-input">Campus
                                                                Area</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $mandatory->campus_area }}"
                                                                id="progress-campus_area-namecard-input"
                                                                name="campus_area">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-class_room-namecard-input">Class Room
                                                                Dimensions</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $mandatory->class_room }}"
                                                                id="progress-class_room-namecard-input" name="class_room">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-lab-namecard-input">Lab Dimensions
                                                                Area</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $mandatory->lab }}"
                                                                id="progress-lab-namecard-input" name="lab">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Internet Facility</label>
                                                            <select class="form-select" name="internet">
                                                                <option
                                                                    value="Yes"{{ $mandatory->internet == 'Yes' ? 'selected' : '' }}>
                                                                    Yes</option>
                                                                <option
                                                                    value="No"{{ $mandatory->internet == 'No' ? 'selected' : '' }}>
                                                                    No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-girl_toilet-namecard-input">No. Of Girls
                                                                Toilet</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->girl_toilet }}"
                                                                id="progress-girl_toilet-namecard-input"
                                                                name="girl_toilet">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-boy_toilet-namecard-input">No. Of Boys
                                                                Toilet</label>
                                                            <input type="number" class="form-control"
                                                                value="{{ $mandatory->boy_toilet }}"
                                                                id="progress-boy_toilet-namecard-input" name="boy_toilet">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-youtube_link-namecard-input">YouTube
                                                                Link</label>
                                                            <input type="url" class="form-control"
                                                                value="{{ $mandatory->youtube_link }}"
                                                                id="progress-youtube_link-namecard-input"
                                                                name="youtube_link">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-confirm-detail">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <i
                                                                class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                        </div>
                                                        <div>
                                                            <h5>Confirm Detail</h5>
                                                            <p class="text-muted">Please Check If all The details are
                                                                right!</p>
                                                            <p>If Everything is Fine Then Press Submit</p>
                                                            <button class="btn btn-success" type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                                        <li class="next"><a href="javascript: void(0);">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- twitter-bootstrap-wizard js -->
    <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ asset('backend/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
