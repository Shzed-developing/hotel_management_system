@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="col">
        @include('admin.layouts.errors')
        <div class="card">
            <form action="{{ route('admin.cities.store') }}" method="POST">
                @csrf
                <div class="create-city">
                    <p>ایجاد شهر</p>
                    <div class="city-table">
                        <p>نام شهر</p>
                        <input type="text" name="name" placeholder="نام شهر راوارد کنید"/>
                        <p>نامک</p>
                        <input type="text" name="label" placeholder="نام شهر را به انگلیسی وارد کنید"/>
                        <p>استان</p>
                        <input type="text" name="state" placeholder="استان"/></br>
                        <button class="login" type="submit">تایید</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endcomponent
