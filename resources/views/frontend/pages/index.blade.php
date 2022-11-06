@extends('frontend.frontend_master')

@section('content')
    <!--------Hero Section----------->
    <section class="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset($banner->banner_image) }}" class="d-block w-100" alt="{{ $banner->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!------Latest Notice Section--------->
    <section class="latest">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @php
                        $latestNotice = App\Models\LatestNotice::findOrFail(1);
                    @endphp
                    <marquee direction="left" loop="true" onmouseover="this.stop();" onmouseout="this.start();">
                        <h4>
                            <a href="{{ route('latest_notice.show', $latestNotice->id) }}" class="text-white">{{ $latestNotice->title }}</a>
                        </h4>
                    </marquee>
                </div>
            </div>
        </div>
    </section>

    <!------Facilities Section--------->
    <section class="facility p-5 mt-5" data-aos="zoom-out-up">
        <div class="container">
            <div class="row">
                @foreach ($highlights as $highlight)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="facility-item">
                            <span class="icon">
                                <i class="{{ $highlight->card_image }}"></i>
                            </span>
                            <h4>{{ $highlight->title }}</h4>
                            <p>{{ $highlight->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!------About Section--------->
    <section class="section about-section">
        <div class="container-fluid">
            <div class="row">
                @php
                    $welcome = App\Models\Vandm::findOrFail(2);
                @endphp
                <div class="col-md-12 col-lg-7 pr-md-5" data-aos="fade-left">
                    <h2 class="section-heading">Welcome ! <span>{{ $welcome->title }}</span></h2>
                    <p class="mb-sm-3 mb-md-5">{{ $welcome->description }}</p>
                    <a href="{{ route('home.about') }}" class="common-btn">Know More</a>
                </div>
                <div class="col-md-12 col-lg-5" data-aos="fade-right">
                    <img src="{{ asset($welcome->cover_image) }}" class="w-100" alt="About image">
                </div>
            </div>
        </div>
    </section>

    <!------Vision And Mission Section--------->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            @php
                                $vm = App\Models\Vandm::findOrFail(1);
                            @endphp
                            <div class="col-md-6">
                                <div class="left-img" data-aos="fade-right">
                                    <img src="{{ $vm->cover_image }}" class="img-fluid" alt="Building Image">
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="right-content" data-aos="fade-left">
                                    <span>{{ $vm->title }}</span>
                                    <h2>Vision and <em class="cap-color">Mission</em></h2>
                                    <p>
                                        {{ $vm->description }}
                                    </p>
                                    <a href="{{ route('home.about') }}"><i class="fa-solid fa-arrow-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------Principal Section-------->
    @php
        $principal = App\Models\Vandm::findOrFail(3);
    @endphp
    <section class="section principal-section" data-aos="fade-down"
        style="background-image: url({{ asset('frontend/assets/img/pexels-pixabay-372748.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-right">
                    <img src="{{ $principal->cover_image }}" class="w-100" alt="Principal image">
                </div>
                <div class="col-12 col-md-8 pl-lg-5">
                    <h2 class="section-heading text-light">{{ $principal->title }}</h2>

                    <h5 class="quote">{!! $principal->description !!}</h5>
                </div>
            </div>
        </div>
    </section>

    <!------Upcoming Events Section--------->
    <section class="events" data-aos="zoom-out"
        style="background-image: url({{ asset('frontend/assets/img/pexels-isaac-garcia-13173092.jpg') }}); background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
        <div class="container">
            <div class="row">
                <!------Notices Section STart--------->
                <div class="col-sm-6">
                    <h2>Latest Notices</h2>
                    @php
                        $notices = App\Models\Notice::whereMonth('created_at', Carbon\Carbon::now()->month)->get();
                    @endphp
                    <marquee behavior="scroll" direction="up" onmouseover="stop()" onmouseout="start()" height="570px">
                        @foreach ($notices as $notice)
                            <div class="card mb-3 mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('backend/images/Picture1.png') }}"
                                            class="img-fluid rounded-start" alt="{{ $notice->title }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{ route('notices.event', $notice->id) }}"
                                                    class="text-dark">{{ $notice->title }}</a>
                                            </h5>
                                            <p class="card-text">{!! Illuminate\Support\Str::limit($notice->description, 40, '...') !!}</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $notice->created_at->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </marquee>
                </div>
                <!-------Notice Section End--------->
                <!-------Upcoming Event Section Start--------->
                <div class="col-sm-6">
                    <h2>Upcoming Events</h2>
                    @php
                        $events = App\Models\Event::whereMonth('event_date', Carbon\Carbon::now()->month)->get();
                    @endphp
                    <marquee behavior="scroll" direction="down" onmouseover="stop()" onmouseout="start()"
                        height="570px">
                        @foreach ($events as $event)
                            <div class="card mb-3 mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('backend/images/Picture1.png') }}"
                                            class="img-fluid rounded-start event_img" alt="{{ $event->title }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{ route('events.notice', $event->id) }}"
                                                    class="text-dark">{{ $event->title }}</a></h5>
                                            <p class="card-text">{!! Illuminate\Support\Str::limit($event->description, 40, '...') !!}</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </marquee>
                </div>
                <!-------Upcoming Event Section End--------->
            </div>
        </div>
    </section>

    <!------Gallery Section--------->
    <section id="portfolio" class="mt-5" data-aos="slide-left">
        <div class="container-fluid">
            <div class="gallery col-xs-12 mx-auto">
                <h1 class="gallery-title">Our School Gallery</h1>
            </div>
            <div class="buttonSection">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                @foreach ($albums as $album)
                    <button class="btn btn-default filter-button"
                        data-filter="{{ $album->slug }}">{{ $album->name }}</button>
                @endforeach
            </div>
            <div class="row">
                @foreach ($photos as $photo)
                    @foreach ($albums as $album)
                        @if ($photo->album_id == $album->id)
                            <div class="gallery_product col-md-4 filter center g-2 {{ $album->slug }}">
                        @endif
                    @endforeach
                    <a data-fancybox data-src="{{ asset($photo->cover_image) }}" data-caption="{{ $photo->name }}">
                        <img src="{{ asset($photo->thumbnail) }}" alt="{{ $photo->name }}" class="w-100 h-100 p-2">
                    </a>
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <div id="myModal" class="modal fade" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <img src="{{ asset('frontend/assets/img/top_achievers.jpg') }}" alt="Achievers"
                style="width: 150%;margin-left: -25%;">
        </div>
    </div>
@endsection

@section('styles')
    <!--------FancyBox CSS----------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
@endsection
