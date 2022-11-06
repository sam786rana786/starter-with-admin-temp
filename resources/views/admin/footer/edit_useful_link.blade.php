@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Create a New Notice
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('link.update', $usefulLink->id) }}" method="POST">@csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $usefulLink->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="url" class="col-sm-2 col-form-label">URL</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="url" name="url"
                                            value="{{ $usefulLink->url }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Create Useful Link
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
