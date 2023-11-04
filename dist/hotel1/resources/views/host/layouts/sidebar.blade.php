<div class="admin">
    <div class="right-part">
        <div class="show-reservation-menu">
            <img src="/images/hotel_5981565.svg">
            <p>هتل ها</p>
            <ul class="dropdown">
                <li><a href="{{ route('host.hotels.create') }}">افزودن هتل</a></li>
                <li><a href="{{ route('host.hotels.index') }}">لیست هتل ها</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/shopping-cart_3144456.svg">
            <p>سفارش های من</p>
            <ul class="dropdown">
                <li><a href="{{ route('host.order') }}">لیست سفارش های من</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/coin_2529396.svg">
            <p>پرداختی ها</p>
            <ul class="dropdown">
                <li><a href="{{ route('host.orderlist') }}">لیست پرداختی ها</a></li>
            </ul>
        </div>
    </div>
</div>
