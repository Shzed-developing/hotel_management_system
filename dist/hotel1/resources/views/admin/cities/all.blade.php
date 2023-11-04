@component('admin.layouts.content')
    @include('admin.layouts.sidebar')
    <div class="create-city">
        <p >لیست شهرها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>نامک</th>
                    <th>استان</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>

                @foreach($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->label }}</td>
                        <td>{{ $city->state }}</td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.cities.edit', $city->id) }}">ویرایش</a></button></td>
                        <td>
                            <form action="{{ route('admin.cities.destroy', $city->id) }}" method="POST">
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
