@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Alumni List
                            </h4>
                            <div class="row">
                                @foreach ($alumnis as $alumni)
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h2 class="card-title"> Alumni Name : {{ $alumni->name }}</h2>
                                                <h4 class="card-title">Student ID : {{ $alumni->student_id }}</h4>
                                                <h4 class="card-title">Alumni Email : {{ $alumni->email }}</h4>
                                                <h4 class="card-title">Class : {{ $alumni->class }}</h4>
                                                <h4 class="card-title">Section : {{ $alumni->section }}</h4>
                                                <h4 class="card-title">Passing Year : {{ $alumni->year_passing }}</h4>
                                                <h4 class="card-title">Gender : {{ $alumni->gender }}</h4>
                                                <h4 class="card-title">Status : {{ $alumni->status }}</h4>
                                                <h4 class="card-title">Landline Number : {{ $alumni->landline }}</h4>
                                                <h4 class="card-title">Mobile Number : {{ $alumni->mobile }}</h4>
                                                <h4 class="card-title">Organisation : {{ $alumni->organization }}</h4>
                                                <h4 class="card-title">Location : {{ $alumni->location }}</h4>
                                                <h4 class="card-title">Qualification : {{ $alumni->qualification }}</h4>
                                                <h4 class="card-title">Specialization In: {{ $alumni->specialization }}
                                                </h4>
                                                <h4 class="card-title">Institute : {{ $alumni->institute }}</h4>
                                            </div>
                                            <div class="card-footer text-center">
                                                <form action="{{ route('alumni.update', $alumni->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="is_approved"
                                                            value="1"
                                                            {{ $alumni->is_approved == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Approve
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-2">
                                                        <input class="form-check-input" type="radio" name="is_approved"
                                                            value="0"
                                                            {{ $alumni->is_approved == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Dispprove
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
