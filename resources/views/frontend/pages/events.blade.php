@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->infoLink_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Events</h3>
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
                        alt="{{ $event->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ url($event->cover_image) }}" target="_blank">
                            <h3 class="card-title">{{ $event->name }}</h3>
                        </a>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ $event->description }}</p>
                        <p class="card-text">
                            <small class="text-muted">
                                Last updated {{ \Carbon\Carbon::parse($event->created_at)->diffForHumans() }}
                            </small><br>
                            <small class="text-muted">
                                Event Will Start at {{ \Carbon\Carbon::parse($event->event_date)->diffForHumans() }}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
