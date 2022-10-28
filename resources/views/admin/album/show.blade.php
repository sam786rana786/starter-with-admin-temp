@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $album->name }} Images</h4>
                            <form action="{{ route('uploadImages', $album->id) }}" method="POST"
                                enctype="multipart/form-data">@csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cover_image" class="col-sm-2 col-form-label">Images</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="cover_image" name="cover_image[]"
                                            multiple>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Add Images For This Album
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Here are the Images of this Album</h4>
                            <div class="row">
                                @foreach ($photos as $photo)
                                    <div class="col-sm-3">
                                        <img src="{{ asset($photo->thumbnail) }}" alt="Album Images"
                                            class="img-thumbnail">
                                        <a href="{{ route('deleteImage', $photo->id) }}" class="btn btn-danger">Delete
                                            Image</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
