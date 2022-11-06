@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->tc_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Transfer Certificates</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Transfer Certificates</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section class="container">
        <div class="col-sm-12">
            <div class="row mb-5 mt-3">
                <h2 class="text-center">Transfer Certificate Retrival Form</h2>
                <form action="{{ route('tc-s') }}" method="POST">@csrf
                    <div class="row mb-3 mt-5">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select class="form-control" name="class">
                                    <option selected>Please select Class</option>
                                    <option value="NUR">NUR</option>
                                    <option value="UKG">UKG</option>
                                    <option value="I">First</option>
                                    <option value="II">Second</option>
                                    <option value="III">Third</option>
                                    <option value="IV">Fourth</option>
                                    <option value="V">Fifth</option>
                                    <option value="VI">Sixth</option>
                                    <option value="VII">Seventh</option>
                                    <option value="VIII">Eighth</option>
                                    <option value="IX">Ninth</option>
                                    <option value="X">Tenth</option>
                                    <option value="XI">Plus One</option>
                                    <option value="XII">Plus Two</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3 mb-3">
                            <div class="form-group">
                                <select class="form-control" name="section">
                                    <option selected>Please select section</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Non-Medical">Non-Medical</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="admission_no"
                                    placeholder="Please Enter Admission Number here">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @if (isset($tc))
            <div class="col-sm-12 mb-3">
                <embed src="{{ asset($tc->pdf) }}" type="application/pdf" width="100%" height="500"></embed>
            </div>
        @endif
    </section>
@endsection
