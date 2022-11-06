@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ route('link.create') }}" class="btn btn-primary"><i class="fas fa-add"></i> Add Useful Link</a>

                <div class="col-md-12 col-xl-12 py-5">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Url</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usefulLinks as $key => $u)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $u->title }}</td>
                                                    <td>{{ $u->url }}</td>
                                                    <td>
                                                        <a href="{{ route('link.edit', $u) }}"
                                                            class="btn btn-primary btn-md"><i class="fas fa-pencil-alt"></i> Edit
                                                            This Links</a>
                                                        <button type="button" class="btn btn-danger btn-md deleteEmployee"
                                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                            value="{{ route('link.destroy', $u->id) }}"><i
                                                                class="fas fa-trash-alt"></i>
                                                            Delete This Link
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
