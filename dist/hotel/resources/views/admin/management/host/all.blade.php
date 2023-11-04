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
                    <th>کد ملی</th>
                    <th>شماره تماس</th>
                    <th>آدرس</th>
                    <th>عکس کارت ملی</th>
                    <th>وضعیت</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>هتل درویشی</td>
                    <td>03214566</td>
                    <td>086931254</td>
                    <td>مشهد،خیابان امام رضا</td>
                    <td><button class="login" type="submit">نمایش</button></td>
                    <td><button class="accept" type="submit">تاییدشده</button>
                        <button class="reject" type="submit">رد شده</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>هتل پانوراما</td>
                    <td>03214566</td>
                    <td>086931254</td>
                    <td>کیش،بلوار رودکی</td>
                    <td><button class="login" type="submit">نمایش</button></td>
                    <td><button class="accept" type="submit">تاییدشده</button>
                        <button class="reject" type="submit">رد شده</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>هتل اسپيناس</td>
                    <td>03214566</td>
                    <td>086931254</td>
                    <td>تهران،سعادت آباد</td>
                    <td><button class="login" type="submit">نمایش</button></td>
                    <td><button class="accept" type="submit">تاییدشده</button>
                        <button class="reject" type="submit">رد شده</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>هتل الماس</td>
                    <td>03214566</td>
                    <td>086931254</td>
                    <td>مشهد،خیابان امام رضا</td>
                    <td><button class="login" type="submit">نمایش</button></td>
                    <td><button class="accept" type="submit">تاییدشده</button>
                        <button class="reject" type="submit">رد شده</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>هتل جهان گردی</td>
                    <td>03214566</td>
                    <td>086931254</td>
                    <td>بندر انزلي</td>
                    <td><button class="login" type="submit">نمایش</button></td>
                    <td><button class="accept" type="submit">تاییدشده</button>
                        <button class="reject" type="submit">رد شده</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endcomponent
