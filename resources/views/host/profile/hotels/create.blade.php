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
    <form action="{{ route('host.hotel.store') }}" method="POST">
        @csrf
        <div class="create-city">
            <div class="city-table">
                <p>نام هتل</p>
                <input type="text" placeholder="نام هتل را وارد کنید" required/>
                <p>تلفن</p>
                <input type="text" placeholder="09911234586" required/></br>
                <p>دسته بندی</p>
                <input type="text" placeholder="دسته بندی را انتخاب کنید"/>
                <p>شهر</p>
                <input type="text" placeholder="نام هتل را وارد کنید"/>
                <p>مبلغ برای یک شب(تومان)</p>
                <input type="text" placeholder="هزینه هتل را وارد کنید" required/>
                <p>ظرفیت</p>
                <input type="text" placeholder="ظرفیت هتل را وارد کنید" required/>
                <p>مجوز بومگردی</p>
                <input type="file" placeholder="" required/>
                <p>توضیحات</p>
                <input type="text" placeholder="توضیحات مربوط به هتل"required/>
                <p>نشانی</p>
                <input type="text" placeholder="نشانی هتل را وارد کنید"required/></br>
                <button class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
