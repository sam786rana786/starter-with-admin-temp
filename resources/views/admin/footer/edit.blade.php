@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Footer
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('footer.update', $footer->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $footer->address }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="description" name="description">{{ $footer->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $footer->email }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="website" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="website" name="website"
                                            value="{{ $footer->website }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="contact" name="contact"
                                            value="{{ $footer->contact }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="facebook" class="col-sm-2 col-form-label">Facebook Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="facebook" name="facebook"
                                            value="{{ $footer->facebook }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="twitter" class="col-sm-2 col-form-label">Twitter Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="twitter" name="twitter"
                                            value="{{ $footer->twitter }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="youtube" class="col-sm-2 col-form-label">Youtube Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="youtube" name="youtube"
                                            value="{{ $footer->youtube }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="instagram" class="col-sm-2 col-form-label">Instagram Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="instagram" name="instagram"
                                            value="{{ $footer->instagram }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="logo"
                                            value="{{ $footer->logo }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage"
                                            src="{{ !empty($footer->logo) ? url($footer->logo) : url('backend/logo.png') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update Footer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
