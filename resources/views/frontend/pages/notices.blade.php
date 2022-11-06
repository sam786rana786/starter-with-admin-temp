@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->infoLink_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Notices</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Info</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section class="container">
        <div class="card mt-5 mb-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('backend/images/Picture1.png') }}" class="img-fluid rounded-start"
                        alt="{{ $notice->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ url($notice->cover_image) }}" target="_blank">
                            <h3 class="card-title">{{ $notice->title }}</h3>
                        </a>
                        <h5 class="card-title">{{ $notice->short_title }}</h5>
                        <p class="card-text">{{ $notice->description }}</p>
                        <p class="card-text"><small class="text-muted">Last updated
                                {{ \Carbon\Carbon::parse($notice->created_at)->diffForHumans() }} ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
