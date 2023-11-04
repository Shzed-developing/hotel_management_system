@component('admin.management.layouts.content')
    <div class="admin">
        <div class="right-part">
            <div class="show-reservation-menu">
                <img src="/images/building_5193766.svg">
                <p>شهر</p>
                <ul class="dropdown">
                    <li ><a href="{{ route('admin.city.create') }}">ایجاد شهر</a></li>
                    <li ><a href="{{ route('admin.city.index') }}">لیست شهرها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/gallery_833281.svg">
                <p>تصاویر</p>
                <ul class="dropdown">
                    <li><a href="{{ route('admin.image.create') }}">ایجاد تصاویر</a></li>
                    <li><a href="{{ route('admin.image.index') }}">لیست تصاویر</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/accountt.svg">
                <p>میزبانان</p>
                <ul class="dropdown">
                    <li><a href="{{ route('admin.host.index') }}">لیست میزبانان</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/hotel_5981565.svg">
                <p>هتل ها</p>
                <ul class="dropdown">
                    <li><a href="{{ route('admin.hotel.index') }}">لیست هتل ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/testimonial_900356.svg">
                <p>ویژگی ها</p>
                <ul class="dropdown">
                    <li><a href="{{ route('admin.attribute.create') }}">ایجاد ویژگی</a></li>
                    <li><a href="{{ route('admin.attribute.index') }}">لیست ویژگی ها</a></li>
                </ul>
            </div>
            <div class="show-reservation-menu">
                <img src="/images/coin_2529396.svg">
                <p>پرداختی ها</p>
                <ul class="dropdown">
                    <li><a href="{{ route('admin.cash.index') }}">لیست پرداختی ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.hotel.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <div class="city-table">
                <p>نام هتل</p>
                <input name="name" type="text" placeholder="نام هتل را وارد کنید" value="{{ $hotel->name }}" required/>
                <p>تلفن</p>
                <input name="phone" type="text" placeholder="09911234586" required value="{{ $hotel->phone }}"/></br>
                <p>دسته بندی</p>
                <input name="category" type="text" placeholder="دسته بندی را انتخاب کنید" value="{{ $hotel->category }}"/>
                <p>شهر</p>
                <input name="city" type="text" placeholder="نام هتل را وارد کنید" value="{{ $hotel->city }}"/>
                <p>مبلغ برای یک شب(تومان)</p>
                <input name="price" type="text" placeholder="هزینه هتل را وارد کنید" value="{{ $hotel->price }}" required/>
                <p>ظرفیت</p>
                <input name="capacity" type="text" placeholder="هزینه هتل را وارد کنید" value="{{ $hotel->capacity }}" required/>
                <p>مجوز بومگردی</p>
                <input name="license" type="file" placeholder="" value="{{ $hotel->license }}" required/>
                <p>توضیحات</p>
                <input name="description" type="text" placeholder="توضیحات مربوط به هتل" required value="{{ $hotel->description }}"/>
                <p>نشانی</p>
                <input type="text" placeholder="نشانی هتل را وارد کنید" required value="{{ $hotel->address }}"/></br>
                <button name="address" class="login" type="submit">تایید</button>

            </div>
        </div>
    </form>
@endcomponent
