@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="{{ asset($event->cover_image) }}" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $event->name }}</h4>
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text">{{ $event->description }}</p>
                                    <p class="card-text"><a href="{{ $event->link }}">{{ $event->title }} and was created
                                            by {{ $event->created_by }}</a></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $event->event_date }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="{{ route('events.delete', $event->id) }}" class="btn btn-danger">Delete
                                                this event</a>
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
