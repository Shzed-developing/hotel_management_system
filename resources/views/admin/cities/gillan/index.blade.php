@component('admin.layouts.content')
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
                        <li><a href="./gilan.html">گیلان</a></li>
                        <li><a href="./esfahan.html">اصفهان</a></li>
                        <li><a href="./mashhad.html">مشهد</a></li>
                        <li><a href="./kish.html">کیش</a></li>
                        <li><a href="./tehran.html">تهران</a></li>
                        <li><a href="./shiraz.html">شیراز</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./admin-profile.html">پروفایل</a>
                </li>

                <li>
                    <a href="./management.html">پنل مدیریت</a>
                </li>
                <li>
                    <a href="./index.html">خروج</a>
                </li>
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
    @endslot
    <div class="gilan-background">
        <img  src="/images/ali-pilevar-TYDU1Mghozg-unsplash.jpg" alt="background">
    </div>
    <div class="hotels">
        <div class="hotel-grid">
            <div class="hotel-1">
                <img src="/images/gilan/jahangardi-hotel-anzali.jpg" alt="hotel1">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>5ستاره</p>
                </div>
                <a href="{{ route('admin.city.gillan.jahan') }}"><h2>هتل جهانگردی</h2></a>
                <p>بندرانزلی</p>
                <p>450000 تومان/هر شب</p>
            </div>
            <div class="hotel-2">
                <img src="/images/gilan3/pamchal-hotel-kish.jpg" alt="hotel2">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>5ستاره</p>
                </div>
                <a href="{{ route('admin.city.gillan.pamchal') }}"><h2>هتل پامچال</h2></a>
                <p>بندرانزلی</p>
                <p>480000 تومان/هر شب</p>
            </div>
            <div class="hotel-3">
                <img src="/images/gilan2/Arka-hotel-anzali.jpg" alt="hotel3">
                <div class="star">
                    <img src="/images/star_2893811.png">
                    <p>3ستاره</p>
                </div>
                <a href="{{ route('admin.city.gillan.arka') }}"><h2>هتل آرکا</h2></a>
                <p>رشت</p>
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
