@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="col">
        @include('admin.layouts.errors')
        <div class="card">
            <form action="{{ route('admin.hosts.store') }}" method="POST">
                @csrf
                <div class="create-city">
                    <p>ایجاد میزبان</p>
                    <div class="city-table">
                        <p>نام میزبان</p>
                        <input type="text" name="name" placeholder="نام میزبان راوارد کنید"/>
                        <p>کدملی</p>
                        <input type="number" name="kodemeli" placeholder="کدملی میزبان را وارد کنید"/>
                        <p>شماره تماس</p>
                        <input type="number" name="phone" placeholder=""/></br>
                        <p>آدرس</p>
                        <input type="text" name="address" placeholder=""/></br>
                        <button class="login" type="submit">تایید</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endcomponent
