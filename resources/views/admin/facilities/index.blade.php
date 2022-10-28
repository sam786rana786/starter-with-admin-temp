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
                                        <h4>Upcoming facilitys</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('facilities.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    a Facility</a>
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
                                    <th>Facility Image</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Description</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($facilities as $key => $facility)
                                    @php

                                        $nd = Illuminate\Support\Str::limit($facility->body, 40, '...');
                                        $link = Illuminate\Support\Str::limit($facility->link, 10, '...');
                                    @endphp
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img src="{{ asset($facility->facilty_image) }}" alt="Notice Image"
                                                class="avatar-sm">
                                        </td>
                                        <td><a href="{{ route('facilities.show', $facility->id) }}">{{ $facility->title }}</a></td>
                                        <td>{{ $facility->sub_title }}</td>
                                        <td>{{ $nd }}</td>
                                        <td colspan="2">
                                            <a href="{{ route('facilities.edit', $facility->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <a href="{{ route('facilities.destroy', $facility->id) }}" type="button"
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
