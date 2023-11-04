<div class="admin">
    <div class="right-part">
        <div class="show-reservation-menu">
            <img src="/images/building_5193766.svg">
            <p>شهر</p>
            <ul class="dropdown">
                <li ><a href="{{ route('admin.cities.create') }}">ایجاد شهر</a></li>
                <li ><a href="{{ route('admin.cities.index') }}">لیست شهرها</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/gallery_833281.svg">
            <p>تصاویر</p>
            <ul class="dropdown">
                <li><a href="{{ route('admin.images.create') }}">ایجاد تصاویر</a></li>
                <li><a href="{{ route('admin.images.index') }}">لیست تصاویر</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/accountt.svg">
            <p>میزبانان</p>
            <ul class="dropdown">
                <li><a href="{{ route('admin.hosts.index') }}">لیست میزبانان</a></li>
                <li><a href="{{ route('admin.hosts.create') }}">ایجاد میزبان</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/hotel_5981565.svg">
            <p>هتل ها</p>
            <ul class="dropdown">
                <li><a href="{{ route('admin.hotels.index') }}">لیست هتل ها</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/testimonial_900356.svg">
            <p>ویژگی ها</p>
            <ul class="dropdown">
                <li><a href="{{ route('admin.attributes.create') }}">ایجاد ویژگی</a></li>
                <li><a href="{{ route('admin.attributes.index') }}">لیست ویژگی ها</a></li>
            </ul>
        </div>
        <div class="show-reservation-menu">
            <img src="/images/coin_2529396.svg">
            <p>پرداختی ها</p>
            <ul class="dropdown">
                <li><a href="{{ route('admin.cashs.index') }}">لیست پرداختی ها</a></li>
            </ul>
        </div>
    </div>
</div>
