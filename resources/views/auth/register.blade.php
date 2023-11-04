<!DOCTYPE html>
<html lang="fa" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>

    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="/styles/style.css" />
    <link rel="stylesheet" href="/styles/fonts.css" />
</head>
<body>
<div class="back">
    <div class="backright"></div>
</div>
<div class="slidebox">
    <div class="topLayer">
        <div class="left">
            <div class="content">
                <h2>ثبت نام</h2>
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" placeholder="نام" >
                        <input name="email" type="email" placeholder="ایمیل" >
                        <input name="password" type="password" placeholder="رمزعبور">
                        <input name="password_confirmation" type="password" placeholder="تکرار رمزعبور">
                    </div>
                </form>
                <button class="goLeft" class="off"><a href="{{ route('login') }}" >ورود</a></button>
                <button type="submit">ثبت نام</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
