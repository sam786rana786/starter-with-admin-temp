@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="{{ !empty($adminData->profile_image) ? url($adminData->profile_image) : url('backend/images/small/img-2.jpg') }}"
                            alt="Card image cap" style="height: 500px">
                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $adminData->name }} </h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $adminData->email }} </h4>
                            <hr>
                            <h4 class="card-title">User Name : {{ $adminData->username }} </h4>
                            <hr>
                            <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">
                                Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
