@extends('frontend.frontend_master')

@section('content')
    @php
        $image = App\Models\ImportantImages::findOrFail(2);
    @endphp
    <section class="pg-h" style="background-image: url({{ asset($image->gallery_image) }})">
        <div class="overlay">
            <div class="container">
                <h3 style="color: #fff;">Gallery</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> - </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <section id="portfolio" class="mt-5" data-aos="slide-left">
        <div class="container-fluid">
            <div class="gallery col-lg-12 mx-auto">
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
@endsection

@section('styles')
    <!--------FancyBox CSS----------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script></script>
@endsection
