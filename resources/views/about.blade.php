@extends('layout.layout')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li>درباره ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--about section area -->
    <section class="about_section mt-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="/{{$about['image']}}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>{{$about['title']}}</h1>
                            {!! $about['text'] !!}
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--services img area-->
{{--    <div class="about_gallery_section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <article class="single_gallery_section">--}}
{{--                        <figure>--}}
{{--                            <div class="gallery_thumb">--}}
{{--                                <img src="/assets/img/about/about2.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="about_gallery_content">--}}
{{--                                <h3>ما چکار می کنیم؟</h3>--}}
{{--                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <article class="single_gallery_section">--}}
{{--                        <figure>--}}
{{--                            <div class="gallery_thumb">--}}
{{--                                <img src="assets/img/about/about3.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="about_gallery_content">--}}
{{--                                <h3>تاریخچه ما</h3>--}}
{{--                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--services img end-->

    <!--chose us area start-->
    <div class="choseus_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="assets/img/about/About_icon1.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>تضمین بازگشت وجه</h3>
                            <p>تضمین بازگشت وجه تا 7 روز پس از خرید محصول</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="/assets/img/about/About_icon2.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>پرداخت ایمن</h3>
                            <p>پرداخت با کلیه کارت های عضو شتاب از طریق درگاه بانکی</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="/assets/img/about/About_icon3.png" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>کیفیت بالا</h3>
                            <p>کلیه محصولات این فروشگاه اصلی و با ضمانت می باشد</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--chose us area end-->

{{--    <!--team area start-->--}}
{{--    <div class="team_area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <article class="team_member">--}}
{{--                        <figure>--}}
{{--                            <div class="team_thumb">--}}
{{--                                <img src="assets/img/about/about-us-person1.png" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="team_content">--}}
{{--                                <h3>جان</h3>--}}
{{--                                <h5>کارگردان</h5>--}}
{{--                                <p>تلفن: <span class="ltr-text">+(98) 123 456 789</span>--}}
{{--                                    <br> ایمیل: john@example.com</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <article class="team_member">--}}
{{--                        <figure>--}}
{{--                            <div class="team_thumb">--}}
{{--                                <img src="assets/img/about/about-us-person2.png" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="team_content">--}}
{{--                                <h3>مریم</h3>--}}
{{--                                <h5>طراح</h5>--}}
{{--                                <p>تلفن: <span class="ltr-text">+(98) 123 456 789</span>--}}
{{--                                    <br> ایمیل: john@example.com</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <article class="team_member">--}}
{{--                        <figure>--}}
{{--                            <div class="team_thumb">--}}
{{--                                <img src="assets/img/about/about-us-person3.png" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="team_content">--}}
{{--                                <h3>محسن</h3>--}}
{{--                                <h5>توسعه دهنده</h5>--}}
{{--                                <p>تلفن: <span class="ltr-text">+(98) 123 456 789</span>--}}
{{--                                    <br> ایمیل: john@example.com</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <article class="team_member">--}}
{{--                        <figure>--}}
{{--                            <div class="team_thumb">--}}
{{--                                <img src="assets/img/about/about-us-person4.png" alt="">--}}
{{--                            </div>--}}
{{--                            <figcaption class="team_content">--}}
{{--                                <h3>جیمز</h3>--}}
{{--                                <h5>کدنویس</h5>--}}
{{--                                <p>تلفن: <span class="ltr-text">+(98) 123 456 789</span>--}}
{{--                                    <br> ایمیل: john@example.com</p>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--team area end-->--}}

@endsection