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
    <div class="add-hotel">
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>مجوز بومگردی</th>
                    <th>ویژگی</th>
                    <th>تصاویر</th>
                    <th>نمایش</th>
                    <th>وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->id }}</td>
                        <td>{{ $hotel->name }}</td>
                        <td><button class="login" type="submit">دانلود</button></td>
                        <td><button class="login" type="submit"><a href="./create-v.html">افزودن</a></button></td>
                        <td><button class="login" type="submit"><a href="./list-img.html">تصاویر</a></button></td>
                        <td><button class="login" type="submit"><a href="#">نمایش</a></button></td>
                        <td><button class="login" type="submit">تاییدشده</button></td>
                        <td><button class="login" type="submit"><a href="{{ route('host.hotel.edit', $hotel->id) }}">ويرايش</a></button></td>
                        <td><button class="login" type="submit">حذف</button></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endcomponent
