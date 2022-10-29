@extends('frontend.frontend_master')

@section('content')
    @php
    $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->achievements_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Achievements</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Achievements</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section class="container">
        <div class="col-sm-12">
            <div class="row">
                @foreach ($achievements as $achievement)
                <div class="col-sm-4">
                    <div class="card mt-4" data-aos="fade-right" style="height: 646px">
                        <img src="{{ $achievement->photo }}" class="card-img-top" alt="{{ $achievement->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $achievement->name }}</h5>
                            <p class="card-text">Achieved in the field of {{ $achievement->field }} in year {{ $achievement->year }}</p>
                          </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
