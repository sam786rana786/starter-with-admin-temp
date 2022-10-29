@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="{{ asset($achievement->photo) }}" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $achievement->name }}</h4>
                                    <h5 class="card-title">{{ $achievement->field }}</h5>
                                    <p class="card-text">Achieved {{ $achievement->field }} in year {{ $achievement->year }}
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $achievement->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-danger deleteEmployee"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ route('achievement.destroy', $achievement->id) }}">
                                                Delete
                                            </button>
                                            <a href="{{ route('achievement.index') }}" class="btn btn-success">Back</a>
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
