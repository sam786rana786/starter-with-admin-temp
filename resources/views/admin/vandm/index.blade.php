@extends('admin.admin_master')

@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Vission and Mission Section</h4>

                        </div>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Cover_image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vandm as $key => $v)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $v->title }}</td>
                                        <td>{!! $v->description !!}</td>
                                        <td><img src="{{ asset($v->cover_image) }}" alt="Cover Image" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="{{ route('vandm.edit', $v->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pencil-alt"></i>
                                                Edit</a>
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
