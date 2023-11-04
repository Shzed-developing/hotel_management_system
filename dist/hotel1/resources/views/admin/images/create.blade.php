@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <form action="{{ route('admin.images.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="create-city">
            <p>ایجاد تصاوير</p>
            <div class="city-table">
                <p>تصوير</p>
                <input name="image" type="file" placeholder="image"/>
                <p>نامک</p>
                <input name="label" type="text" placeholder="نام شهر را به انگلیسی وارد کنید"/>
                <p>استان</p>
                <input name="state" type="text" placeholder="استان"/></br>
                <button class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>

@endcomponent
