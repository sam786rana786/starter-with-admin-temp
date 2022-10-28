@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-10">
                                        <h4>Upcoming Events</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('events.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    an Event</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Event Image</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Event Date</th>
                                    <th>Link</th>
                                    <th>Created By</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $key => $event)
                                    @php

                                        $nd = Illuminate\Support\Str::limit($event->description, 40, '...');
                                        $link = Illuminate\Support\Str::limit($event->link, 10, '...');
                                    @endphp
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($event->cover_image) }}" alt="Notice Image"
                                                class="avatar-sm"></td>
                                        <td>
                                            <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
                                        </td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $nd }}</td>
                                        <td>{{ $event->event_date }}</td>
                                        <td>{{ $link }}</td>
                                        <td>{{ $event->created_by }}</td>
                                        <td colspan="2">
                                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <a href="{{ route('events.delete', $event->id) }}" type="button"
                                                class="btn btn-danger"><i class=" fas fa-trash-alt"></i>
                                                Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
