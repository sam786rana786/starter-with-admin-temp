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
                                        <h4>Banners</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('banner.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Banner</a>
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
                                    <th>Banner Image</th>
                                    <th>Title</th>
                                    <th>Short Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $key => $banner)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img src="{{ asset($banner->banner_image) }}" alt="Banner Image"
                                                class="avatar-sm"></td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->short_title }}</td>
                                        <td>{{ $banner->description }}</td>
                                        <td>
                                            <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <a href="{{ route('banner.delete', $banner->id) }}" type="button" class="btn btn-danger"><i class=" fas fa-trash-alt"></i>
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
