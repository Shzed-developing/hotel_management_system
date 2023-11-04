@component('admin.layouts.content')
    @include('admin.layouts.sidebar')
    <div class="create-city">
        <p class="title">لیست ویژگی ها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach($attributes as $attribute)
                    <tr>
                        <td>{{ $attribute->id }}</td>
                        <td>{{ $attribute->title }}</td>
                        <td>{{ $attribute->description }}</td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.attributes.edit', $attribute->id) }}">ويرايش</a></button></td>
                        <td>
                            <form action="{{ route('admin.attributes.destroy', $attribute->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="login" type="submit">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endcomponent
