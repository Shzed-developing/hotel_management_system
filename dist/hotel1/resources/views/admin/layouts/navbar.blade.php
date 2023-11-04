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
            <a href="{{ route('admin.profile.index') }}">پروفایل</a>
        </li>

        <li>
            <a href="{{ route('admin.management') }}">پنل مدیریت</a>
        </li>
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
