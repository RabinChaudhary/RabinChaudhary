<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>

<body>
    <p>Hi {{ $mailData['name'] }}, your email {{ $mailData['email'] }} status is changed to {{ $mailData['status'] }}
        by admin. You are allowed to login only when your status is active.</p>
    <p>Thank you for your patience.</p>




</body>

</html>
