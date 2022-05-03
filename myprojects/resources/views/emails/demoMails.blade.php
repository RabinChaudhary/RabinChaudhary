<!DOCTYPE html>
<html>

<head>
    <title>email.com</title>
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <p>Sorry your email has been deleted.
        {{ $mailData['email'] }}
    </p>

    <p>Thank you</p>
</body>

</html>
