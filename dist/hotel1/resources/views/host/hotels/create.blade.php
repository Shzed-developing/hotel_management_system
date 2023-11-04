@component('host.layouts.content')
    @include('host.layouts.sidebar')
    <form action="{{ route('host.hotels.store') }}" method="POST">
        @csrf
        <div class="create-city">
            <div class="city-table">
                <p>نام هتل</p>
                <input name="name" type="text" placeholder="نام هتل را وارد کنید"  />
                <p>تلفن</p>
                <input name="phone" type="text" placeholder="09911234586"  /></br>
                <p>دسته بندی</p>
                <input name="category" type="text" placeholder="دسته بندی را انتخاب کنید"/>
                <p>شهر</p>
                <input name="city" type="text" placeholder="نام هتل را وارد کنید"/>
                <p>مبلغ برای یک شب(تومان)</p>
                <input name="price" type="text" placeholder="هزینه هتل را وارد کنید"  />
                <p>ظرفیت</p>
                <input name="room_capacity" type="text" placeholder="ظرفیت هتل را وارد کنید"  />
                <p>توضیحات</p>
                <input name="description" type="text" placeholder="توضیحات مربوط به هتل" />
                <p>نشانی</p>
                <input name="address" type="text" placeholder="نشانی هتل را وارد کنید" /></br>
                <button class="login" type="submit">تایید</button>

            </div>
        </div>
    </form>
@endcomponent
