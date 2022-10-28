@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($footer as $f)
                    <div class="col-md-12 col-xl-12">
                        <div class="card bg-dark">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4">
                                    <img class="card-img img-fluid w-100 h-100" src="{{ asset($f->logo) }}" alt="Card image">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $f->website }}</h5>
                                        <p class="card-text">{{ $f->description }}</p>
                                        <p class="card-text">{{ $f->address }}</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text"><small class="text-muted">{{ $f->email }}</small></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text"><small class="text-muted">{{ $f->contact }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div>
                                        <a href="{{ route('footer.edit', $f->id) }}" class="btn btn-primary w-100 h-100">Edit Footer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
