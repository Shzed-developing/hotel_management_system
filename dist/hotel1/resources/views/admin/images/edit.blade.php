@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <form action="{{ route('admin.images.update', $image->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <p>ویرایش تصاوير</p>
            <div class="city-table">
                <p>تصوير</p>
                <input name="image" type="file" placeholder="image" value="{{ $image->image }}" />
                <p>نامک</p>
                <input name="label" type="text" placeholder="نام شهر را به انگلیسی ویرایش کنید" value="{{ $image->label }}" />
                <p>استان</p>
                <input name="state" type="text" placeholder="استان" value="{{ $image->state }}" /></br>
                <button class="login" type="submit">ویرایش</button>
            </div>
        </div>
    </form>

@endcomponent
