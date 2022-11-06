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
                                        <h4>Results</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('result.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    Result</a>
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
                                    <th>Result PDF</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Active (Yes/No)</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $key => $result)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><embed src="{{ asset($result->pdf) }}"class="avatar-sm"></td>
                                        <td>
                                            <a href="{{ route('result.show', $result->id) }}">{{ $result->title }}</a>
                                        </td>
                                        <td>{{ $result->description }}</td>
                                        <td>{{ $result->is_active == 1 ? 'Yes' : 'No' }}</td>
                                        <td colspan="2">
                                            <a href="{{ route('result.edit', $result->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('result.destroy', $result->id) }}">
                                                Delete
                                            </button>
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
