@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>About Image</th>
                                        <th>About School</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $about->id }}</td>
                                        <td><img src="{{ $about->about_image }}" alt="About Image" class="rounded avatar-md">
                                        </td>
                                        <td>
                                            {!! $about->about_school !!}
                                        </td>
                                        <td>
                                            <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary"><i
                                                    class="dripicons-document-edit"></i>
                                                Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
