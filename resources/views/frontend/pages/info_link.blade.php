@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->infoLink_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Results</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Info</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    @foreach ($results as $facility)
        <section class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="more-info-content">
                            <div class="row">
                                @if ($loop->iteration % 2 == 0)
                                    <div class="col-md-6">
                                        <div class="left-img" data-aos="fade-right">
                                            <embed src="{{ $facility->pdf }}" class="img-fluid" />
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 align-self-center">
                                    <div class="right-content" data-aos="fade-left">
                                        <a href="{{ $facility->pdf }}" target="_blank">
                                            <h2>{{ $facility->title }}</h2>
                                        </a>
                                        <p>
                                            {{ $facility->description }}
                                        </p>
                                    </div>
                                </div>
                                @if ($loop->iteration % 2 == 0)
                                @else
                                    <div class="col-md-6">
                                        <div class="left-img" data-aos="fade-right">
                                            <embed src="{{ $facility->pdf }}" class="img-fluid" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
