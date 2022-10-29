@extends('frontend.frontend_master')

@section('content')
    <!--------Hero Section----------->
    <section class="hero">
        <div class="hero-container">
            <div id="herocarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators" id="hero-carousel-indicators">
                    <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#herocarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <!------Slide 1--------->
                <div class="carousel-inner" role="listbox">
                    @foreach ($banners as $banner)
                        <div class="carousel-item {{ $banner->banner_image ? 'active' : '' }}">
                            <img src="{{ asset($banner->banner_image) }}" class="hero-image" alt="carousel image">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#herocarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#herocarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!------Latest Notice Section--------->
    <section class="latest" data-aos="zoom-in-down">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @php
                        $notice = App\Models\Notice::get()->last();
                    @endphp
                    <marquee direction="left" loop="true" onmouseover="this.stop();" onmouseout="this.start();">
                        <h4><a href="{{ $notice->link }}" class="text-white">{{ $notice->title }}</a></h4>
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
                        $notices = App\Models\Notice::all();
                    @endphp
                    <marquee behavior="scroll" direction="up" onmouseover="stop()" onmouseout="start()" height="570px">
                        @foreach ($notices as $notice)
                            <div class="card mb-3 mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $notice->cover_image }}" class="img-fluid rounded-start"
                                            alt="{{ $notice->title }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{ $notice->link }}"
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
                        $events = App\Models\Event::all();
                    @endphp
                    <marquee behavior="scroll" direction="down" onmouseover="stop()" onmouseout="start()"
                        height="570px">
                        @foreach ($events as $event)
                            <div class="card mb-3 mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $event->cover_image }}" class="img-fluid rounded-start event_img"
                                            alt="{{ $event->title }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{ $event->link }}}}"
                                                    class="text-dark">{{ $event->title }}</a></h5>
                                            <p class="card-text">{!! Illuminate\Support\Str::limit($event->description, 40, '...') !!}</p>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $event->created_at->diffForHumans() }}</small>
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
                        data-filter="{{ $album->slug }}">{{ $album->slug }}</button>
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
    <div id="myModal" class="modal fade" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
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
