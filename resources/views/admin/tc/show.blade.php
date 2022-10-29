@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <embed class="card-img img-fluid" src="{{ asset($transferCertificate->pdf) }}" width="100%">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $transferCertificate->admission_no }}</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="card-text">Class : {{ $transferCertificate->class }}</p>
                                            <p class="card-text">Section : {{ $transferCertificate->section }}</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $transferCertificate->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('tc.destroy', $transferCertificate->id) }}"><i
                                                    class="fas fa-trash-alt"></i> Delete this Transfer Certificate</button>
                                            <a href="{{ route('tc.index') }}" class="btn btn-primary">Back</a>
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
