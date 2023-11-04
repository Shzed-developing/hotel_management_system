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
    <form action="{{ route('host.hotel.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <div class="city-table">
                <p>نام هتل</p>
                <input name="name" type="text" placeholder="نام هتل را وارد کنید" value="{{ $hotel->name }}" required/>
                <p>تلفن</p>
                <input name="phone" type="text" placeholder="09911234586" value="{{ $hotel->phone }}" required/></br>
                <p>دسته بندی</p>
                <input type="text" name="category" placeholder="دسته بندی را انتخاب کنید" value="{{ $hotel->category }}"/>
                <p>شهر</p>
                <input type="text" name="city" placeholder="نام هتل را وارد کنید" value="{{ $hotel->city }}"/>
                <p>مبلغ برای یک شب(تومان)</p>
                <input type="text" name="price" placeholder="هزینه هتل را وارد کنید" value="{{ $hotel->price }}" required/>
                <p>ظرفیت</p>
                <input type="text" name="capacity" placeholder="ظرفیت هتل را وارد کنید" value="{{ $hotel->capacity }}" required/>
                <p>مجوز بومگردی</p>
                <input type="file" name="license" placeholder="" required value="{{ $hotel->license }}"/>
                <p>توضیحات</p>
                <input type="text" name="description" placeholder="توضیحات مربوط به هتل"required value="{{ $hotel->description }}"/>
                <p>نشانی</p>
                <input type="text" name="address" placeholder="نشانی هتل را وارد کنید"required value="{{ $hotel->address }}"/></br>
                <button class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
