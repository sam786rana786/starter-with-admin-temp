<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend._layouts.style')
    @yield('styles')
</head>

<body>

    @include('frontend._layouts.header')
    
    <!---------Content----------->
    @yield('content')

    <!---------Footer----------->
    @include('frontend._layouts.footer')

    <!---------Scripts----------->
    @include('frontend._layouts.scripts')
    
    @yield('scripts')
</body>

</html>
