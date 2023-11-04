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
    <div class="create-city">
        <p>لیست پرداختی ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام مهمان</th>
                    <th>نام هتل</th>
                    <th>شماره تراکنش</th>
                    <th>جزئیات</th>
                    <th>وضعیت</th>
                </tr>

            </table>
        </div>
@endcomponent
