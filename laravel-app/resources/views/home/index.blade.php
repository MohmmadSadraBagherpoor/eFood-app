@extends('layout.master')
@section('title', 'Home Page')

@section('link')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
@endsection

@section('script')
    <script>
        var map = L.map('map').setView([35.700105, 51.400394], 14);
        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
        }).addTo(map);
        var marker = L.marker([35.700105, 51.400394]).addTo(map)
            .bindPopup('<b>webprog</b>').openPopup();
    </script>
@endsection

@section('content')

    @include('home.feature')

    <!-- food section -->
    <section class="food_section layout_padding-bottom">
        <div class="container" x-data="{ tab: 1 }">
            <div class="heading_container heading_center">
                <h2>
                    منو محصولات
                </h2>
            </div>

            <ul class="filters_menu">
                <li :class="tab === 1 ? 'active' : ''" @click="tab = 1">برگر</li>
                <li :class="tab === 2 ? 'active' : ''" @click="tab = 2">پیتزا</li>
                <li :class="tab === 3 ? 'active' : ''" @click="tab = 3">پیش غذا و سالاد</li>
            </ul>

            <div class="filters-content">
                <div x-show="tab === 1">
                    <div class="row grid">
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/b1.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            برگر مخصوص
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                <del>95,000</del>
                                                <span>
                                                    <span class="text-danger">(16%)</span>
                                                    80,000
                                                    <span>تومان</span>
                                                </span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/b2.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            چیز برگر
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                110,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/b3.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            رویال برگر
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                121,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 2">
                    <div class="row grid">
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/p1.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            پیتزا مخصوص 1 نفره
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                200,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/p2.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            پیتزا مخصوص خانواده
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                <del>450,000</del>
                                                <span>
                                                    <span class="text-danger">(20%)</span>
                                                    360,000
                                                    <span>تومان</span>
                                                </span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/p3.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            پیتزا سرآشپز
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                300,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 3">
                    <div class="row grid">
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/s1.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            سالاد فصل
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                34,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/s2.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            سالاد کلم
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                44,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="./images/s3.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            سالاد سزار
                                        </h5>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                144,000
                                                <span>تومان</span>
                                            </h6>
                                            <div class="d-flex">
                                                <a class="me-2" href="">
                                                    <i class="bi bi-cart-fill text-white fs-6"></i>
                                                </a>
                                                <a href="">
                                                    <i class="bi bi-heart-fill  text-white fs-6"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-box">
                <a href="">
                    مشاهده بیشتر
                </a>
            </div>
        </div>
    </section>
    <!-- end food section -->

    <!-- about section -->
    @include('home.about')
    <!-- end about section -->

    <!-- contact section -->
    @include('home.contact')
    <!-- end contact section -->
@endsection
