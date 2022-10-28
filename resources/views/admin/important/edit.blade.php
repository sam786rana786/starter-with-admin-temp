@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Important Banner Images
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('important.update', $importantImages->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="header_image" class="col-sm-2 col-form-label">Header Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image1" name="header_image"
                                            value="{{ $importantImages->header_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="header_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage1"
                                            src="{{ !empty($importantImages->header_image) ? url($importantImages->header_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="mandatory_image" class="col-sm-2 col-form-label">Mandatory Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image2" name="mandatory_image"
                                            value="{{ $importantImages->mandatory_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="mandatory_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage2"
                                            src="{{ !empty($importantImages->mandatory_image) ? url($importantImages->mandatory_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="facilities_image" class="col-sm-2 col-form-label">Facilities Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image3" name="facilities_image"
                                            value="{{ $importantImages->facilities_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="facilities_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage3"
                                            src="{{ !empty($importantImages->facilities_image) ? url($importantImages->facilities_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_image" class="col-sm-2 col-form-label">Admission Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image4" name="admission_image"
                                            value="{{ $importantImages->admission_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admission_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage4"
                                            src="{{ !empty($importantImages->admission_image) ? url($importantImages->admission_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="achievements_image" class="col-sm-2 col-form-label">Achievements
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image5" name="achievements_image"
                                            value="{{ $importantImages->achievements_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="achievements_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage5"
                                            src="{{ !empty($importantImages->achievements_image) ? url($importantImages->achievements_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="info_link_image" class="col-sm-2 col-form-label">Info Link Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image6" name="info_link_image"
                                            value="{{ $importantImages->infoLink_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="info_link_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage6"
                                            src="{{ !empty($importantImages->infoLink_image) ? url($importantImages->infoLink_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gallery_image" class="col-sm-2 col-form-label">Gallery Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image7" name="gallery_image"
                                            value="{{ $importantImages->gallery_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gallery_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage7"
                                            src="{{ !empty($importantImages->gallery_image) ? url($importantImages->gallery_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tc_image" class="col-sm-2 col-form-label">Transfer Certificate
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image8" name="tc_image"
                                            value="{{ $importantImages->tc_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tc_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage8"
                                            src="{{ !empty($importantImages->tc_image) ? url($importantImages->tc_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alumni_image" class="col-sm-2 col-form-label">Alumni Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image9" name="alumni_image"
                                            value="{{ $importantImages->alumni_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alumni_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage9"
                                            src="{{ !empty($importantImages->alumni_image) ? url($importantImages->alumni_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact_image" class="col-sm-2 col-form-label">Contact Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image10" name="contact_image"
                                            value="{{ $importantImages->contact_image }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage10"
                                            src="{{ !empty($importantImages->contact_image) ? url($importantImages->contact_image) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="style">Change Color Theme of
                                        Template</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="style">
                                            <option selected="">Open this select menu</option>
                                            <option value="style1">Theme One</option>
                                            <option value="style2">Theme Two</option>
                                            <option value="style3">Theme Three</option>
                                            <option value="style4">Theme Four</option>
                                            <option value="style5">Theme Five</option>
                                            <option value="style6">Theme Six</option>
                                            <option value="style7">Theme Seven</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update Important Images
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image1').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage1').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image3').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage3').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image4').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage4').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image5').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage5').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image6').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage6').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image7').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage7').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image8').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage8').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image9').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage9').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $('#image10').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage10').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
