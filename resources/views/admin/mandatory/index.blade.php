@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ route('mandatory.edit', $mandatory->id) }}" class="btn btn-md btn-primary mb-4">Edit All
                    Informations</a>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">General Information</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Information</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NAME OF SCHOOL</td>
                                        <td>{{ $mandatory->name_of_school }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AFFILIATION NUMBER</td>
                                        <td>{{ $mandatory->aff_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SCHOOL CODE (If Applicable)</td>
                                        <td>{{ $mandatory->school_code }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Complete Address With Pin Code</td>
                                        <td>{{ $mandatory->add_pin }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Principal Name & Qualification</td>
                                        <td>{{ $mandatory->principal_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>School Email Id.</td>
                                        <td>{{ $mandatory->school_email }}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Contact Details</td>
                                        <td>{{ $mandatory->contact }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Documents and Information</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Document and Information</th>
                                        <th>Links</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION IF
                                            ANY</td>
                                        <td><a href="{{ asset($mandatory->aff_doc) }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE AS PER
                                            APPLICABLE</td>
                                        <td><a href="{{ $mandatory->society_doc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED IF APPLICABLE BY THE STATE
                                            GOVT./UT</td>
                                        <td><a href="{{ $mandatory->noc_gov }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT. 2009 AND ITS RENEWAL IF
                                            APPLICABLE</td>
                                        <td><a href="{{ $mandatory->recognition_doc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                                        <td><a href="{{ $mandatory->building_noc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY COMPETENT AUTHORITY</td>
                                        <td><a href="{{ $mandatory->fire_noc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>COPY OF DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                            AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL
                                        </td>
                                        <td><a href="{{ $mandatory->self_doc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>COPIES OF VALID WATER HEALTH AND SANITATION CERTIFICATES</td>
                                        <td><a href="{{ $mandatory->iph_noc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Result & Academics</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Documents/Information</th>
                                        <th>Download Documents</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>FEE STRUCTURE OF THE SCHOOL</td>
                                        <td><a href="{{ $mandatory->fee_structure }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ANNUAL ACADEMIC CALENDER</td>
                                        <td><a href="{{ $mandatory->academic_cal }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                        <td><a href="{{ $mandatory->smc }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                        <td><a href="{{ $mandatory->pta }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLE</td>
                                        <td><a href="{{ $mandatory->three_year_result }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Result Class X</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Year</th>
                                        <th>No. Of Registered Students</th>
                                        <th>No. Of Students Passed</th>
                                        <th>Pass Percentage</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $mandatory->x_year1 }}</td>
                                        <td>{{ $mandatory->x_students1 }}</td>
                                        <td>{{ $mandatory->x_pass1 }}</td>
                                        <td>{{ $mandatory->x_percentage1 }}</td>
                                        <td>{{ $mandatory->x_remarks1 }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>{{ $mandatory->x_year2 }}</td>
                                        <td>{{ $mandatory->x_students2 }}</td>
                                        <td>{{ $mandatory->x_pass2 }}</td>
                                        <td>{{ $mandatory->x_percentage2 }}</td>
                                        <td>{{ $mandatory->x_remarks2 }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>{{ $mandatory->x_year3 }}</td>
                                        <td>{{ $mandatory->x_students3 }}</td>
                                        <td>{{ $mandatory->x_pass3 }}</td>
                                        <td>{{ $mandatory->x_percentage3 }}</td>
                                        <td>{{ $mandatory->x_remarks3 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Staff(Teaching)</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Information</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Principal</td>
                                        <td>{{ $mandatory->principal_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>PGT</td>
                                        <td>{{ $mandatory->prt_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>TGT</td>
                                        <td>{{ $mandatory->tgt }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>PRT</td>
                                        <td>{{ $mandatory->prt }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Teacher Section Ratio</td>
                                        <td>{{ $mandatory->ratio }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Details Of Special Educator</td>
                                        <td>{{ $mandatory->special_educator }}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Details Of Counsellor & Wellness Teacher</td>
                                        <td>{{ $mandatory->counsellor }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">SCHOOL INFRASTRUCTURE</h4>
                            <table class="table table-striped table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Information</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ. MTRS.)</td>
                                        <td>{{ $mandatory->campus_area }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NUMBER AND SIZE OF THE CLASS ROOMS (IN SQ. FT/MTRS)</td>
                                        <td>{{ $mandatory->class_room }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NUMBER AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ. MTRS.)</td>
                                        <td>{{ $mandatory->lab }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>INTERNET FACILITY (Y/N)</td>
                                        <td>{{ $mandatory->internet }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>NUMBER OF GIRLS TOILETS</td>
                                        <td>{{ $mandatory->girl_toilet }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>NUMBER OF BOYS TOILETS</td>
                                        <td>{{ $mandatory->boy_toilet }}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF
                                            THE SCHOOL</td>
                                        <td><a href="{{ $mandatory->youtube_link }}" class="btn btn-primary"
                                                target="_blank">Link</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
