@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Event
                            </h4>
                            @include('admin.employee.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
