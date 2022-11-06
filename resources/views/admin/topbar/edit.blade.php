@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add TopBar Section</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @php
                            $time = explode('-', $topBar->opening, 2);
                            $from = date('H:i', strtotime($time[0]));
                            $to = date('H:i', strtotime($time[1]));
                        @endphp
                        <form action="{{ route('topbar.update', ['topbar' => $topBar->id]) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="opening" class="col-sm-2 col-form-label">Opening Time</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="time" name="from" value="{{ $from }}">
                                </div>
                                <div class="col-sm-5">
                                    <input type="time" name="to" value="{{ $to }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="phone" value="{{ $topBar->phone }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" value="{{ $topBar->address }}"
                                        class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                Update topBar Section
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
