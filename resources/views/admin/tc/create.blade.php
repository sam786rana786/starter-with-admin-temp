@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Create a New Notice
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('tc.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Class</label>
                                    <div class="col-sm-10">
                                        <select name="class" id="class" class="form-control">
                                            <option selected>Select Class</option>
                                            <option value="NUR">NUR</option>
                                            <option value="UKG">UKG</option>
                                            <option value="I">First</option>
                                            <option value="II">Second</option>
                                            <option value="III">Third</option>
                                            <option value="IV">Fourth</option>
                                            <option value="V">Fifth</option>
                                            <option value="VI">Sixth</option>
                                            <option value="VII">Seventh</option>
                                            <option value="VIII">Eighth</option>
                                            <option value="IX">Ninth</option>
                                            <option value="X">Tenth</option>
                                            <option value="XI">Plus One</option>
                                            <option value="XII">Plus Two</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Section</label>
                                    <div class="col-sm-10">
                                        <select name="section" id="section" class="form-control">
                                            <option selected>Please select section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="Medical">Medical</option>
                                            <option value="Non-Medical">Non-Medical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_no" class="col-sm-2 col-form-label">Admission Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="admission_no" name="admission_no">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pdf" class="col-sm-2 col-form-label">TC PDF</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="pdf">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <embed src="{{ url('backend/images/small/img-2.jpg') }}" type="application/pdf"
                                            id="showImage" frameBorder="0" scrolling="auto" height="100%" width="100%">
                                        </embed>
                                        {{-- <img id="showImage" src="{{ url('backend/images/small/img-2.jpg') }}"
                                            alt="Image Profile" class="rounded avatar-lg"> --}}
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Create Transfer Certificate
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
