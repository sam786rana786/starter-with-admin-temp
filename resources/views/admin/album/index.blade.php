@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-10">
                                        <h4>Gallery</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('album.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Album</a>
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
                                    <th>Slug</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albums as $key => $album)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a href="{{ route('album.show', $album->id) }}">{{ $album->slug }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('album.show', $album->id) }}">{{ $album->name }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('album.edit', $album->id) }}" class="btn btn-primary"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ route('album.delete', $album->id) }}" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i> Delete</a>
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
