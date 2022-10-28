@extends('frontend.frontend_master')

@section('content')
    @php
    $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->infoLink_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Info Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Info</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
@endsection
