@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Result
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('result.update', $result->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $result->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="description" name="description">{{ $result->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="is_active" class="col-sm-2 col-form-label">Activate</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="1" {{ $result->is_active == 1 ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="0" {{ $result->is_active == 0 ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pdf" class="col-sm-2 col-form-label">result Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="pdf">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <embed id="showImage"
                                            src="{{ !empty($result->pdf) ? url($result->pdf) : url('backend/images/small/img-2.jpg') }}"
                                            alt="Image Profile" class="rounded avatar-lg"></embed>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update Result
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
