@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <div class="create-city">
        <p>لیست پرداختی ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام مهمان</th>
                    <th>نام هتل</th>
                    <th>شماره تراکنش</th>
                    <th>جزئیات</th>
                    <th>وضعیت</th>
                </tr>

            </table>
        </div>
    </div>
@endcomponent
