@component('admin.layouts.content')
    @include('admin.layouts.sidebar')
    <div class="create-city">
        <p >لیست شهرها</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>مجوز بومگردی</th>
                    <th>نمایش</th>
                    <th>وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->id }}</td>
                        <td>{{ $hotel->name }}</td>
                        <td><button class="login" type="submit">دانلود</button></td>
                        <td><button class="login" type="submit"><a href="#">نمایش</a></button></td>
                        <td><button class="accept" type="submit">تاییدشده</button>
                            <button class="reject" type="submit">رد شده</button>
                        </td>
                        <td><button class="login" type="submit"><a href="{{ route('admin.hotels.edit', $hotel->id) }}">ويرايش</a></button></td>
                        <td>
                            <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="login" type="submit">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
@endcomponent
