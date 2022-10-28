@extends('frontend.frontend_master')

@section('content')
    @php
    $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->contact_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Contact</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <!-- Contact Start here -->
    <section class="contact contact-page">
        <div class="contact-details padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul>
                            <li class="contact-item">
                                <span class="icon flaticon-signs"></span>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>218 Sahera Tropical Center Room#7 <br> New Elephant Road 1205</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-smartphone"></span>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>01923-970212, 01776-502993 <br> +2154897369</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-message"></span>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>hello@labartisan <br> hello@codexcoder.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <form class="contact-form">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="email" name="email" placeholder="Your Email" class="contact-input">
                            <textarea rows="5" class="contact-input">Your Messages</textarea>
                            <input type="submit" name="submit" value="Send Message" class="contact-button">
                        </form>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- contact-details -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d35409.66395728725!2d85.65828748294842!3d24.99927169422195!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f257a4af2fc4bf%3A0xdb203fc6dda995c5!2sVivekanand%20Public%20School%2Cwarisaliganj!5e0!3m2!1sen!2sin!4v1660492386311!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
