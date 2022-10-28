@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Gallery Images</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="about_school" class="col-sm-2 col-form-label">About Description</label>
                                <div class="col-sm-10">
                                    <textarea class="elm1" name="about_school">{{ $about->about_school }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="about_image" class="col-sm-2 col-form-label">About Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="about_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage"
                                        src="{{ !empty($about->about_image) ? url($about->about_image) : url('backend/images/small/img-2.jpg') }}"
                                        alt="Image Profile" class="rounded avatar-lg">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                Update About Section
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
