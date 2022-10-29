@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->alumni_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Alumni</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Alumni</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section class="container">
        <div class="col-sm-12">
            <div class="row mb-5 mt-3">
                <h2 class="text-center text-success"><strong>ALUMNI REGISTRATION FORM</strong></h2>
                <form action="{{ route('alumni_add') }}" method="POST">@csrf
                    <div class="form-group">
                        <div class="row mb-3 mt-5">
                            <label for="student_id" class="col-sm-2 col-form-label text-primary"><strong>Student ID<span
                                        class="text-danger">*</span></strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="student_id">
                                <span class="text-muted"> Please give your Admission Number issued from Vivekanand Public
                                    School
                                    Warisaliganj</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label text-primary"><strong>Email
                                    Address</strong></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                                <span class="text-muted"> Please give your complete Email ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label text-primary"><strong>Alumni
                                    Name</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                                <span class="text-muted">Please give your name.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="class" class="col-sm-2 col-form-label">Class</label>
                            <div class="col-sm-10">
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
                                <span class="text-muted">Please select Class at the time of leaving the school.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="section" class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="section">
                                    <option selected>Please select section</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Non-Medical">Non-Medical</option>
                                </select>
                                <span class="text-muted">Please select Section at the time of leaving the school.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="year_passing" class="col-sm-2 col-form-label">Year Of Passing</label>
                            <div class="col-sm-10">
                                @php
                                    $years = range(1900, strftime('%Y', time()));
                                @endphp
                                <select class="form-control" name="year_passing">
                                    <option selected>Select Year</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                                <span class="text-muted">Please select Year at the time of leaving the school.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="gender">
                                    <option selected>Please select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="text-muted">Please select your gender.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option selected>Please select status</option>
                                    <option value="Studying">Studying</option>
                                    <option value="Working">Working</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="text-muted">Please select your status.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="landline" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="landline" class="form-control" maxlength="18"
                                    value="91">
                                <span class="text-muted">Please enter your Contact Number(Country Code without +, area
                                    code, phone number maximum 18 characters).</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="mobile" class="form-control" maxlength="12"
                                    value="91">
                                <span class="text-muted">Please enter your Mobile Number Number(Country Code without +,
                                    mobile number maximum 12 characters).</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="organization" class="col-sm-2 col-form-label text-primary"><strong>Current
                                    Organisation</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="organization">
                                <span class="text-muted"> Please give your Current Organisation Name</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="location" class="col-sm-2 col-form-label text-primary"><strong>Current
                                    Location</strong></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="location" rows="1"></textarea>
                                <span class="text-muted"> Please give your Current Location/Address.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="qualification" class="col-sm-2 col-form-label"><strong>Highest
                                    Qualification</strong></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="qualification">
                                    <option selected>Please select Your Highest Qualification</option>
                                    <option value="Graduation Or Equivalent">Graduation Or Equivalent</option>
                                    <option value="Post-Graduate Or Equivalent">Post-Graduate Or Equivalent</option>
                                    <option value="Doctrate">Doctrate</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-muted"> Please select Your Highest Qualification.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="specialization" class="col-sm-2 col-form-label">Specialization/Major</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="specialization">
                                <span class="text-muted"> Please give your Specialization/Major Details.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="institute" class="col-sm-2 col-form-label">Institute</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="institute">
                                <span class="text-muted"> Please give your Institute Details where you have attained your
                                    highest qualification.</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
