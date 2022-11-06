@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Gallery Images</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('latest_notice.update', $latestNotice->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $latestNotice->title }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="short_title" name="short_title"
                                        value="{{ $latestNotice->short_title }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="description" name="description">{{ $latestNotice->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cover_image" class="col-sm-2 col-form-label">Latest Notice PDF</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="cover_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <embed id="showImage"
                                        src="{{ !empty($latestNotice->cover_image) ? url($latestNotice->cover_image) : url('backend/images/small/img-2.jpg') }}"
                                        class="rounded avatar-lg" />
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
