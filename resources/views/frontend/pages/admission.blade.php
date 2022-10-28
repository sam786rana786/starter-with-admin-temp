@extends('frontend.frontend_master')
@section('styles')
    <style>
        html {
            background-color: #edf7ff;
        }

        .fee-structure {
            background-color: #edf7ff;
        }

        .card {
            border: none;
            background-color: #edf7ff;
        }

        .card,
        .card li,
        .card li span,
        .card ul,
        .card p,
        .card p span {
            background-color: #edf7ff !important;
        }

        .card .card-title {
            text-align: center;
            background-color: #0d6efd;
            padding: 2%;
            font-size: xxx-large;
            color: #fff;
            border-radius: 100px 100px 0px 0px;
        }

        .card .card-footer-title {
            text-align: center;
            background-color: #0d6efd;
            padding: 2%;
            font-size: xxx-large;
            color: #fff;
            border-radius: 0px 0px 100px 100px;
        }

        .card h3 span {
            border-radius: 51%;
            padding: 2%;
        }

        .card h3 {
            margin-bottom: 3rem !important;
            margin-top: 3rem !important;
        }

        /* .bord {
                                border: 1px solid black;
                            } */

        .buttons {
            padding: 5%;
            background-color: #fbc108 !important;
        }

        .imageFee {
            display: none;
            visibility: hidden;
        }

        table thead th {
            background-color: rgb(192, 62, 62);
        }

        @media(max-width: 1630px) {
            table tbody tr td {
                margin: 0;
                padding: 0 !important;
            }

            .bord {
                border: none;
            }

            .fee-structure {
                display: none;
                visibility: hidden;
            }

            .imageFee {
                visibility: visible;
                display: inline;
            }
        }
    </style>
@endsection

@section('content')
    @php
    $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->admission_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Admission</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Admission</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <!-------Buttons--------------->
    <section class="buttons">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-2">
                    <!-- Button trigger modal -->
                    <a href="{{ route('adm_frm') }}" target="_blank" class="btn btn-primary btn-lg w-100">
                        Apply Online
                    </a>
                </div>
                <div class="col-md-4 p-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-lg w-100" data-bs-toggle="modal"
                        data-bs-target="#admissionNotification">
                        Admission Notification
                    </button>
                </div>
                <div class="col-md-4 p-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info w-100 btn-lg" data-bs-toggle="modal" data-bs-target="#rules">
                        Rules and Regulations
                    </button>
                </div>
            </div>
        </div>

        <!-- Admission Notification Modal -->
        <div class="modal fade" id="admissionNotification" tabindex="-1" aria-labelledby="admissionNotificationLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="admissionNotificationLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rules and Regulations Modal -->
        <div class="modal fade" id="rules" tabindex="-1" aria-labelledby="rulesLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rulesLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------Fee Structure----------->
    <section class="imageFee">
        <div class="container-fluid" style="background-color: #edf7ff;">
            <img src="{{ asset('frontend/assets/img/fee-structure.png') }}" alt="Fee Structure" class="w-100 mt-5">
        </div>
    </section>
    <section class="fee-structure w-100">
        <div class="container-fluid">
            <div class="row">
                @php
                    $uni = App\Models\Uniform::findOrFail(1);
                @endphp
                <div class="col-md-12 mt-5 w-100">
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Uniforms</h4>
                                <table class="table table-bordered table-responsive table-stripped w-100">
                                    <thead>
                                        <tr>
                                            <th>Days</th>
                                            <th>Nursery to I</th>
                                            <th>II to VII</th>
                                            <th>IX to XII</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $dresses = App\Models\Dress::all();
                                        @endphp
                                        @foreach ($dresses as $dress)
                                            <tr>
                                                <td>{!! $dress->days !!}</td>
                                                <td>{!! $dress->nur !!}</td>
                                                <td>{!! $dress->second !!}</td>
                                                <td>{!! $dress->ninth !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="card-footer-title">Uniforms</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Admission</h4>
                                {!! $uni->admission !!}
                                <h4 class="card-footer-title">Admission</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Admission Criteria for Admission</h4>
                                <table class="table table-responsive table-bordered table-stripped">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Age Criteria</th>
                                            <th>Age (Between)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $serial = 1;
                                            $age_criterias = App\Models\AgeCriteria::all();
                                        @endphp
                                        @foreach ($age_criterias as $age_criteria)
                                            <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{{ $age_criteria->age_criteria }}</td>
                                                <td>{{ $age_criteria->age }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="card-footer-title">Admission Criteria for Admission</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Fee Chart {{ $uni->year }}</h4>
                                <table class="table table-responsive table-bordered table-stripped">
                                    <thead>
                                        <tr>
                                            <th class="py-5">S.N</th>
                                            <th class="p-5 m-5">Fee Break-Up</th>
                                            <th class="p-5 m-5">Type</th>
                                            <th class="p-5 m-5">Applicable</th>
                                            <th class="p-5 m-5">Payment Pattern</th>
                                            <th class="p-5 m-5">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $serial = 1;
                                            $fee_charts = App\Models\FeeChart::all();
                                        @endphp
                                        @foreach ($fee_charts as $fee_chart)
                                            <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{!! $fee_chart->fee_breakup !!}</td>
                                                <td>{{ $fee_chart->type }}</td>
                                                <td>{{ $fee_chart->applicable }}</td>
                                                <td>{!! $fee_chart->payment_pattern !!}</td>
                                                <td>{!! $fee_chart->amount !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="card-footer-title">Fee Chart {{ $uni->year }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Fee Submission</h4>
                                {!! $uni->fee_submission !!}
                                <h4 class="card-footer-title">Fee Submission</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Admission Fee</h4>
                                <table class="table table-bordered table-responsive table-stripped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Classes</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $serial = 1;
                                            $admission_fees = App\Models\AdmissionFee::all();
                                        @endphp
                                        @foreach ($admission_fees as $fee)
                                            <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{{ $fee->classes }}</td>
                                                <td>{!! $fee->amount !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="card-footer-title">Admission Fee</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="bord">
                                <h4 class="card-title">Important</h4>
                                <div class="row">
                                    <div class="col-sm-2">&nbsp;<strong class="ml-2">Important:</strong></div>
                                    <div class="col-sm-10">{!! $uni->important_notice !!}</div>
                                </div>
                                <h4 class="card-footer-title">Important</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center" style="font-size: 22px; font-weight:700;">
                            {!! $uni->note !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
