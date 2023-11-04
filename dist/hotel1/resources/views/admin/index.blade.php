@component('admin.layouts.content')

    <div class="main-background">
        <img  src="/images/femin.jpg" alt="background">
        <h1>با ما از سفر خود لذت ببرید!</h1>
    </div>


    <div class="search">
        <div class="search-grid">
            <div class="hotel-name">
                <input type="text" placeholder="نام هتل"/>
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
                <img class="img" src="/images/Kish-Panaroma-hotel.jpg" alt="kish">
            </div>
            <div class="item-8">
                <img class="img" src="/images/Shiraz-Zandiyeh-hotel.jpg" alt="shiraz">
            </div>
            <div class="item-9">
                <img class="img" src="/images/Tehran-Espinas-hotel.jpg" alt="tehran">
            </div>
            <div class="item-10">
                <img class="img" src="/images/darvish-hotel.jpg" alt="mashhad">
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
