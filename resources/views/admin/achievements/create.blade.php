@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Create a New Achiever
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('achievement.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="field" class="col-sm-2 col-form-label">Field Of Achievement</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="field" name="field">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="year" class="col-sm-2 col-form-label">Year</label>
                                    <div class="col-sm-10">
                                        @php
                                            $years = range(1900, strftime('%Y', time()));
                                        @endphp
                                        <select class="form-control" name="year">
                                            <option selected>Select Year</option>
                                            @foreach ($years as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="photo" class="col-sm-2 col-form-label">Achiever Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="photo">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" src="{{ url('backend/images/small/img-2.jpg') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Create Achiever
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
