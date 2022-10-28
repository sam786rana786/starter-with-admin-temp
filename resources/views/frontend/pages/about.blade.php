@extends('frontend.frontend_master')

@section('content')
    <!------Banner Image------------->
    <section class="pg-h" style="background-image: url({{ $about->about_image }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">About Vivekanand Public School</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>About us</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <!-------About School Section---------->
    <section class="section about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-7 pr-md-5" data-aos="fade-left">
                    {!! $about->about_school !!}
                </div>
                <div class="col-md-12 col-lg-5" data-aos="fade-right">
                    <img src="{{ asset($about->about_image) }}" class="w-100" alt="About image">
                </div>
            </div>
        </div>
    </section>
    <!--------Principal Section-------->
    @php
    $principal = App\Models\Vandm::findOrFail(3);
    @endphp
    <section class="section principal-section" data-aos="fade-down"
        style="background-image: url({{ asset('frontend/assets/img/pexels-pixabay-372748.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-right">
                    <img src="{{ $principal->cover_image }}" class="w-100" alt="Principal image">
                </div>
                <div class="col-12 col-md-8 pl-lg-5">
                    <h2 class="section-heading text-light">{{ $principal->title }}</h2>

                    <h5 class="quote">{!! $principal->description !!}</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="teaching mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-left">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h54 text-center">Teaching Staff</h1>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $serial = '1'; ?>
                                    @foreach ($employees as $key => $employee)
                                        @if ($employee->is_teacher == 1)
                                            <tr>
                                                <td class="text-center">{{ $serial++ }}</td>
                                                <td class="text-center ">{{ $employee->name }}</td>
                                                <td class="text-center ">{{ $employee->designation }}</td>
                                                <td class="text-center ">{{ $employee->subject }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-right">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center h54">Non Teaching Staff</h1>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $serial = '1'; ?>
                                    @foreach ($employees as $key => $employee)
                                        @if ($employee->is_teacher == 0)
                                            <tr>
                                                <td class="text-center">{{ $serial++ }}</td>
                                                <td class="text-center">{{ $employee->name }}</td>
                                                <td class="text-center">{{ $employee->designation }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="about about-one padding-120" style="background-color: #f5f8fa;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teaching Staff</h5>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $serial = '1'; ?>
                                    @foreach ($employees as $key => $employee)
                                        @if ($employee->is_teacher == 1)
                                            <tr>
                                                <td class="text-center">{{ $serial++ }}</td>
                                                <td class="text-center ">{{ $employee->name }}</td>
                                                <td class="text-center ">{{ $employee->designation }}</td>
                                                <td class="text-center ">{{ $employee->subject }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h5 class="card-title">Non Teaching Staff</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">S.No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial = '1'; ?>
                            @foreach ($employees as $key => $employee)
                                @if ($employee->is_teacher == 0)
                                    <tr>
                                        <td class="text-center">{{ $serial++ }}</td>
                                        <td class="text-center">{{ $employee->name }}</td>
                                        <td class="text-center">{{ $employee->designation }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
