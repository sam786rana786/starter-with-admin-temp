@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Album</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $album->name }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                Update Album
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
