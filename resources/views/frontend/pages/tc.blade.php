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
@endsection
