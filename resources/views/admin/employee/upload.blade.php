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
                            <form action="{{ route('import.content') }}" method="POST" enctype="multipart/form-data">@csrf
                                <div class="row mb-3">
                                    <label for="upload_file" class="col-sm-2 col-form-label">CSV File</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="upload_file">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Upload CSV File
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
