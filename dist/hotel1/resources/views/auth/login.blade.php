<!DOCTYPE html>
<html lang="fa" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>

    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="/styles/style.css" />
    <link rel="stylesheet" href="/styles/fonts.css" />
</head>
<body>
<div class="back">
    <div class="backleft"></div>
</div>

<div class="slidebox">
    <div class="topLayer">
        <div class="right">
            <div class="content">
                <h2>ورود</h2>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input name="email" type="email" placeholder="ایمیل" required>
                        <input name="password" type="password" placeholder="رمزعبور" minlength="8" maxlength="10" required></br>
                        <div class="psw">
                            <label>به خاطر سپردن</label>
                            <input name="remember" type="checkbox">
                        </div>
                        <button class="forget-psw" type="submit">
                            @if(Route::has('password.request'))
                                <a href="{{route('password.request')}}">فراموشی رمزعبور</a>
                            @endif
                        </button>
                    </div>
                    <button class="goRight" class="off"><a href="{{ route('register') }}" >ثبت نام</a></button>
                    <button class="login" type="submit">ورود</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
