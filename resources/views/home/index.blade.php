@component('home.layouts.content')
    @slot('navbar')
        <div>
            <a href="/"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
        </div>
        <nav>
            <ul class="header-ul">
                <li class="more-menu" id="show-reservation-menu">
                    <a href="#">رزرو هتل</a>
                    <img src="/images/down-arrow-svgrepo-com.svg" />
                    <ul class="drop-down">
                        <li><a href="{{ route('city.mashhad') }}">مشهد</a></li>
                        <li><a href="{{ route('city.kish') }}">کیش</a></li>
                        <li><a href="{{ route('city.gillan') }}">گیلان</a></li>
                        <li><a href="{{ route('city.isfahan') }}">اصفهان</a></li>
                        <li><a href="{{ route('city.tehran') }}">تهران</a></li>
                        <li><a href="{{ route('city.shiraz') }}">شیراز</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">درباره ما</a>
                </li>
                <li>
                    <a href="#">تماس با ما</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ route('profile.index') }}">پروفایل</a>
                        </li>
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
                    @else
                        <li>
                            <a href="{{ route('login') }}">ورود/ثبت نام</a>
                        </li>
                    @endauth
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
                <a href="{{ route('login') }}">ورود/ثبت نام</a>
                <img src="/images/arrow.svg" />
            </div>
        </div>
    @endslot
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
                <a href="{{ route('city.kish') }}">کیش</a>
                <img class="img" src="/images/kish.jpg" alt="gilan">
            </div>
            <div class="item-2">
                <a href="{{ route('city.mashhad') }}">مشهد</a>
                <img class="img" src="/images/mashhad.jpg" alt="mashhad">
            </div>
            <div class="item-3">
                <a href="{{ route('city.isfahan') }}">اصفهان</a>
                <img class="img" src="/images/esfahan.jpg" alt="esfahan">
            </div>
            <div class="item-4">
                <a href="{{ route('city.tehran') }}">تهران</a>
                <img class="img" src="/images/tehran.jpg" alt="tehran">
            </div>
            <div class="item-5">
                <a href="{{ route('city.gillan') }}">گیلان</a>
                <img class="img" src="/images/gilan.jpg" alt="kish">
            </div>
            <div class="item-6">
                <a href="{{ route('city.shiraz') }}">شیراز</a>
                <img class="img" src="/images/shiraz.jpg" alt="shiraz">
            </div>
        </div>
    </div>

    <div class="popular-hotels">
        <h2>هتل های برتر و پربازدید</h2>
        <div class="container">
            <div class="item-7">
                <a href="{{ route('city.kish.panorama') }}"><img class="img" src="/images/Kish-Panaroma-hotel.jpg" alt="kish"></a>
            </div>
            <div class="item-8">
                <a href="{{ route('city.shiraz.zandye') }}"><img class="img" src="/images/Shiraz-Zandiyeh-hotel.jpg" alt="shiraz"></a>
            </div>
            <div class="item-9">
                <a href="{{ route('city.tehran.palas') }}"><img class="img" src="/images/Tehran-Espinas-hotel.jpg" alt="tehran"></a>
            </div>
            <div class="item-10">
                <a href="{{ route('city.mashhad.darvishi') }}"><img class="img" src="/images/darvish-hotel.jpg" alt="mashhad"></a>
            </div>
        </div>
    </div>
@endcomponent
