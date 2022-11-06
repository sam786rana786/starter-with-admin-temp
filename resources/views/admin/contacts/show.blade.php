@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4 class="card-title">{{ $contact->name }}</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title">{{ $contact->mobile }}</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title">{{ $contact->email }}</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="card-text">{{ $contact->message }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $contact->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 text-end">
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('contacts.destroy', $contact->id) }}">
                                                Delete
                                            </button>
                                            <a href="{{ route('contacts.index') }}" class="btn btn-success">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
