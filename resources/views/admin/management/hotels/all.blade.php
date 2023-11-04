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
    <div class="add-hotel">
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>مجوز بومگردی</th>
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
                        <td><button class="login" type="submit"><a href="#">نمایش</a></button></td>
                        <td><button class="accept" type="submit">تاییدشده</button>
                            <button class="reject" type="submit">رد شده</button>
                        </td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.hotel.edit', $hotel->id) }}">ويرايش</a></button></td>
                        <form action="{{ route('admin.hotel.destroy', $hotel->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><button class="login" type="submit">حذف</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endcomponent
