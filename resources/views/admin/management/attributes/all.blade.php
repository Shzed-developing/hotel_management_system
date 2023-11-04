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
    <div class="create-city">
        <p class="title">لیست ویژگی ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach($attributes as $attribute)
                    <tr>
                        <td>{{ $attribute->id }}</td>
                        <td>{{ $attribute->title }}</td>
                        <td>{{ $attribute->description }}</td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.attribute.edit', $attribute->id) }}">ويرايش</a></button></td>
                        <td><button class="login" type="submit">حذف</button></td>
                    </tr>
                @endforeach
            </table>
        </div>
@endcomponent
