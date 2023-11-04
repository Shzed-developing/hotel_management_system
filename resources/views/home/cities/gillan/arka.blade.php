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
    <div class="hotel1">
        <h2>هتل آرکا</h2>
        <div class="starhotel">
            <img src="/images/star_2893811.png">
            <p>3ستاره</p>
        </div>
        <h5>بندرانزلی، خیابان پاسداران، نبش خیابان نهم</h5>
    </div>
    <div class="hotel-box">
        <div class="hotel-v">
            <h2>توضیحات</h2>
            <p>این هتل در سال 1391 تاسیس شده است.</p>
            <h2>ویژگی ها</h2>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>اینترنت با سرعت بالا</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>صبحانه رایگان</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>رستوران در هتل</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>زمین تنیس</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>آسانسور</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>یخچال</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>تلویزیون LCD</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>استخر</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>تاکسی سرویس</p>
            </div></br>
            <h2>ظرفیت</h2></br>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>دو نفره</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>سه نفره</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>چهار نفره</p></br>
            </div>
            <div class="icon-v">
                <img src="/images/verified_8888205.svg">
                <p>پنج نفره</p>
            </div></br>
            <form action="">
            <div class="choose-day">
                <div class="number-people">
                    <input type="number" placeholder="تعداد نفرات">
                </div>
                <div class="enter-date">
                    <h3>تاریخ ورود</h3>
                    <input type="date" class="enter-date">
                </div>
                <div class="exit-date">
                    <h3>تاریخ خروج</h3>
                    <input type="date" class="exit-date">
                </div>
                <button type="submit">درخواست</button>
            </div>
            </form>
        </div>
        <div class="images-h">
            <img src="/images/gilan2/Arka-hotel-anzali.jpg">
            <img src="/images/gilan2/21.jpg">
            <img src="/images/gilan2/26.jpg">
            <img src="/images/gilan2/4.jpg">
        </div>

        <div class="coments-h">
            <h2>نظرات کاربران</h2></br>
            <div class="users-h">
                <div class="user1">
                    <img src="/images/accountt.svg">
                    <h3>کاربر شماره پنج</h3>
                    <p>5-اسفند-1401</p></br>
                    <div class="user-text">
                        <p>.Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </br>
                        <hr/>
                    </div>
                </div>
            </div>
            <div class="users-h">
                <div class="user1">
                    <img src="/images/accountt.svg">
                    <h3>کاربر شماره دو</h3>
                    <p>1-خرداد-1402</p></br>
                    <div class="user-text">
                        <p>.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, laudantium</p>
                        </br>
                        </br>
                    </div>
                </div>
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
