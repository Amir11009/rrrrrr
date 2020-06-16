@extends('layout.layout')
@section('content')
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>404</h1>
                        <h2>وای! صفحه مورد نظر یافت نشد</h2>
                        <p>متاسفیم صفحه ای که به دنبال آن هستید وجود ندارد.
                            <br> احتمالا حذف شده، تغییر نام یافته و یا به طور موقت قابل دسترسی نیست.</p>
                        <form action="/product/search" method="post">
                            {{csrf_field()}}
                            <input placeholder="جستجو ..." type="text" name="search">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                        <a href="/">بازگشت به صفحه خانه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
@endsection