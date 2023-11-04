@component('admin.layouts.content')
    @slot('navbar')
        <div>
            <a href="/"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
            <p class="profile"><a href="{{ route('admin.profile.index') }}l">پروفایل</a></p>
        </div>
    @endslot
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/building_5193766.svg">
                <p>شهر</p>
                <ul class="dropdown">
                    <li ><a href="./create-city.html">ایجاد شهر</a></li>
                    <li ><a href="./list-city.html">لیست شهرها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/hotel_5981565.svg">
                <p>هتل ها</p>
                <ul class="dropdown">
                    <li><a href="./add-hotel.html">افزودن هتل</a></li>
                    <li><a href="./list-hetels.html">لیست هتل ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/gallery_833281.svg">
                <p>تصاویر</p>
                <ul class="dropdown">
                    <li><a href="./create-img.html">ایجاد تصاویر</a></li>
                    <li><a href="./list-img.html">لیست تصاویر</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/testimonial_900356.svg">
                <p>ویژگی ها</p>
                <ul class="dropdown">
                    <li><a href="./create-v.html">ایجاد ویژگی</a></li>
                    <li><a href="./list-v.html">لیست ویژگی ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/coin_2529396.svg">
                <p>پرداختی ها</p>
                <ul class="dropdown">
                    <li><a href="./list-cash.html">لیست پرداختی ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.profile.update', auth()->user()->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <p>ویرایش کاربر</p>
            <div class="city-table">
                <p>نام </p>
                <input name="name" type="text" placeholder="ادمین" value="{{ auth()->user()->name }}"/>
                <p>ایمیل</p>
                <input name="email" type="email" placeholder="ایمیل" value="{{ auth()->user()->email }}"/>
                <p>رمز عبور جديد</p>
                <input name="password" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <p>تکرار رمز عبور جديد</p>
                <input type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <button name="password_confirmation" class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
