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
    <div class="create-city">
        <p class="title">اطلاعات</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>نقش</th>
                    <th>ویرایش</th>
                </tr>
                <tr>
                    <td>{{ auth()->user()->id }}</td>
                    <td>{{ auth()->user()->name }}</td>
                    <td>{{ auth()->user()->email }}</td>
                    <td>میزبان</td>
                    <td><button class="login" type="submit"><a href="{{ route('host.profile.edit', auth()->user()->id) }}">ویرایش</a></button></td>
                </tr>
            </table>
            <p class="title">مشخصات</p>
            <div class="city-tables">
                <table style="width: 100%;">
                    <tr>
                        <th>#</th>
                        <th>تلفن</th>
                        <th>کدملی</th>
                        <th>نشانی</th>
                        <th>ویرایش</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>0991457836</td>
                        <td>0610321366</td>
                        <td>رشت میدان شهرداری</td>
                        <td><button class="login" type="submit"><a href="./edit-infoa.html">ویرایش</a></button></td>
                    </tr>
                </table>
            </div>
        </div>
@endcomponent
