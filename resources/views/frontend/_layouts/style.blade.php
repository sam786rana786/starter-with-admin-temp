<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Vivekanand Public School</title>
<!--------Favicon----------------->
<link rel="shortcut icon" href="{{ asset('backend/images/vlogo.png') }}" type="image/x-icon">
<!--------Animation CSS----------->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/aos-master/dist/aos.css') }}" />
<!--------Bootstrap CSS----------->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
<!--------Font Awesome CSS----------->
<link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome/css/all.min.css') }}">
<!--------Font Awesome CSS----------->
<link rel="stylesheet" href="{{ asset('frontend/assets/flaticon/flaticon.css') }}">
<!--------Google Fonts CSS----------->
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">


<!--------Custom Style CSS----------->
@php
    $image = App\Models\ImportantImages::findOrFail(2);
@endphp
<link rel="stylesheet" href="{{ asset('frontend/assets/css/' . '/' . $image->style . '.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/libs/toastr/build/toastr.min.css') }}">
