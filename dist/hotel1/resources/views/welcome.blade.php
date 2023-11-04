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
        <a href="./index.html"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
    </div>
    <nav>
        <ul class="header-ul">
            <li class="more-menu" id="show-reservation-menu">
                <a href="#">رزرو هتل</a>
                <img src="/images/down-arrow-svgrepo-com.svg" />
                <ul class="drop-down">
                    <li><a href="./mashhad.html">مشهد</a></li>
                    <li><a href="./kish.html">کیش</a></li>
                    <li><a href="./gilan.html">گیلان</a></li>
                    <li><a href="./esfahan.html">اصفهان</a></li>
                    <li><a href="./tehran.html">تهران</a></li>
                    <li><a href="./shiraz.html">شیراز</a></li>
                </ul>
            </li>
            <li>
                <a href="#">درباره ما</a>
            </li>
            <li>
                <a href="#">تماس با ما</a>
            </li>

{{--            @if (Route::has('login'))--}}
{{--                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

            @if(Route::has('login'))
                @auth
                    @if(auth()->user()->isAdmin())
                        <li>
                            <a href="{{ route('admin.profile.index') }}">پروفایل</a>
                        </li>
                    @endif
                @if(auth()->user()->isHost())
                        <li>
                            <a href="{{ route('host.profile.index') }}">پروفایل</a>
                        </li>
                @endif
                    @if(auth()->user()->isAdmin())
                            <li>
                                <a href="{{ route('admin.management') }}">پنل مدیریت</a>
                            </li>
                    @endif
                @else
                    <li>
                        <a href="{{ route('login') }}">ثبت نام/ورود</a>
                    </li>
                @endauth
            @endif

            @if(auth()->user())
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endif



        </ul>
    </nav>
    <img src="/images/hamburger.svg" class="hamburger-icon" alt="hamburger menu" />
    <div class="hamburger-menu">
        <div class="cross-icon">
            <img src="/images/cross.svg" alt="cross"/>
        </div>
        <div class="hamburger-menu-items">
            <ul>
                <li>
                    <a href="#">رزرو هتل</a>
                </li>
                <li>
                    <a href="#">درباره ما</a>
                </li>
                <li>
                    <a href="#">تماس با ما</a>
                </li>
            </ul>
        </div>
        <div class="more-item">
            <a href="./login.html">ورود/ثبت نام</a>
            <img src="/images/arrow.svg" />
        </div>
    </div>
</header>
<main>
    <div class="main-background">
        <img  src="/images/femin.jpg" alt="background">
        <h1>با ما از سفر خود لذت ببرید!</h1>
    </div>


    <div class="search">
        <div class="search-grid">
            <div class="hotel-name">
                <input type="text" placeholder="نام هتل  "/>
            </div>
            <div class="city-name">
                <input type="text" placeholder="نام شهر"/>
            </div>
            <div class="grade">
                <input type="text" placeholder="دسته بندی"/>
            </div>
            <div class="find">
                <p>پیدا کن</p>
                <div class="search-icon">
                    <img src="/images/searchh.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="popular-destination">
        <h2>مقصدهای محبوب</h2>
        <div class="container">
            <div class="item-1">
                <a href="./kish.html">کیش</a>
                <img class="img" src="/images/kish.jpg" alt="gilan">
            </div>
            <div class="item-2">
                <a href="./mashhad.html">مشهد</a>
                <img class="img" src="/images/mashhad.jpg" alt="mashhad">
            </div>
            <div class="item-3">
                <a href="./esfahan.html">اصفهان</a>
                <img class="img" src="/images/esfahan.jpg" alt="esfahan">
            </div>
            <div class="item-4">
                <a href="./tehran.html">تهران</a>
                <img class="img" src="/images/tehran.jpg" alt="tehran">
            </div>
            <div class="item-5">
                <a href="./gilan.html">گیلان</a>
                <img class="img" src="/images/gilan.jpg" alt="kish">
            </div>
            <div class="item-6">
                <a href="./shiraz.html">شیراز</a>
                <img class="img" src="/images/shiraz.jpg" alt="shiraz">
            </div>
        </div>
    </div>

    <div class="popular-hotels">
        <h2>هتل های برتر و پربازدید</h2>
        <div class="container">
            <div class="item-7">
                <a href="./panorama-kish.html"><img class="img" src="/images/Kish-Panaroma-hotel.jpg" alt="kish"></a>
            </div>
            <div class="item-8">
                <a href="./zandye-shiraz.html"><img class="img" src="/images/Shiraz-Zandiyeh-hotel.jpg" alt="shiraz"></a>
            </div>
            <div class="item-9">
                <a href="./palas-tehran.html"><img class="img" src="/images/Tehran-Espinas-hotel.jpg" alt="tehran"></a>
            </div>
            <div class="item-10">
                <a href="./darvishi-mashhad.html"><img class="img" src="/images/darvish-hotel.jpg" alt="mashhad"></a>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="footer-container">
        <div class="row">
            <div class="footer-col">
                <h4>شرکت</h4>
                <ul>
                    <li><p>رزرو هتل در سراسر ایران</p></li>
                    <li><p href="#">دفتر پشتیبانی: ایران اراک خیابان شریعی</p></li>
                    <li><p href="#">تلفن پشتیبانی:3468255-086 </p></li>
                    <li><p href="#">ایمیل:rezervation@gmail.com </p></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>بیشتر</h4>
                <ul>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">مشارکت با ما</a></li>
                    <li><a href="#">خدمات</a></li>
                    <li><a href="#">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>بیشتر</h4>
                <ul>
                    <li><a href="#">حساب </a></li>
                    <li><a href="#">مجوز</a></li>
                    <li><a href="#">همکاری</a></li>
                    <li><a href="#">حریم خصوصی</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>ما را دنبال کنید</h4>
                <div class="social-links">
                    <a href="#"><img src="/images/footer/telegram_2111708.png"></a>
                    <a href="#"><img src="/images/footer/instagram_1384031.png"></a>
                    <a href="#"><img src="/images/footer/facebook_3128208.png"></a>
                    <a href="#"><img src="/images/footer/linkedin_3128219.png"></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="/js/script.js"></script>
</body>
</html>
