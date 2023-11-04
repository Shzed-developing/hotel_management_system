@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <form action="{{ route('host.profile.update', auth()->user()->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="create-city">
            <p>ویرایش کاربر</p>
            <div class="city-table">
                <p>نام </p>
                <input name="name" type="text" placeholder="ميزبان" value="{{ auth()->user()->name }}"/>
                <p>ایمیل</p>
                <input name="email" type="email" placeholder="ایمیل" value="{{ auth()->user()->email }}"/>
                <p>رمز عبور فعلي</p>
                <input name="password" type="text" placeholder="رمز فعلي خود را وارد کنید" /></br>
                <p>رمز عبور جديد</p>
                <input name="password" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <p>تکرار رمز عبور جديد</p>
                <input name="password_confirmation" type="text" placeholder="رمز جديد خود را وارد کنید"/></br>
                <button class="login" type="submit">تایید</button>
            </div>
        </div>
    </form>
@endcomponent
