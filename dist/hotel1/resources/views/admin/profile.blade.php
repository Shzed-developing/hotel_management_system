@component('admin.layouts.content')
    @include('admin.layouts.sidebar')

    <div class="create-city">
        <p class="title">اطلاعات</p>
        <div class="city-tables">
            <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>نقش</th>
                    <th>ویرایش</th>
                </tr>
                <tr>
                    <td>{{ auth()->user()->id }}</td>
                    <td>{{ auth()->user()->name }}</td>
                    <td>{{ auth()->user()->email }}</td>
                    <td>{{ auth()->user()->is_admin }}</td>
                    <td><button class="login" type="submit"><a href="{{ route('admin.profile.edit', auth()->user()->id) }}">ویرایش</a></button></td>
                </tr>
            </table>
        </div>
    </div>
@endcomponent
