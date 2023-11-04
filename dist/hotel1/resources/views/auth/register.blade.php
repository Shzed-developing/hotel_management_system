<!DOCTYPE html>
<html lang="fa" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>

    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="/styles/style.css" />
    <link rel="stylesheet" href="./fonts.css" />
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

                    <div class="form-group">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <input name="name" type="text" placeholder="نام" required autocomplete="name">
                            <input name="email" type="email" placeholder="ایمیل" required autocomplete="email">
                            <input name="password" type="password" placeholder="رمزعبور" minlength="8" maxlength="10" required autocomplete="new-password">
                            <input name="password_confirmation" type="password" placeholder="تکرار رمزعبور" minlength="8" maxlength="10"  required autocomplete="new-password">
                            <select name="role" required style="margin-left: 90px; margin-top: 10px; font-size: 15px; font-family: YekanBakhBold,serif;">
                                <option value="" selected disabled>نقش</option>
                                <option value="1">میزبان</option>
                                <option value="2">مهمان</option>
                            </select>
                        </form>
                    </div>
                <button class="goLeft" class="off"><a href="{{ route('login') }}" >ورود</a></button>
                <button type="submit">ثبت نام</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
