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
                                        <th>Opening Time</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $topbar->id }}</td>
                                        <td>{{ $topbar->opening }}</td>
                                        <td>{{ $topbar->phone }}</td>
                                        <td>{{ $topbar->address }}</td>
                                        <td>
                                            <a href="{{ route('topbar.edit', $topbar->id) }}" class="btn btn-primary"><i
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
