@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="col">
        @include('admin.layouts.errors')
        <div class="card">
            <form action="{{ route('admin.attributes.update', $attribute->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="create-city">
                    <p>ویرایش ویژگی </p>
                    <div class="city-table">
                        <p>نام ویژگی</p>
                        <input  type="text" name="title" placeholder="نام شهر را ویرایش کنید" value="{{ $attribute->title }}" />
                        <p>توضیحات</p>
                        <input type="text" name="description" placeholder="نام شهر را به انگلیسی ویرایش کنید" value="{{ $attribute->description }}" />
                        <br>
                        <button class="login" type="submit">ویرایش ویژگی</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endcomponent
