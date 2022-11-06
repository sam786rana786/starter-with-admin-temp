@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Admission Notification</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('notifications.update', $notification->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="pdf" class="col-sm-2 col-form-label">Insert PDF</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="pdf">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <embed id="showImage"
                                        src="{{ !empty($about->about_image) ? url($about->about_image) : url('backend/images/small/img-2.jpg') }}"
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
