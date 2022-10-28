@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Online Applications
                            </h4>
                            <div class="row">
                                @foreach ($admFrms as $admFrm)
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <img src="{{ asset($admFrm->stu_photo) }}" alt="{{ $admFrm->stu_fname }}"
                                                class="card-img-top" height="343">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $admFrm->stu_fname }} {{ $admFrm->stu_midname }}
                                                    {{ $admFrm->stu_lastname }}</h5>
                                                <p class="card-text">
                                                    Admission For Class {{ $admFrm->student_class }} and the Stream is
                                                    {{ $admFrm->stream }} and Gender of the student is {{ $admFrm->gender }}
                                                </p>
                                            </div>
                                            <div class="card-footer text-center">
                                                <form action="{{ route('approveApplicant', $admFrm->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="is_approved"
                                                            value="1" {{ $admFrm->is_approved == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Approve
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-2">
                                                        <input class="form-check-input" type="radio" name="is_approved"
                                                            value="0"
                                                            {{ $admFrm->is_approved == 0 ? 'checked' : '' }}>
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
