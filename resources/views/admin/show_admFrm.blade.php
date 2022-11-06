@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="{{ asset($admFrm->stu_photo) }}" width="100%"
                                    alt="{{ $admFrm->stu_fname }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $admFrm->stu_fname }} {{ $admFrm->stu_midname }}
                                        {{ $admFrm->stu_lastname }}</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="card-text">
                                                <strong>
                                                    Class : {{ $admFrm->student_class }} <br>
                                                    Section : {{ $admFrm->stream }} <br>
                                                    Gender: {{ $admFrm->gender }} <br>
                                                    DOB: {{ $admFrm->stu_dob }} <br>
                                                    Religion: {{ $admFrm->religion }} <br>
                                                    Category: {{ $admFrm->category }} <br>
                                                    Nation: {{ $admFrm->nation }} <br>
                                                    Mobile Number: {{ $admFrm->stu_mobno }} <br>
                                                    Any Disability: {{ $admFrm->lrn_disbl }} <br>
                                                    Any Health Concern: {{ $admFrm->hlth_cncrn }} <br>
                                                    Email Id: {{ $admFrm->stu_mailid }} <br>
                                                    Preference: {{ $admFrm->prefer }} <br>
                                                    Common Mobile Number: {{ $admFrm->comn_mobno }} <br>
                                                    Common Email Id: {{ $admFrm->comn_mailid }} <br>
                                                    Residential Address: {{ $admFrm->res_address }} <br>
                                                </strong>
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="card-text">
                                                <strong>
                                                    Post Office: {{ $admFrm->res_post }} <br>
                                                    District: {{ $admFrm->res_dist }} <br>
                                                    State: {{ $admFrm->res_state }} <br>
                                                    PinCode: {{ $admFrm->res_pin }} <br>
                                                    Father's Name: {{ $admFrm->f_name }} <br>
                                                    Father's Mobile No.: {{ $admFrm->f_mobile }} <br>
                                                    Father's Mail Id: {{ $admFrm->f_mailid }} <br>
                                                    Is Father a Modernite: {{ $admFrm->f_mnite }} <br>
                                                    Father's Qualification: {{ $admFrm->f_qual }} <br>
                                                    Father's Occupation: {{ $admFrm->f_occup }} <br>
                                                    Father's Designation: {{ $admFrm->f_desig }} <br>
                                                    Mother's Name: {{ $admFrm->m_name }} <br>
                                                    Mother's Mobile Number: {{ $admFrm->m_mobile }} <br>
                                                    Mother's Email: {{ $admFrm->m_mailid }} <br>
                                                    Is Mother a Modernite: {{ $admFrm->m_mnite }} <br>
                                                </strong>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="card-text">
                                                <strong>
                                                    Mother's Qualification: {{ $admFrm->m_qual }} <br>
                                                    Mother's Occupation: {{ $admFrm->m_occup }} <br>
                                                    Mother's Designation: {{ $admFrm->m_desig }} <br>
                                                    School Name: {{ $admFrm->cur_schname }} <br>
                                                    School Code: {{ $admFrm->cur_schcode }} <br>
                                                    Board Roll No.: {{ $admFrm->cur_brdroll }} <br>
                                                    Board Name: {{ $admFrm->cur_brdname }} <br>
                                                    Year Of Passing: {{ $admFrm->cur_brdpassyr }} <br>
                                                    Medium Of Instruction: {{ $admFrm->cur_medinst }} <br>
                                                    Board Type: {{ $admFrm->cur_brdtype }} <br>
                                                    Document Link: <a href="{{ url($admFrm->docum) }}"
                                                        target="_blank">Link</a> <br>
                                                    Acknowledgement Done: {{ $admFrm->ack }} <br>
                                                    Approved: {{ $admFrm->is_approved == 1 ? 'Yes' : 'No' }} <br>
                                                    Application Submition Time: {{ $admFrm->created_at }} <br>
                                                    @if ($admFrm->is_approved == 1)
                                                        Approved At Time: {{ $admFrm->updated_at }} <br>
                                                    @endif
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
