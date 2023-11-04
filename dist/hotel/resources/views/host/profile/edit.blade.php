@component('host.layouts.content')
    @slot('navbar')
        <div>
            <a href="/"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
            <p class="profile"><a href="{{ route('host.profile.index') }}">پروفایل</a></p>
        </div>
    @endslot
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/hotel_5981565.svg">
                <p>هتل ها</p>
                <ul class="dropdown">
                    <li><a href="./add-hotel.html">افزودن هتل</a></li>
                    <li><a href="./list-hetels.html">لیست هتل ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/shopping-cart_3144456.svg">
                <p>سفارش های من</p>
                <ul class="dropdown">
                    <li ><a href="./list-order.html">لیست سفارش های من</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/coin_2529396.svg">
                <p>پرداختی ها</p>
                <ul class="dropdown">
                    <li><a href="./list-cashhost.html">لیست پرداختی ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <form action="{{ route('host.profile.update', auth()->user()->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <p>ویرایش کاربر</p>
            <div class="city-table">
                <p>نام </p>
                <input name="name" type="text" placeholder="ميزبان" value="{{ auth()->user()->name }}"/>
                <p>ایمیل</p>
                <input name="email" type="email" placeholder="ایمیل" value="{{ auth()->user()->email }}"/>
                <p>رمز عبور جديد</p>
                <input name="password" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <p>تکرار رمز عبور جديد</p>
                <input name="password_confirmation" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <button class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
