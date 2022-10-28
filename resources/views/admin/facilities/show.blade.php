@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="{{ asset($facility->facilty_image) }}" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $facility->title }}</h4>
                                    <h5 class="card-title">{{ $facility->sub_title }}</h5>
                                    <p class="card-text">{{ $facility->body }}</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $facility->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="{{ route('facilities.destroy', $facility->id) }}" class="btn btn-danger">Delete
                                                this facility</a>
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
