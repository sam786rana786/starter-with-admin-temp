@extends('admin.admin_master')

@section('admin')
    <link rel="stylesheet" href="{{ asset('frontend/assets/flaticon/flaticon.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-10">
                                        <h4>Highlights</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('highlights.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Highlights</a>
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
                                    <th>Card Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($highlights as $key => $highlight)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><i class="{{ $highlight->card_image }}"></i></td>
                                        <td>{{ $highlight->title }}</td>
                                        <td>{{ $highlight->description }}</td>
                                        <td>{{ $highlight->created_by }}</td>
                                        <td>
                                            <a href="{{ route('highlights.edit', $highlight->id) }}"
                                                class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <a href="{{ route('highlights.destroy', $highlight->id) }}" type="button"
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
