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
                <form action="{{ route('alumni_add') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <div class="row mb-3 mt-5">
                            <label for="student_id" class="col-sm-2 col-form-label text-primary"><strong>Student ID<span
                                        class="text-danger">*</span></strong></label>
                            <div class="col-sm-10">
                                <input type="text"
                                    class="form-control @error('student_id')
                                    is-invalid @enderror"
                                    name="student_id">
                                @if ($errors->has('student_id'))
                                    <span class="text-danger">{{ $errors->first('student_id') }}</span>
                                @else
                                    <span class="text-muted"> Please give your Admission Number issued from Vivekanand
                                        Public SchoolWarisaliganj
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label text-primary"><strong>Email
                                    Address</strong></label>
                            <div class="col-sm-10">
                                <input type="email"
                                    class="form-control @error('email')
                                is-invalid @enderror"
                                    name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @else
                                    <span class="text-muted"> Please give your complete Email ID</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label text-primary"><strong>Alumni
                                    Name</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name')
                                is-invalid @enderror" name="name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @else
                                <span class="text-muted">Please give your name.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="class" class="col-sm-2 col-form-label">Class</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('class')
                                is-invalid @enderror" name="class">
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
                                @if ($errors->has('class'))
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                                @else
                                <span class="text-muted">Please select Class at the time of leaving the school.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="section" class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('section')
                                is-invalid @enderror" name="section">
                                    <option selected>Please select section</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Non-Medical">Non-Medical</option>
                                </select>
                                @if ($errors->has('section'))
                                <span class="text-danger">{{ $errors->first('section') }}</span>
                                @else
                                <span class="text-muted">Please select Section at the time of leaving the school.</span>
                                @endif
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
                                <select class="form-control @error('year_passing')
                                is-invalid @enderror" name="year_passing">
                                    <option selected>Select Year</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('year_passing'))
                                <span class="text-danger">{{ $errors->first('year_passing') }}</span>
                                @else
                                <span class="text-muted">Please select Year at the time of leaving the school.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('gender')
                                is-invalid @enderror" name="gender">
                                    <option selected>Please select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @else
                                <span class="text-muted">Please select your gender.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('status')
                                is-invalid @enderror" name="status">
                                    <option selected>Please select status</option>
                                    <option value="Studying">Studying</option>
                                    <option value="Working">Working</option>
                                    <option value="Other">Other</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @else
                                <span class="text-muted">Please select your status.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="landline" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="landline" class="form-control @error('landline')
                                is-invalid @enderror" maxlength="18"
                                    value="91">
                                @if ($errors->has('landline'))
                                <span class="text-danger">{{ $errors->first('landline') }}</span>
                                @else
                                    <span class="text-muted">Please enter your Contact Number(Country Code without +, area
                                        @endif
                                    code, phone number maximum 18 characters).</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="mobile" class="form-control @error('mobile')
                                is-invalid @enderror" maxlength="12"
                                    value="91">
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @else
                                    <span class="text-muted">Please enter your Mobile Number Number(Country Code without +,
                                        mobile number maximum 12 characters).</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="organization" class="col-sm-2 col-form-label text-primary"><strong>Current
                                    Organisation</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('organization')
                                is-invalid @enderror" name="organization">
                                @if ($errors->has('organization'))
                                <span class="text-danger">{{ $errors->first('organization') }}</span>
                                @else
                                <span class="text-muted"> Please give your Current Organisation Name</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="location" class="col-sm-2 col-form-label text-primary"><strong>Current
                                    Location</strong></label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('location')
                                is-invalid @enderror" name="location" rows="1"></textarea>
                                @if ($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                @else
                                <span class="text-muted"> Please give your Current Location/Address.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="qualification" class="col-sm-2 col-form-label"><strong>Highest
                                    Qualification</strong></label>
                            <div class="col-sm-10">
                                <select class="form-control @error('qualification')
                                is-invalid @enderror" name="qualification">
                                    <option selected>Please select Your Highest Qualification</option>
                                    <option value="Graduation Or Equivalent">Graduation Or Equivalent</option>
                                    <option value="Post-Graduate Or Equivalent">Post-Graduate Or Equivalent</option>
                                    <option value="Doctrate">Doctrate</option>
                                    <option value="Others">Others</option>
                                </select>
                                @if ($errors->has('qualification'))
                                <span class="text-danger">{{ $errors->first('qualification') }}</span>
                                @else
                                <span class="text-muted"> Please select Your Highest Qualification.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="specialization" class="col-sm-2 col-form-label">Specialization/Major</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('specialization')
                                is-invalid @enderror" name="specialization">
                                @if ($errors->has('specialization'))
                                <span class="text-danger">{{ $errors->first('specialization') }}</span>
                                @else
                                <span class="text-muted"> Please give your Specialization/Major Details.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="institute" class="col-sm-2 col-form-label">Institute</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('institute')
                                is-invalid @enderror" name="institute">
                                @if ($errors->has('institute'))
                                <span class="text-danger">{{ $errors->first('institute') }}</span>
                                @else
                                <span class="text-muted"> Please give your Institute Details where you have attained your
                                    highest qualification.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="photo" class="col-sm-2 col-form-label">Your Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('photo')
                                is-invalid @enderror" name="photo">
                                @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                                @else
                                <span class="text-muted"> Please provide your recent photo for our records.</span>
                                @endif
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
