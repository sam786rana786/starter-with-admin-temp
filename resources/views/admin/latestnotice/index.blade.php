@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Short Title</th>
                                        <th>Description</th>
                                        <th>PDF</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $latestNotice->id }}</td>
                                        <td>{{ $latestNotice->title }}</td>
                                        <td>{{ $latestNotice->short_title }}</td>
                                        <td>
                                            {!! Illuminate\Support\Str::limit($latestNotice->description, 10, '...') !!}
                                        </td>
                                        <td><embed src="{{ $latestNotice->cover_image }}" class="rounded avatar-md" />
                                        </td>
                                        <td>
                                            <a href="{{ route('latest_notice.edit', $latestNotice->id) }}"
                                                class="btn btn-primary"><i class="dripicons-document-edit"></i>
                                                Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
