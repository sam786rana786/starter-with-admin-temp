@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Notice
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('tc.update', $transferCertificate->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Class</label>
                                    <div class="col-sm-10">
                                        <select name="class" id="class" class="form-control">
                                            <option>Select Class</option>
                                            <option {{ $transferCertificate->class == 'NUR' ? 'selected' : '' }} value="NUR">
                                                NUR</option>
                                            <option {{ $transferCertificate->class == 'UKG' ? 'selected' : '' }} value="UKG">
                                                UKG</option>
                                            <option {{ $transferCertificate->class == 'I' ? 'selected' : '' }} value="I">
                                                First</option>
                                            <option {{ $transferCertificate->class == 'II' ? 'selected' : '' }} value="II">
                                                Second</option>
                                            <option {{ $transferCertificate->class == 'III' ? 'selected' : '' }} value="III">
                                                Third</option>
                                            <option {{ $transferCertificate->class == 'IV' ? 'selected' : '' }} value="IV">
                                                Fourth</option>
                                            <option {{ $transferCertificate->class == 'V' ? 'selected' : '' }} value="V">
                                                Fifth</option>
                                            <option {{ $transferCertificate->class == 'VI' ? 'selected' : '' }} value="VI">
                                                Sixth</option>
                                            <option {{ $transferCertificate->class == 'VII' ? 'selected' : '' }} value="VII">
                                                Seventh</option>
                                            <option
                                                {{ $transferCertificate->class == 'VIII' ? 'selected' : '' }} value="VIII">
                                                Eighth</option>
                                            <option {{ $transferCertificate->class == 'IX' ? 'selected' : '' }} value="IX">
                                                Ninth</option>
                                            <option {{ $transferCertificate->class == 'X' ? 'selected' : '' }} value="X">
                                                Tenth</option>
                                            <option {{ $transferCertificate->class == 'XI' ? 'selected' : '' }} value="XI">
                                                Plus One</option>
                                            <option
                                                {{ $transferCertificate->class == 'XII' ? 'selected' : '' }} value="XII">
                                                Plus Two</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Section</label>
                                    <div class="col-sm-10">
                                        <select name="section" id="section" class="form-control">
                                            <option>Please select section</option>
                                            <option {{ $transferCertificate->section == 'A' ? 'selected' : ''  }} value="A">A</option>
                                            <option {{ $transferCertificate->section == 'B' ? 'selected' : ''  }} value="B">B</option>
                                            <option {{ $transferCertificate->section == 'C' ? 'selected' : ''  }} value="C">C</option>
                                            <option {{ $transferCertificate->section == 'Medical' ? 'selected' : ''  }} value="Medical">Medical</option>
                                            <option {{ $transferCertificate->section == 'Non-Medical' ? 'selected' : ''  }} value="Non-Medical">Non-Medical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Admission Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="admission_no" name="admission_no"
                                            value="{{ $transferCertificate->admission_no }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pdf" class="col-sm-2 col-form-label">Transfer Certificate PDF</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="pdf">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <embed id="showImage"
                                            src="{{ !empty($transferCertificate->pdf) ? url($transferCertificate->pdf) : url('backend/images/small/img-2.jpg') }}"
                                            alt="Image Profile" class="rounded avatar-lg"></embed>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update Transfer Certificate
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
