@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Gallery Images</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('modal.update', $modal->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Modal Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" value="{{ $modal->title }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Modal Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage"
                                        src="{{ !empty($modal->image) ? url($modal->image) : url('backend/images/small/img-2.jpg') }}"
                                        alt="Image Profile" class="rounded avatar-lg">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                Update Modal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
