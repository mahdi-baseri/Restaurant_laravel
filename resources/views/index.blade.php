<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{setting('site.title')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="storage/{{setting('site.logo')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Resturant Baseri Web
    * Author: Baseri Web Group
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-phone d-flex align-items-center"><a href="tel:{{setting('site.number')}}" style="color: white">{{setting('site.number')}}</a></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span id="time"></span></i>
        </div>

        <div class="languages d-none d-md-flex align-items-center">
            <ul>
                <li>Fa</li>
                <li><a href="#">En</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" dir="rtl">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">{{setting('site.title')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0 " dir="rtl">
            {{menu('main' , 'menu_style')}}
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex"><b>رزرو میز</b></a>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row flex-row-reverse">
            <div class="col-lg-8 mb-5">
                <h1 class="mb-3">به <span>{{setting('site.title')}} </span>خوش آمدید </h1>
                <h2>{{setting('site.description')}}</h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">منو ما</a>
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">رزرو میز</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>رستوران</h3>
                    <p class="fst-italic">
                        رستوران ما از سال 1390 تا الان مشغول به کار میباشد.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> با بیش از 10 شعبه در سراسر کشور.</li>
                        <li><i class="bi bi-check-circle"></i>10 سال سابقه.</li>
                        <li><i class="bi bi-check-circle"></i>دارای لوح بهترین رستوران از وزارت بهداشت.</li>

                    </ul>

                    <p>


                        رستوران ما در یک محیط بسیار جذاب و دنج قرار دارد که بهترین غذاهای سنتی و فست فود را برای مشتریان خود فراهم می کند. <br> کیفیت و تنوع غذایی رستوران ما بسیار زیاد است که برای هر ذائقه ای مناسب می باشد.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>چرا ما</h2>
                <p>چرا رستوران ما را انتخاب کنید</p>
            </div>

            <div class="row">
                @foreach($whyus as $whyus_item)
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>0{{$whyus_item->id}}</span>
                            <h4>{{$whyus_item->title}}</h4>
                            <?php echo $whyus_item->body ?>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg" dir="rtl" >
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>منو</h2>
                <p>منوی خوشمزه ما را بررسی کنید</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">همه</li>
                        @foreach($category as $cat_item)
                            <li data-filter="#cat_{{$cat_item->id}}">{{$cat_item->name}} </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($product as $product_item)
                    <div class="col-lg-6 menu-item" id="cat_{{$product_item->cat_id}}">
                        <img src="storage/{{$product_item->img}}" class="menu-img" width="70" height="70"  alt="">
                        <div class="menu-content">
                            <a href="#">{{$product_item->name}}</a><span>{{$product_item->cost}}</span>
                        </div>
                        <div class="menu-ingredients">
                            {{$product_item->intro}}
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">سوپ خرچنگ</a><span>75.000</span>
                    </div>
                    <div class="menu-ingredients">
                        خرچنگ ، پنیر ، روغن ، جو ، گوشت
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">نان سوخاری</a><span>25.000</span>
                    </div>
                    <div class="menu-ingredients">
                        پودر نارگیل ، روغن ، جو ، گندم
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="/img/menu/cake.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">کیک خرچنگ</a><span>53.000</span>
                    </div>
                    <div class="menu-ingredients">
                        کیک خرچنگی ظریفی که روی رول سوخاری با سس کاهو و تارتار سرو می شود.            </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="/img/menu/caesar.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">سالاد سزار</a><span>35.000</span>
                    </div>
                    <div class="menu-ingredients">
                        روغن زیتون، لیمو ترش ، نان تست ، کاهو ، فیله مرغ
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">مرغ سخاری</a><span>85.000</span>
                    </div>
                    <div class="menu-ingredients">
                        مرغ گریل شده با سس مخصوص.
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="/img/menu/mozzarella.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#"> بشقاب مزارلا </a><span>61.000</span>
                    </div>
                    <div class="menu-ingredients">
                        پنیر مزارلا ، نان سخواری ، فیله مرغ
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">سالاد اسفناج</a><span>76.000</span>
                    </div>
                    <div class="menu-ingredients">
                        اسفناج تازه با قارچ ، تخم مرغ آب پز سفت و وینگرت بیکن گرم</div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="/img/menu/greek-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">سالاد یونانی</a><span>93.000</span>
                    </div>
                    <div class="menu-ingredients">
                        اسفناج تازه، رومی ترد، گوجه فرنگی و زیتون یونانی</div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">رول خرچنگ</a><span>47.000</span>
                    </div>
                    <div class="menu-ingredients">
                        گوشت خرچنگ چاق ، سس مایونز و کاهوی ترد روی یک رول حجیم برشته شده
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ویژه ها</h2>
                <p>ویژه های ما را بررسی کنید</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @foreach($specials as $specials_item)
                            <li class="nav-item">
                                <a class="nav-link @if($specials_item->id == 1) active @endif show" data-bs-toggle="tab" href="#tab-item-{{$specials_item->id}}">{{$specials_item->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach($specials as $specials_item)
                            <div class="tab-pane @if($specials_item->id == 1) active @endif show" id="tab-item-{{$specials_item->id}}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>{{$specials_item->name}}</h3>
                                        <?php echo ($specials_item->body)?>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="storage/{{$specials_item->img}}" alt="" class="img-fluid my-2 rounded-circle">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Events</h2>
                <p>Organize Your Events in our Restaurant</p>
            </div>

            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="/img/event-birthday.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Birthday Parties</h3>
                                <div class="price">
                                    <p><span>$189</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="/img/event-private.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Private Parties</h3>
                                <div class="price">
                                    <p><span>$290</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="/img/event-custom.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Custom Parties</h3>
                                <div class="price">
                                    <p><span>$99</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>رزرو</h2>
                <p>رزرو میز</p>
            </div>

            <form action="{{url('/book')}}" method="post" class="form-custom-css" data-aos="fade-up">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="نام شما" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="شماره همراه" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="date" name="date" class="form-control" id="date" placeholder="تاریخ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="time" class="form-control" name="time" id="time" placeholder="ساعت" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people" placeholder="تعداد افراد" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="پیام"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    @if(session()->has('message'))
                        <div class="d-flex justify-content-center">
                            <span class="alert alert-success px-4">
                                {{ session()->get('message') }}
                            </span>
                        </div>
                    @endif
                </div>
                <div class="text-center"><button type="submit">رزرو میز</button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>نظرها</h2>
                <p>نظرات شما درباره ما</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx mx-2 bxs-quote-alt-left quote-icon-left"></i>
                                نظرات شما در اینجا قرار میگیرد. شما میتوانید نظرات خود را درباره ی کیفیت رستوران و غذا ثبت کنید تا در اینجا نمایش داده شود.
                                نطرات و انتقادات شما باعث افتخار ماست و با تمام تلاش به انها رسیدگی میشود.
                                <i class="bx mx-2 bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx mx-2 bxs-quote-alt-left quote-icon-left"></i>
                                نظرات شما در اینجا قرار میگیرد. شما میتوانید نظرات خود را درباره ی کیفیت رستوران و غذا ثبت کنید تا در اینجا نمایش داده شود.
                                نطرات و انتقادات شما باعث افتخار ماست و با تمام تلاش به انها رسیدگی میشود.
                                <i class="bx mx-2 bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx mx-2 bxs-quote-alt-left quote-icon-left"></i>
                                نظرات شما در اینجا قرار میگیرد. شما میتوانید نظرات خود را درباره ی کیفیت رستوران و غذا ثبت کنید تا در اینجا نمایش داده شود.
                                نطرات و انتقادات شما باعث افتخار ماست و با تمام تلاش به انها رسیدگی میشود.
                                <i class="bx mx-2 bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx mx-2 bxs-quote-alt-left quote-icon-left"></i>
                                نظرات شما در اینجا قرار میگیرد. شما میتوانید نظرات خود را درباره ی کیفیت رستوران و غذا ثبت کنید تا در اینجا نمایش داده شود.
                                نطرات و انتقادات شما باعث افتخار ماست و با تمام تلاش به انها رسیدگی میشود.
                                <i class="bx mx-2 bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx mx-2 bxs-quote-alt-left quote-icon-left"></i>
                                نظرات شما در اینجا قرار میگیرد. شما میتوانید نظرات خود را درباره ی کیفیت رستوران و غذا ثبت کنید تا در اینجا نمایش داده شود.
                                نطرات و انتقادات شما باعث افتخار ماست و با تمام تلاش به انها رسیدگی میشود.
                                <i class="bx mx-2 bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery" dir="rtl">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>گالری</h2>
                <p>چند عکس از رستوران ما</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">
                @foreach(json_decode($images->images) as $picture)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="storage/{{$picture}}" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="storage/{{$picture}}" alt="" height="260" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-2.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-3.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-4.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-5.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-6.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-7.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="/img/gallery/gallery-8.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>آشپزها</h2>
                <p>سرآشپزهای حرفه ای ما</p>
            </div>

            <div class="row">

                @foreach($chef as $chef_item)
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="storage/{{$chef_item->img}}" height="416"  class="img-fluid rounded-3" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{$chef_item->name}}</h4>
                                    <span>{{$chef_item->major}}</span>
                                </div>
                                <div class="social">
                                    @if(isset($chef_item->twitter))
                                        <a href="https://www.twitter.com/{{$chef_item->twitter}}"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if(isset($chef_item->facebook))
                                         <a href="https://www.facebook.com/{{$chef_item->facebook}}"><i class="bi bi-facebook"></i></a>
                                        @endif
                                    @if(isset($chef_item->instagram))
                                        <a href="https://www.instagram.com/{{$chef_item->instagram}}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                        @if(isset($chef_item->linkedin))
                                            <a href="https://www.linkedin.com/{{$chef_item->linkedin}}"><i class="bi bi-linkedin"></i></a>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/img/chefs/nusret.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>نصرت</h4>
                                <span>سرآشپز</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>سارا جانسن</h4>
                                <span>کیک پز</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="/img/chefs/chefs-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>ویلیام اندرسون</h4>
                                <span>آشپز</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ارتباط</h2>
                <p>ارتباط با ما</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.92925795774!2d51.45253651562243!3d35.80166998016657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e05b9213a0ef5%3A0xeb00fed564218403!2sTehran%20Province%2C%20Tehran%2C%20Andarzgoo%20Blvd%2C%20Iran!5e0!3m2!1sen!2s!4v1637914977788!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
        </div>


        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>موقعیت :</h4>
                            <p>تهران ، اندرزگو ، خیابان اسماعیلی</p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>ساعت کاری :</h4>
                            <p>
                                شنبه - پنجشنبه :<br>
                                11:00 - 22:00
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>ایمیل :</h4>
                            <p>m.mahdibaseri@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>تماس :</h4>
                            <p>0937-196-2511</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="نام شما">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="8" placeholder="پیام"></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">درحال بارگذاری</div>
                            <div class="error-message"></div>
                            <div class="sent-message">پیام شما با موفقیت ارسال شد. با تشکر از شما</div>
                        </div>
                        <div class="text-center"><button type="submit">ارسال پیام</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" dir="rtl">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>رستوران</h3>
                        <p>
                            <p class="mb-2">{{setting('site.adress')}}</p>
                            <strong>تماس : </strong><a href="tel:{{setting('site.number')}}" > {{setting('site.number')}} </a><br>
                            <strong>ایمیل : </strong><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://instagram.com/baseri.web/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>لینک های مفید</h4>
                    {{menu('useful','footer_menu')}}
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>سیرویس های ما</h4>
                    {{menu('servies' , 'footer_menu')}}
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>خبرنامه ما</h4>
                    <p>برای اطلاع از غذاهای ما و کارهای خفن ما در خبرنامه عضو شوید.</p>
                        <form action="" method="post">
                        <input type="email" name="email"><input type="submit" class="" value="عضویت">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span> M.mahdi_bsr </span></strong> . All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://instagram.com/M.mahdi_bsr/">M.mahdi_bsr</a>
        </div>
    </div>
</footer><!-- End Footer -->

{{--<div id="preloader"></div>--}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>
<script type="text/javascript">
    function showTime() {
        var date = new Date(),
            utc = new Date(Date.now(
                date.getFullYear(),
                date.getMonth(),
                date.getDate(),
                date.getHours(),
                date.getMinutes(),
                date.getSeconds()
            ));

        document.getElementById('time').innerHTML = utc.toLocaleTimeString();
    }

    setInterval(showTime, 1000);
</script>
<!-- Template Main JS File -->
<script src="/js/main.js"></script>

</body>

</html>
