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
                                        <h4>Messages List</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key => $contact)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a
                                                href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a>
                                        </td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('contacts.destroy', $contact->id) }}">
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
