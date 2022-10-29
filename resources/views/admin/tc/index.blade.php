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
                                        <h4>Transfer Certificates</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('tc.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Transfer Certificate</a>
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
                                    <th>Transfer Certificate PDF</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Admission Number</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transfers as $key => $notice)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><iframe src="{{ asset($notice->pdf) }}" alt="Notice Image"
                                                class="avatar-sm"></iframe></td>
                                        <td>{{ $notice->class }}</td>
                                        <td>{{ $notice->section }}</td>
                                        <td>
                                            <a href="{{ route('tc.show', $notice->id) }}">{{ $notice->admission_no }}</a>
                                        </td>
                                        <td colspan="2">
                                            <a href="{{ route('tc.edit', $notice->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('tc.destroy', $notice->id) }}"><i
                                                    class="fas fa-trash-alt"></i> Delete</button>
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
