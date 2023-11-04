@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="card">
        <form action="{{ route('admin.attributes.store') }}" method="POST">
            @csrf
            <div class="create-city">
                <p class="titles">ایجاد ویژگی</p>
                <div class="city-table">
                    <p>عنوان</p>
                    <input name="title" type="text" placeholder="عنوان راوارد کنید"/>
                    <p>توضیحات</p>
                    <input name="description" type="text" placeholder="توضیحات بیشتر"/></br>
                    <button class="login" type="submit">تایید</button>
                </div>
            </div>
        </form>
    </div>

@endcomponent
