@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <div class="add-hotel">
        <div class="city-tables">
            <table style="width: 100%;">
                <tbody><tr>
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
                <tr>
                    <td>1</td>
                    <td>هتل درویشی</td>
                    <td><button class="login" type="submit">دانلود</button></td>
                    <td><button class="login" type="submit"><a href="./create-v.html">افزودن</a></button></td>
                    <td><button class="login" type="submit"><a href="./list-img.html">تصاویر</a></button></td>
                    <td><button class="login" type="submit"><a href="#">نمایش</a></button></td>
                    <td><button class="login" type="submit">تاییدشده</button></td>
                    <td><button class="login" type="submit"><a href="./edit-hotel.html">ويرايش</a></button></td>
                    <td><button class="login" type="submit">حذف</button></td>
                </tr>
                </tbody></table>
        </div>
    </div>
@endcomponent
