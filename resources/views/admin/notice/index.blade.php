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
                                        <h4>Notices</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('notice.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Notice</a>
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
                                    <th>Notice Image</th>
                                    <th>Title</th>
                                    <th>Short Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Created By</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $key => $notice)
                                    @php

                                        $nd = Illuminate\Support\Str::limit($notice->description, 40, '...');
                                        $link = Illuminate\Support\Str::limit($notice->link, 10, '...');
                                    @endphp
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><embed src="{{ asset($notice->cover_image) }}"
                                                class="avatar-sm" /></td>
                                        <td>
                                            <a href="{{ route('notice.show', $notice->id) }}">{{ $notice->title }}</a>
                                        </td>
                                        <td>{{ $notice->short_title }}</td>
                                        <td>{{ $nd }}</td>
                                        <td>{{ $link }}</td>
                                        <td>{{ $notice->created_by }}</td>
                                        <td colspan="2">
                                            <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <a href="{{ route('notice.delete', $notice->id) }}" type="button"
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
