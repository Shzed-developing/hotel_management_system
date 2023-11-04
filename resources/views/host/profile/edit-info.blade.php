@component('host.profile.layouts.content')
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/hotel_5981565.svg">
                <p>هتل ها</p>
                <ul class="dropdown">
                    <li><a href="{{ route('host.hotel.create') }}">افزودن هتل</a></li>
                    <li><a href="{{ route('host.hotel.index') }}">لیست هتل ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/shopping-cart_3144456.svg">
                <p>سفارش های من</p>
                <ul class="dropdown">
                    <li ><a href="{{ route('host.order.index') }}">لیست سفارش های من</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/coin_2529396.svg">
                <p>پرداختی ها</p>
                <ul class="dropdown">
                    <li><a href="{{ route('host.cashhost.index') }}">لیست پرداختی ها</a></li>
                </ul>
            </div>
        </div>
    </div>

    <form action="{{ 'host.profile.update', auth()->user()->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <p>ویرایش کاربر</p>
            <div class="city-table">
                <p>نام </p>
                <input name="name" type="text" placeholder="" value="{{ auth()->user()->name }}"/>
                <p>ایمیل</p>
                <input name="email" type="email" placeholder="" value="{{ auth()->user()->email }}"/>
                <p>رمز عبور جديد</p>
                <input name="password" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <p>تکرار رمز عبور جديد</p>
                <input type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <button name="password_confirmation" class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
