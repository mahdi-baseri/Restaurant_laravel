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
    <link href="css/persian-datepicker.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
    <script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datepicker').persianDatepicker(
                {
                    "inline": false,
                    "format": "YYYY/MM/DD",
                    "viewMode": "day",
                    "initialValue": false,
                    // "minDate": 1643674596963,
                    // "maxDate": 1644624996964,
                    "autoClose": true,
                    "position": "auto",
                    "altFormat": "lll",
                    "altField": "#altfieldExample",
                    "onlyTimePicker": false,
                    "onlySelectOnDate": false,
                    "calendarType": "persian",
                    "inputDelay": "800",
                    "observer": true,
                    "calendar": {
                        "persian": {
                            "locale": "fa",
                            "showHint": true,
                            "leapYearMode": "algorithmic"
                        },
                        "gregorian": {
                            "locale": "en",
                            "showHint": true
                        }
                    },
                    "navigator": {
                        "enabled": true,
                        "scroll": {
                            "enabled": true
                        },
                        "text": {
                            "btnNextText": "<",
                            "btnPrevText": ">"
                        }
                    },
                    "toolbox": {
                        "enabled": true,
                        "calendarSwitch": {
                            "enabled": false,
                            "format": "MMMM"
                        },
                        "todayButton": {
                            "enabled": true,
                            "text": {
                                "fa": "امروز",
                                "en": "Today"
                            }
                        },
                        "submitButton": {
                            "enabled": true,
                            "text": {
                                "fa": "تایید",
                                "en": "Submit"
                            }
                        },
                        "text": {
                            "btnToday": "امروز"
                        }
                    },
                    "timePicker": {
                        "enabled": false,
                        "step": "1",
                        "hour": {
                            "enabled": false,
                            "step": null
                        },
                        "minute": {
                            "enabled": false,
                            "step": null
                        },
                        "second": {
                            "enabled": false,
                            "step": null
                        },
                        "meridian": {
                            "enabled": false
                        }
                    },
                    "dayPicker": {
                        "enabled": true,
                        "titleFormat": "YYYY MMMM"
                    },
                    "monthPicker": {
                        "enabled": true,
                        "titleFormat": "YYYY"
                    },
                    "yearPicker": {
                        "enabled": true,
                        "titleFormat": "YYYY"
                    },
                    "responsive": true
                }
            );
            $('.timepicker').persianDatepicker(
                {
                    "inline": false,
                    "format": "mm : HH",
                    "viewMode": "day",
                    "initialValue": false,
                    "minDate": null,
                    "maxDate": null,
                    "autoClose": true,
                    "position": "auto",
                    "altFormat": "HH : mm",
                    "altField": "#altfieldExample",
                    "onlyTimePicker": false,
                    "onlySelectOnDate": false,
                    "calendarType": "persian",
                    "inputDelay": "800",
                    "observer": true,
                    "calendar": {
                        "persian": {
                            "locale": "fa",
                            "showHint": true,
                            "leapYearMode": "algorithmic"
                        },
                        "gregorian": {
                            "locale": "en",
                            "showHint": true
                        }
                    },
                    "navigator": {
                        "enabled": false,
                        "scroll": {
                            "enabled": true
                        },
                        "text": {
                            "btnNextText": "<",
                            "btnPrevText": ">"
                        }
                    },
                    "toolbox": {
                        "enabled": true,
                        "calendarSwitch": {
                            "enabled": false,
                            "format": "MMMM"
                        },
                        "todayButton": {
                            "enabled": false,
                            "text": {
                                "fa": "امروز",
                                "en": "Today"
                            }
                        },
                        "submitButton": {
                            "enabled": true,
                            "text": {
                                "fa": "تایید",
                                "en": "Submit"
                            }
                        },
                        "text": {
                            "btnToday": "امروز"
                        }
                    },
                    "timePicker": {
                        "enabled": true,
                        "step": "1",
                        "hour": {
                            "enabled": true,
                            "step": null
                        },
                        "minute": {
                            "enabled": true,
                            "step": null
                        },
                        "second": {
                            "enabled": false,
                            "step": null
                        },
                        "meridian": {
                            "enabled": false
                        }
                    },
                    "dayPicker": {
                        "enabled": false,
                        "titleFormat": "YYYY MMMM"
                    },
                    "monthPicker": {
                        "enabled": false,
                        "titleFormat": "YYYY"
                    },
                    "yearPicker": {
                        "enabled": false,
                        "titleFormat": "YYYY"
                    },
                    "responsive": true
                }
            )
        });
    </script>


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
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <h1 class="logo">
            <a href="/" class=" text-right">{{setting('site.title')}}</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar" dir="rtl">
            {{menu('main' , 'menu_style')}}
            <i class="bi bi-list mobile-nav-toggle float-start"></i>
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
                        <img src="storage/{{$about->image}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                   {!! $about->text !!}
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
                @foreach($whyus as $key => $whyus_item)
                    <div class="col-lg-4 py-2">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>0{{$key+1}}</span>
                            <h4>{{$whyus_item->title}}</h4>
                            {!! $whyus_item->body !!}
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
                    <ul class="nav nav-tabs flex-column p-0">
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
                                        {!! $specials_item->body !!}
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
    <section id="events" class="events" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>پیشنهادها</h2>
                <p>رویدادهای خود را در رستوران ما سازماندهی کنید</p>
            </div>

            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper-wrapper">

                @foreach($events as $events_item)
                    <div class="swiper-slide" dir="rtl">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="storage/{{$events_item->image}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>{{$events_item->title}}</h3>
                                <div class="price">
                                    <p><span>${{$events_item->cost}}</span></p>
                                </div>
                                {!! $events_item->body !!}
                            </div>
                        </div>
                    </div>

                @endforeach

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
                        <input type="tel" class="form-control" name="phone" id="phone"  maxlength="11" placeholder="شماره همراه" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" name="date" class="form-control datepicker" id="date" autocomplete="off" placeholder="تاریخ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" class="form-control timepicker" name="time" id="time" autocomplete="off" placeholder="ساعت" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people" maxlength="10" placeholder="تعداد افراد" data-msg="Please enter at least 1 chars" required>
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

    <!-- ======= Comments Section ======= -->
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
            </div>

        </div>
    </section><!-- End Gallery Section -->
    <section id="res-gallery"  class="gallery" dir="rtl">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>گالری</h2>
                <p>تصاویر رستوران ما</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach(json_decode($images->images) as $key => $picture)
                            <div class="carousel-item {{$key==0 ? 'active' : ''}}"  data-bs-interval="2000">
                                <div class="col-lg-3 col-md-4">
                                    <div class="gallery-item">
                                        <a href="storage/{{$picture}}" class="gallery-lightbox" data-gall="gallery-item">
                                            <img src="storage/{{$picture}}" alt="" height="260" class="img-fluid w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">--}}
                    {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                    {{--                        <span class="visually-hidden">Previous</span>--}}
                    {{--                    </button>--}}
                    {{--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">--}}
                    {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                    {{--                        <span class="visually-hidden">Next</span>--}}
                    {{--                    </button>--}}
                </div>
            </div>

        </div>
    </section><!-- End res Gallery Section -->


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
                            <img src="storage/{{$chef_item->img}}" class="img-fluid rounded-3 w-100" alt="" style="height: 416px">
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

            </div>

        </div>
    </section>
    <section id="res-chefs" class="chefs" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>آشپزها</h2>
                <p>سرآشپزهای حرفه ای ما</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            {{--                                <div class="carousel-item active">--}}
                            {{--                                    <img src="..." class="d-block w-100" alt="...">--}}
                            {{--                                </div>--}}
                            @foreach($chef as $key => $chef_item)
                                <div class="carousel-item {{$key == 0 ? 'active' : ''}}" data-bs-interval="2200">
                                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                        <img src="storage/{{$chef_item->img}}" class="img-fluid rounded-3 w-100" alt="" style="height: 416px">
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
                        </div>
{{--                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">--}}
{{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact pb-3" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ارتباط</h2>
                <p>ارتباط با ما</p>
            </div>
        </div>
        {{--Google Map--}}
        <div data-aos="fade-up">
            <?php echo setting('site.map')?>
        </div>
        {{-- Contact Elements --}}
        <!--
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

        </div>-->
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
                                @if(setting('social-network.twitter')!== null)
                                    <a href="https://twitter.com/{{setting('social-network.twitter')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                @endif
                                @if(setting('social-network.facebook')!== null)
                                    <a href="https://facebook.com/{{setting('social-network.facebook')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                @endif
                                @if(setting('social-network.instagram')!== null)
                                    <a href="https://instagram.com/{{setting('social-network.instagram')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                                @endif
                                @if(setting('social-network.linkedin')!== null)
                                    <a href="https://linkedin.com/{{setting('social-network.linkedin')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                @endif

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6 footer-links">
                    <h4>لینک های مفید</h4>
                    {{menu('useful','footer_menu')}}
                </div>

                <div class="col-lg-3 col-md-6 col-6 footer-links">
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
