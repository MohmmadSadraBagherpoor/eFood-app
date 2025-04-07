<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>webprog.io || @yield('title')</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @yield('link')

</head>
<body>
    <div>
        <div class="hero_area">
            <div class="bg-box">
                <img src="{{ asset('/images/hero-bg.jpg') }}" alt="">
            </div>
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                webprog.io
                            </span>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="menu.html">منو</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">تماس باما</a>
                                </li>
                            </ul>
                            <div class="user_option">
                                <a class="cart_link position-relative" href="cart.html">
                                    <i class="bi bi-cart-fill text-white fs-5"></i>
                                    <span class="position-absolute top-0 translate-middle badge rounded-pill">
                                        3
                                    </span>
                                </a>
                                <a href="login.html" class="btn-auth">
                                    ورود
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section">
                <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6">
                                        <div class="detail-box">
                                            <h2 class="mb-3 fw-bold">
                                                لورم ایپسوم متن 
                                            </h2>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                                از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود
                                                ابزارهای کاربردی می باشد.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    سفارش
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6">
                                        <div class="detail-box">
                                            <h2 class="mb-3 fw-bold">
                                                لورم ایپسوم متن ساختگی
                                            </h2>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                                از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود
                                                ابزارهای کاربردی می باشد.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    سفارش
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6">
                                        <div class="detail-box">
                                            <h2 class="mb-3 fw-bold">
                                                لورم ایپسوم متن ساختگی
                                            </h2>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                                از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود
                                                ابزارهای کاربردی می باشد.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    سفارش
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#customCarousel1" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#customCarousel1" data-bs-slide-to="1"></li>
                            <li data-bs-target="#customCarousel1" data-bs-slide-to="2"></li>
                        </ol>
                    </div>
                </div>

            </section>

            <!-- end slider section -->
        </div>
    </div>