@component('host.layouts.content')
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
                    <a href="./host-profile.html">پروفایل</a>
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
    <div class="hotel1">
        <h2>هتل پانوراما</h2>
        <div class="starhotel">
            <img src="/images/star_2893811.png">
            <p>5ستاره</p>
        </div>
        <h5>جزیره کیش، بلوار رودکی</h5>
    </div>
    <div class="hotel-box">
        <div class="hotel-v">
            <h2>توضیحات</h2>
            <p>این هتل در سال 1390 تاسیس شده است.</p>
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
            <h3>برای رزرو این هتل وارد حساب کاربری خود شوید</h3>
        </div>
        <div class="images-h">
            <img src="/images/kish/photo_2023-07-30_14-12-24.jpg">
            <img src="/images/kish/photo_2023-07-30_14-12-19.jpg">
            <img src="/images/kish/photo_2023-07-30_14-12-59.jpg">
            <img src="/images/kish/photo_2023-07-30_14-13-16.jpg">
        </div>
        <div class="more-hotel">
            <h3>هتل های بیشتر</h3>
            <div class="m-hotel">
                <img src="/images/kish/photo_2023-07-30_14-12-24.jpg">
                <div class="text-h">
                    <p>880000 تومان/هر شب</p>
                    <a href="./shayegan-kish.html"><p>هتل شایگان</p></a>
                    <h5>کیش</h5>
                </div>
            </div>
            <div class="m-hotel">
                <img src="/images/kish3/shayan-kish-hotel.jpg">
                <div class="text-h">
                    <p>580000 تومان/هر شب</p>
                    <a href="#"><p>هتل شایان</p></a>
                    <h5>کیش</h5>
                </div>
            </div>
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
