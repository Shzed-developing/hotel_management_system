@component('admin.layouts.content')
    @include('admin.layouts.sidebar')
    <div class="create-city">
        <p class="title">لیست تصاویر</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>تصویر</th>
                    <th>لینک</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>

                @foreach($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{{ $image->label }}</td>
                        <td><img src="{{ public_path('image') }}"></td>
                        <td>{{ $image->image }}</td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.images.edit', $image->id) }}">ویرایش</a></button></td>
                        <td>
                            <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="login" type="submit">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody></table>
        </div>
    </div>
@endcomponent
