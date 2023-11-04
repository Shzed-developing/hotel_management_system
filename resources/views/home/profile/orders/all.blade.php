@component('home.layouts.content')
    @slot('navbar')
        <div>
            <a href="/"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
            <p class="profile"><a href="{{ route('profile.index') }}">پروفایل</a></p>
        </div>
    @endslot
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/shopping-cart_3144456.svg">
                <p>سفارش های من</p>
                <ul class="dropdown">
                    <li ><a href=".{{ route('orders.index') }}">لیست سفارش های من</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/coin_2529396.svg">
                <p>پرداختی های من</p>
                <ul class="dropdown">
                    <li><a href="{{ route('payments.index') }}">پرداختی ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="create-city">
        <p >لیست سفارش ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام هتل</th>
                    <th>نام مهمان</th>
                    <th>تعداد نفرات</th>
                    <th>(تومان)هزینه کل</th>
                    <th>تاریخ ورود</th>
                    <th>تاریخ خروج</th>
                    <th>وضعیت</th>
                </tr>
            </table>
        </div>
    </div>
@endcomponent
