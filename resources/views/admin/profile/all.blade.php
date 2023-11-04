@component('admin.layouts.content')
    @slot('navbar')
        <div>
            <a href="{{ route('admin.') }}"><img class="logo" src="/images/logo1.jpg" alt="reservationhotel" /></a>
            <p class="profile"><a href="{{ route('admin.management') }}">مديريت</a></p>
        </div>
    @endslot
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/shopping-cart_3144456.svg">
                <p>سفارش های من</p>
                <ul class="dropdown">
                    <li ><a href="./list-order.html">لیست سفارش های من</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images//coin_2529396.svg">
                <p>پرداختی های من</p>
                <ul class="dropdown">
                    <li><a href="./payments.html">پرداختی ها</a></li>
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
                        <td>مدیر سایت</td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.profile.edit', auth()->user()->id) }}">ویرایش</a></button></td>
                    </tr>
            </table>
        </div>
    </div>
@endcomponent
