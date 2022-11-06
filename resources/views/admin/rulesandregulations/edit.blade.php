@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Rules and Regulations</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('rulesregulations.update', $rule->id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="rules" class="col-sm-2 col-form-label">About Description</label>
                                <div class="col-sm-10">
                                    <textarea class="elm1" name="rules">{{ $rule->rules }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                Update Rules and Regulations
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
