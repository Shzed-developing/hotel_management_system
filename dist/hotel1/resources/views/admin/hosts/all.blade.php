@component('admin.layouts.content')
    @include('admin.layouts.sidebar')
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
                @foreach($hosts as $host)
                    <tr>
                        <td>{{ $host->id }}</td>
                        <td>{{ $host->name }}</td>
                        <td>{{ $host->kodemeli }}</td>
                        <td>{{ $host->phone }}</td>
                        <td>{{ $host->address }}</td>
                        <td><button class="login" type="submit">نمایش</button></td>
                        <td><button class="accept" type="submit">تاییدشده</button>
                            <button class="reject" type="submit">رد شده</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endcomponent
