<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رزرو هتل</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/styles/fonts.css" />
    <link rel="stylesheet" href="/styles/style.css" />
</head>
<body>
<header>
    <div>
        <a href="{{ route('host.') }}"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
        <p class="profile"><a href="{{ route('host.profile.index') }}">پروفایل</a></p>
    </div>
</header>
<main>
    @yield('content')
</main>

