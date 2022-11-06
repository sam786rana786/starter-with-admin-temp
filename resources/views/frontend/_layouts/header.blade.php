<div class="sub-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10 col-sm-10">
                <ul class="left-info">
                    @php
                        $topbar = \App\Models\TopBar::findOrFail(1);
                    @endphp
                    <li><a href="#"><i class="fa-solid fa-clock"></i> Opening Time : {{ $topbar->opening }}</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> Phone : {{ $topbar->phone }}</a></li>
                    <li><a href="#"><i class="fa-solid fa-house"></i> Address : {{ $topbar->address }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-2 col-sm-2">
                <ul class="right-icon">
                    @guest()
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login CMS</a></li>
                    @else
                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-unlock"></i> Dashboard</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
<!--------Top Logo Section----------->
<div class="py-3 top-brand">
    <div class="container-fluid">
        <div class="row d-flex align-items-center px-3 px-md-0">
            <div class="col-md-12 d-flex">
                @php
                    $toplogo = App\Models\ImportantImages::findOrFail(2);
                @endphp
                <div class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset($toplogo->header_image) }}" alt="Logo Image" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</div>
<!--------Navigation Section----------->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navigationBar">
    <div class="container-fluid d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navSupportContent"
            aria-controls="navSupportContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navSupportContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home.about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('disclosure') }}" class="nav-link">Mandatory Disclosure</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('facility') }}" class="nav-link">Facilities</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('achievements') }}" class="nav-link">Achievement</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admission') }}" class="nav-link">Admission</a>
                </li>
                @php
                    $result = \App\Models\Admin\Result::where('is_active', 1)->first();
                @endphp
                @if (!$result == null)
                    <li class="nav-item">
                        <a href="{{ route('info_link') }}" class="nav-link">Results</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tcs') }}" class="nav-link">Transfer Certificates</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('alumni') }}" class="nav-link">Alumni</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
