@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <div class="create-city">
        <p class="title">اطلاعات</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>نقش</th>
                    <th>ویرایش</th>
                </tr>
                @if(auth()->user()->isHost())
                    <tr>
                        <td>{{ auth()->user()->id }}</td>
                        <td>{{ auth()->user()->name }}</td>
                        <td>{{ auth()->user()->email }}</td>
                        <td>میزبان</td>
                        <td><button class="login" type="submit"><a href="{{ route('host.profile.edit', auth()->user()->id) }} ">ویرایش</a></button></td>
                    </tr>
                @endif
                </tbody></table>
            <p class="title">مشخصات</p>
            <div class="city-tables">
                <table style="width: 100%;">
                    <tbody><tr>
                        <th>#</th>
                        <th>تلفن</th>
                        <th>کدملی</th>
                        <th>نشانی</th>
                        <th>ویرایش</th>
                    </tr>
                    @foreach($hosts as $host)
                        <tr>
                            <td>{{ $host->id }}</td>
                            <td>{{ $host->phone }}</td>
                            <td>{{ $host->kodemeli }}</td>
                            <td>{{ $host->address }}</td>
                            <td><button class="login" type="submit"><a href="./edit-infoa.html">ویرایش</a></button></td>
                        </tr>
                    @endforeach
                    </tbody></table>
            </div>
        </div>
    </div>
@endcomponent
