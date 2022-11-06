@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <embed class="card-img img-fluid" src="{{ asset($notice->cover_image) }}" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $notice->title }}</h4>
                                    <h5 class="card-title">{{ $notice->short_title }}</h5>
                                    <p class="card-text">{{ $notice->description }}</p>
                                    <p class="card-text"><a href="{{ $notice->link }}">{{ $notice->title }} and was created
                                            by {{ $notice->created_by }}</a></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $notice->created_at->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="{{ route('notice.delete', $notice->id) }}"
                                                class="btn btn-danger">Delete this Notice</a>
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
