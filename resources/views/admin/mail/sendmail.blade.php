<!DOCTYPE html>
<html>

<head>
    <title>Vivekanand Public School</title>
</head>

<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    @if (isset($details['sub-details']))
        <p>{{ $details['sub-details'] }}</p>
    @endif
    <p>Thank you</p>
    <p>Regards</p>
    <p>Mail From Vivekanand Public School CMS</p>
</body>

</html>
