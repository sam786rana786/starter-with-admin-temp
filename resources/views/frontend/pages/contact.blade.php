@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->contact_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Contact Us</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <!-- Contact Start here -->
    <section class="main-contact-section py-5">
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card card-body border-0 shadow">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card py-5 card-body card-contact bg-theme">
                                    <h1>Contact Us</h1>
                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="flex-shrink-0 icon-part mr-3">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mt-0 text-white">WARISALIGANJ (NAWADA) BIHAR-805130</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="flex-shrink-0 icon-part mr-3">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mt-0 text-white">+917783835713</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="flex-shrink-0 icon-part mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mt-0 text-white"><a href="mailto: viveka_wrs2000@rediffmail.com"
                                                    class="anchor" target="_blank">viveka_wrs2000@rediffmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4 align-items-center">
                                        <div class="flex-shrink-0 icon-part mr-3">
                                            <i class="fa-solid fa-window-maximize"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mt-0 text-white"><a href="https://vpswarisaliganj.in" class="anchor"
                                                    target="_blank">https://vpswarisaliganj.in</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form action="{{ route('storeMessage') }}" method="POST">@csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') 'is-invalid' @enderror"
                                            id="name" name="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile">
                                        @if ($errors->has('mobile'))
                                            <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-submit" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <iframe class="border-0 shadow"
                        src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d35409.66395728725!2d85.65828748294842!3d24.99927169422195!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f257a4af2fc4bf%3A0xdb203fc6dda995c5!2sVivekanand%20Public%20School%2Cwarisaliganj!5e0!3m2!1sen!2sin!4v1660492386311!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="position-relative bg-secondary pt-5">
        <div class="row mb-5 mr-5">
            <div class="col-sm-4 col-md-5 pb-4 pb-sm-5 mb-2 mb-sm-0">
                <div class="pe-lg-4 pe-xl-0">
                    <h1 class="pb-3 pb-md-4 mb-lg-5">Contact Us</h1>
                    <div class="d-flex align-items-start pb-3 mb-sm-1 mb-md-3">
                        <div class="bg-light text-primary rounded-circle flex-shrink-0 fs-3 lh-1 p-3">
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div class="ps-3 ps-sm-4">
                            <h2 class="h4 pb-1 mb-2">Email us</h2>
                            <p class="mb-2">Please feel free to drop us a line. We will respond as soon as possible.</p>
                            <div class="btn btn-link btn-lg px-0">
                                Leave a message
                                <i class="bx bx-right-arrow-alt lead ms-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="bg-light text-primary rounded-circle flex-shrink-0 fs-3 lh-1 p-3">
                            <i class="bx bx-group"></i>
                        </div>
                        <div class="ps-3 ps-sm-4">
                            <h2 class="h4 pb-1 mb-2">Careers</h2>
                            <p class="mb-2">Sit ac ipsum leo lorem magna nunc mattis maecenas non vestibulum.</p>
                            <div class="btn btn-link btn-lg px-0">
                                Send an application
                                <i class="bx bx-right-arrow-alt lead ms-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact form -->
            <div class="col-sm-6 col-md-7 offset-sm-2">
                <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
                    <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block">
                    </div>
                    <div class="card-body position-relative zindex-2">
                        <h2 class="card-title pb-3 mb-4">Get Online Consultation</h2>
                        <form class="row g-4 needs-validation" novalidate>
                            <div class="col-12">
                                <label for="fn" class="form-label fs-base">Full name</label>
                                <input type="text" class="form-control form-control-lg" id="fn" required>
                                <div class="invalid-feedback">Please enter your full name!</div>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label fs-base">Email address</label>
                                <input type="email" class="form-control form-control-lg" id="email" required>
                                <div class="invalid-feedback">Please provid a valid email address!</div>
                            </div>
                            <div class="col-12">
                                <label for="specialist" class="form-label fs-base">Specialist</label>
                                <select class="form-select form-select-lg" id="specialist" required>
                                    <option value="" selected disabled>Choose a specialist</option>
                                    <option value="Therapist">Therapist</option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Gynecologist">Gynecologist</option>
                                    <option value="Surgeon">Surgeon</option>
                                </select>
                                <div class="invalid-feedback">Choose a specialist from the list!</div>
                            </div>
                            <div class="col-sm-6">
                                <label for="date" class="form-label fs-base">Date</label>
                                <input type="text" class="form-control form-control-lg" id="date"
                                    data-format='{"date": true, "datePattern": ["m", "d"]}' placeholder="mm/dd" required>
                                <div class="invalid-feedback">Enter a date!</div>
                            </div>
                            <div class="col-sm-6">
                                <label for="time" class="form-label fs-base">Time</label>
                                <input type="text" class="form-control form-control-lg" id="time"
                                    data-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm" required>
                                <div class="invalid-feedback">Enter a time!</div>
                            </div>
                            <div class="col-12 pt-2 pt-sm-3">
                                <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Make an
                                    appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d35409.66395728725!2d85.65828748294842!3d24.99927169422195!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f257a4af2fc4bf%3A0xdb203fc6dda995c5!2sVivekanand%20Public%20School%2Cwarisaliganj!5e0!3m2!1sen!2sin!4v1660492386311!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> --}}
@endsection
