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
                                        <h4>Achiever's List</h4>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex">
                                            <div class="ms-1">
                                                <a href="{{ route('achievement.create') }}" class="btn btn-info"> <i
                                                        class="fas fa-plus"></i> Add
                                                    an Achiever</a>
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
                                    <th>Achiever Image</th>
                                    <th>Name</th>
                                    <th>Field Of Achievement</th>
                                    <th>Year</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($achivements as $key => $achievement)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($achievement->photo) }}" alt="Notice Image"
                                                class="avatar-sm"></td>
                                        <td>
                                            <a
                                                href="{{ route('achievement.show', $achievement->id) }}">{{ $achievement->name }}</a>
                                        </td>
                                        <td>{{ $achievement->field }}</td>
                                        <td>{{ $achievement->year }}</td>
                                        <td colspan="2">
                                            <a href="{{ route('achievement.edit', $achievement->id) }}"
                                                class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                Edit</a>
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('achievement.destroy', $achievement->id) }}">
                                                <i class="fas fa-trash-alt"></i> Delete
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
