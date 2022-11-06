@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <embed class="card-img img-fluid" src="{{ asset($result->pdf) }}"></embed>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $result->title }}</h4>
                                    <p class="card-text">{{ $result->description }}</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('result.destroy', $result->id) }}">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
