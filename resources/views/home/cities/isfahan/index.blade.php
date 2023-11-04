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
                            <a href="{{ route('home') }}">پروفایل</a>
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
    <div class="gilan-background">
        <img  src="/images/ali-pilevar-TYDU1Mghozg-unsplash.jpg" alt="background">
    </div>
    <div class="hotels">
        <div class="hotel-grid">
            <div class="hotel-1">
                <img src="/images/esfahan/photo_2023-07-30_23-02-51.jpg" alt="hotel1">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>4ستاره</p>
                </div>
                <a href="{{ route('city.isfahan.kosar') }}"><h2>هتل کوثر پارسیان</h2></a>
                <p>اصفهان</p>
                <p>450000 تومان/هر شب</p>
            </div>
            <div class="hotel-2">
                <img src="/images/esfahan2/toluekhorshid-esf.jpg" alt="hotel2">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>3ستاره</p>
                </div>
                <a href="{{ route('city.isfahan.toloe') }}"><h2>هتل طلوع خورشید</h2></a>
                <p>اصفهان</p>
                <p>280000 تومان/هر شب</p>
            </div>
            <div class="hotel-3">
                <img src="/images/esfahan3/pirozi-hotel-esf.jpg" alt="hotel3">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>3ستاره</p>
                </div>
                <a href="{{ route('city.isfahan.pirozi') }}"><h2>هتل پیروزی</h2></a>
                <p>اصفهان</p>
                <p>500000 تومان/هر شب</p>
            </div>
        </div>
    </div>

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
@endcomponent
