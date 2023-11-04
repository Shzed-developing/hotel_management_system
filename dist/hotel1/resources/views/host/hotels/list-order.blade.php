@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <div class="create-city">
        <p >لیست سفارش ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام هتل</th>
                    <th>نام مهمان</th>
                    <th>تعداد نفرات</th>
                    <th>(تومان)هزینه کل</th>
                    <th>تاریخ ورود</th>
                    <th>تاریخ خروج</th>
                    <th>وضعیت</th>
                </tr>
            </table>
        </div>
    </div>
@endcomponent
