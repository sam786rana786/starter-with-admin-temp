@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Highlight
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('school.update', $school->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="student_enrolled" class="col-sm-2 col-form-label">Students Enrolled</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="student_enrolled"
                                            name="student_enrolled" value="{{ $school->student_enrolled }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="awards_won" class="col-sm-2 col-form-label">Awards Won</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="awards_won" name="awards_won"
                                            value="{{ $school->awards_won }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="years_completed" class="col-sm-2 col-form-label">Total Years
                                        Completed</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="years_completed"
                                            name="years_completed" value="{{ $school->years_completed }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="total_teachers" class="col-sm-2 col-form-label">Total Teachers</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="total_teachers" name="total_teachers"
                                            value="{{ $school->total_teachers }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
