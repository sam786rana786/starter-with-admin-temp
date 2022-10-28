@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <a href="{{ route('uniform.edit', $uni->id) }}" class="btn btn-primary btn-lg w-100">
                        <i class="fas fa-pencil-alt"></i>
                        Edit This Section
                    </a>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-10">
                                    <h4 class="card-title">Uniforms</h4>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('createDress') }}" class="btn btn-primary">Add Dress Data</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive table-stripped">
                                <thead>
                                    <tr>
                                        <th>Days</th>
                                        <th>Nursery to I</th>
                                        <th>II to VII</th>
                                        <th>IX to XII</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dresses as $dress)
                                        <tr>
                                            <td>{!! $dress->days !!}</td>
                                            <td>{!! $dress->nur !!}</td>
                                            <td>{!! $dress->second !!}</td>
                                            <td>{!! $dress->ninth !!}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('editDress', $dress->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="ri-edit-box-fill"></i>
                                                    Edit
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('deleteDress', $dress->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Admission</h4>
                            {!! $uni->admission !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-9">
                                    <h4 class="card-title">Admission Criteria for Admission</h4>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('createAgeCriteria') }}" class="btn btn-primary">Add Age Criteria
                                        Data</a>
                                </div>
                            </div>
                            <table class="table table-responsive table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Age Criteria</th>
                                        <th>Age (Between)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($age_criterias as $age_criteria)
                                        <tr>
                                            <td>{{ $serial++ }}</td>
                                            <td>{{ $age_criteria->age_criteria }}</td>
                                            <td>{{ $age_criteria->age }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('editAgeCriteria', $age_criteria->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="ri-edit-box-fill"></i>
                                                    Edit
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('deleteAgeCriteria', $age_criteria->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title uppercase">Fee Submission</h4>
                            {!! $uni->fee_submission !!}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <h4 class="card-title uppercase">Admission Fee</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('createAdmissionFees') }}" class="btn btn-primary btn-sm">Add
                                        Admission Fees
                                        Data</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive table-stripped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Classes</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($admission_fees as $fee)
                                        <tr>
                                            <td>{{ $serial++ }}</td>
                                            <td>{{ $fee->classes }}</td>
                                            <td>{!! $fee->amount !!}</td>
                                            <td>
                                                <a href="{{ route('editAdmissionFees', $fee->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="ri-edit-box-fill"></i>
                                                    Edit
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('deleteAdmissionFees', $fee->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-9">
                                    <h4 class="card-title">Fee Chart {{ $uni->year }}</h4>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('createFeeChart') }}" class="btn btn-primary">Add Fee Chart Data</a>
                                </div>
                            </div>
                            <table class="table table-responsive table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Fee Break-Up</th>
                                        <th>Type</th>
                                        <th>Applicable</th>
                                        <th>Payment Pattern</th>
                                        <th class="p-5 m-5">Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($fee_charts as $fee_chart)
                                        <tr>
                                            <td>{{ $serial++ }}</td>
                                            <td>{!! $fee_chart->fee_breakup !!}</td>
                                            <td class="mt-5 pt-5">{{ $fee_chart->type }}</td>
                                            <td class="mt-5 pt-5">{{ $fee_chart->applicable }}</td>
                                            <td class="mt-5 pt-5">{!! $fee_chart->payment_pattern !!}</td>
                                            <td>{!! $fee_chart->amount !!}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('editFeeChart', $fee_chart->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="ri-edit-box-fill"></i>
                                                    Edit
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('deleteFeeChart', $fee_chart->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title uppercase">Important Notice</h4>
                            {!! $uni->important_notice !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {!! $uni->note !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
