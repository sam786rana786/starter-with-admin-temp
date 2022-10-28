@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <a href="{{ route('important.edit', 2) }}" class="btn btn-success btn-lg mb-2" style="width: 100%">Edit Important Images</a>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="card bg-dark">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->header_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->mandatory_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->facilities_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->admission_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->achievements_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->infoLink_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->gallery_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->tc_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->alumni_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <img class="card-img img-fluid w-100 h-100" src="{{ asset($imp->contact_image) }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-4">
                                <h1 class="text-white">{{ $imp->style }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
