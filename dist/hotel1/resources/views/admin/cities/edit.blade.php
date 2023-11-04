@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="col">
        @include('admin.layouts.errors')
        <div class="card">
            <form action="{{ route('admin.cities.update', $city->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="create-city">
                    <p>ایجاد شهر</p>
                    <div class="city-table">
                        <p>نام شهر</p>
                        <input type="text" name="name" placeholder="نام شهر را ویرایش کنید" value="{{ $city->name }}" />
                        <p>نامک</p>
                        <input type="text" name="label" placeholder="نام شهر را به انگلیسی ویرایش کنید" value="{{ $city->label }}" />
                        <p>استان</p>
                        <input type="text" name="state" placeholder="استان" value="{{ $city->state }}" /></br>
                        <button class="login" type="submit">ویرایش کاربر</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endcomponent
