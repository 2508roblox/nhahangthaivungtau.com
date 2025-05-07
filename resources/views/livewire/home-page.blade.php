<div>

    <head>

        <title>Nhà Hàng Đảo Ngọc</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=2EnyLwmDl') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=MLwqP5mmej') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=wMEgXNJI8u') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=ivUH6EExTz') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=hN3FU5E080') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=u8oFowvBLq') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=glsWC6TgSU') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=ORteRAK4T6') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=x7CVkpvQKG') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=d43CHatwWV') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=HBDrl9bbdL') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=lqbsEE4c0') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=rNg7Kv67c2') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=vutNLFFLl2') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=EPQGfLfQIA') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=H9Erb0RhvY') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=U9Jw9XlGvd') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=efyzHx02e9') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=5twWoHMAVJ') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=yiGnH67V4r') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=KwGTm2wYEZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=cMcimPStfc') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=WrBgdnZC8') }}" rel="stylesheet">

        <!-- Background -->

        <!-- Js Google Analytic -->

        <!-- Js Head -->
    </head>

    <body class="index">
        <ul class="h-card hidden">
            <li class="h-fn fn">Ẩm Thực Đảo Ngọc</li>
            <li class="h-org org">Ẩm Thực Đảo Ngọc</li>
            <li class="h-tel tel">0918606032</li>
            <li><a class="u-url ul" href="https://nhahangthaivungtau.com/">https://nhahangthaivungtau.com/</a></li>
        </ul>
        <h1 class="hidden-seoh">Nhà Hàng Đảo Ngọc</h1>
        @livewire('header')
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div class="owl-carousel owl-theme owl-slideshow">
                @foreach ($slides as $slide)
                    <div>
                        <a href="" target="_blank" title="Slideshow 1"><img
                                onerror="this.src='/thumbs/1366x600x2/assets/images/noimage.png';"
                                src="{{ Storage::url($slide->image_link) }}" alt="Slideshow 1"
                                title="Slideshow 1" /></a>
                    </div>
                @endforeach
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
        <div id="intro">
            <div class="center d-flex flex-wrap justify-content-between">
                <div class="intro-right animate__animated animate__fadeInRight wow">
                    <h1 style="color:#e3b505 ; font-size: 4rem; font-weight: bold;">KHAY PHA THAI</h1>
                    <div class="intro-image intro-image1 scale-img">
                        <img onerror="this.src='/thumbs/331x420x2/assets/images/noimage.png';"
                            src="{{ asset('/logo/image 9.png') }}" />
                    </div>
                </div>
                <div class="intro-left animate__animated animate__fadeInLeft wow">
                    <h2>VỀ CHÚNG TÔI</h2>
                    <div class="intro-info" style="color: #fff;">
                        <p>Được mệnh danh <strong>“xứ sở chùa Vàng”</strong>, không chỉ có chùa chiền mà văn hóa ẩm thực
                            Thái Lan cũng rất độc đáo.</p>
                        <br>
                        <p>Bếp Khay-Pha Thai là sự kế thừa và hoàn thiện từ thương hiệu Koh Samui, với mô hình căn bếp
                            Thái
                            gần gũi, thân thiện cùng gần 100 món ăn và đồ tráng miệng kiểu Thái nhằm tiếp đãi những
                            người
                            bạn Việt ghé thăm thưởng thức mỗi ngày</p>
                        <br>
                        <p>Được mệnh danh <strong>“xứ sở chùa Vàng”</strong>, không chỉ có chùa chiền mà văn hóa ẩm thực
                            Thái Lan cũng rất độc đáo.</p>
                    </div>
                    <div
                        style="
                    width: 100%;
                    display: flex;
                    justify-content: end;
                ">

                        <a style="background: url('{{ asset('logo/Frame 7.png') }}') no-repeat center center; background-size: 100% 100%; color: #fff;"
                            href="gioi-thieu" class="intro-btn">Xem Thêm</a>
                        <style>
                            .intro-btn {
                                border: inherit;
                            }
                        </style>
                    </div>
                </div>

            </div>
        </div>
        <img src="/logo/Frame_90-removebg-preview.png" style="width: 100%;" alt="Ẩm Thực Đảo Ngọc">
        <div id="intro" style="
        background: #015134;
    ">
            <div class="center d-flex flex-wrap justify-content-between">
                <div class="intro-right animate__animated animate__fadeInRight wow">
                    <h1 style="color:#e3b505;font-size: 3rem;font-weight: bold;text-align: center;width: 100%;">MÓN NGON
                        <br> NHẤT ĐỊNH PHẢI THỬ
                    </h1>
                    <div
                        style="background-color: #0c4f39; color: #fff; font-family: sans-serif; padding: 30px; text-align: center; max-width: 600px; margin: auto; border: 3px solid #daa520;">
                        <div style="margin-bottom: 20px;">
                            <h2 style="font-size: 18px; font-weight: normal;">
                                Được mệnh danh <strong style="color: #f8e08e;"><em>“xứ sở chùa Vàng”</em></strong>,
                                không chỉ có chùa chiền<br>
                                mà văn hóa ẩm thực Thái Lan cũng rất độc đáo.
                            </h2>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <img src="/logo/image 26 (1).png" alt="Món Thái 1" style="width: 100%; border-radius: 8px;">
                            <h3 style="margin-top: 15px;">Menu Buffet Lẩu Thái 229k</h3>
                            <p style="color: #f8e08e; font-weight: bold;">Giá: 229k</p>
                        </div>

                        <div>
                            <img src="/logo/image 27.png" alt="Món Thái 2" style="width: 100%; border-radius: 8px;">
                            <h3 style="margin-top: 15px;">Menu Buffet Lẩu Thái 229k</h3>
                            <p style="color: #f8e08e; font-weight: bold;">Giá: 229k</p>
                        </div>
                    </div>

                </div>
                <div class="intro-left animate__animated animate__fadeInLeft wow">
                    <h1 style="color:#e3b505;font-size: 3rem;font-weight: bold;text-align: center;width: 100%;">BEST
                        SELLER</h1>
                    <div>
                        <img src="{{ asset('logo/image.png') }}" alt="Món Thái 1"
                            style="width: 100%; border-radius: 8px;">
                    </div>

                </div>

            </div>
        </div>
        <div id="intro" style="
        background: #015134;
    ">
            <div class="center d-flex flex-wrap justify-content-between">
                <div
                    style="background-color: #0c4f39;padding: 40px 20px;text-align: center;font-family: sans-serif;width: 100%;">
                    <!-- Tiêu đề -->
                    <h2
                        style="color: #fcd34d; font-size: 32px; font-weight: bold; letter-spacing: 1px; margin-bottom: 30px;">
                        MENU TẠI KHAY-PHA THAI
                    </h2>

                    <!-- Thanh menu các món -->
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px;">
                        <div
                            style="background-color: #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px; font-weight: bold;">
                            Món đặc biệt
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Lẩu thái
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Cơm trộn
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Gỏi Somtum
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Món khác
                        </div>
                    </div>
                    <div>
                        <img src="/logo/Screenshot 2025-05-07 110643.png" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div id="intro" style="
        background: #015134;
    ">
            <div class="center d-flex flex-wrap justify-content-between">
                <div
                    style="background-color: #0c4f39;padding: 40px 20px;text-align: center;font-family: sans-serif;width: 100%;">
                    <!-- Tiêu đề -->
                    <h2
                        style="color: #fcd34d; font-size: 32px; font-weight: bold; letter-spacing: 1px; margin-bottom: 30px;">
                        MÓN ĂN ĐẶC SẮC
                    </h2>

                    <!-- Thanh menu các món -->
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px;">
                        <div
                            style="background-color: #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px; font-weight: bold;">
                            Món đặc biệt
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Lẩu thái
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Cơm trộn
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Gỏi Somtum
                        </div>
                        <div style="border: 1px solid #fbbf24; color: #fff; padding: 10px 25px; border-radius: 30px;">
                            Món khác
                        </div>
                    </div>
                    <div>
                        <style>
                            .asdf {
                                font-weight: bold;
                                color: #ffffff;
                                font-size: 15px;
                            }

                            .cart_pd:hover>.card {
                                background-color: #ffc44c !important;
                            }

                            .cart_pd strong {
                                color: #ffc44c !important;
                            }

                            .cart_pd:hover .asdf {
                                color: #000000 !important;
                            }

                            .cart_pd:hover strong {
                                color: #000000 !important;
                            }

                            .lslsl {
                                padding: 15px;
                                border-radius: 15px;
                                background-color: transparent;
                                border: 1px solid #fbbf24;
                            }

                            @media (max-width: 768px) {
                                #reviews {
                                    gap: 20px;
                                }
                            }
                        </style>
                        <div class="row g-4" id="reviews" style="margin-top: 20px;">

                            <!-- Thẻ nổi bật -->
                            <div class="col-md-3 cart_pd" style="background-color: transparent;">
                                <div class="card card-custom highlight lslsl">
                                    <img style="
                                border-radius: 15px;
                            "
                                        src="/logo/Screenshot 2025-05-07 173212.png" class="card-img-top"
                                        alt="Món 1">
                                    <div class="card-body">
                                        <div class="asdf title">Menu Buffet Lẩu Thái</div>
                                        <div class="asdf price"
                                            style="
                                  font-size: 20px;
                              ">
                                            Giá: <strong style="color: #fbbf24;">229k</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 cart_pd" style="background-color: transparent;">
                                <div class="card card-custom highlight lslsl">
                                    <img style="
                                border-radius: 15px;
                            "
                                        src="/logo/Screenshot 2025-05-07 173212.png" class="card-img-top"
                                        alt="Món 1">
                                    <div class="card-body">
                                        <div class="asdf title">Menu Buffet Lẩu Thái</div>
                                        <div class="asdf price"
                                            style="
                                  font-size: 20px;
                              ">
                                            Giá: <strong style="color: #fbbf24;">229k</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 cart_pd" style="background-color: transparent;">
                                <div class="card card-custom highlight lslsl">
                                    <img style="
                                border-radius: 15px;
                            "
                                        src="/logo/Screenshot 2025-05-07 173212.png" class="card-img-top"
                                        alt="Món 1">
                                    <div class="card-body">
                                        <div class="asdf title">Menu Buffet Lẩu Thái</div>
                                        <div class="asdf price"
                                            style="
                                  font-size: 20px;
                              ">
                                            Giá: <strong style="color: #fbbf24;">229k</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 cart_pd" style="background-color: transparent;">
                                <div class="card card-custom highlight lslsl">
                                    <img style="
                                border-radius: 15px;
                            "
                                        src="/logo/Screenshot 2025-05-07 173212.png" class="card-img-top"
                                        alt="Món 1">
                                    <div class="card-body">
                                        <div class="asdf title">Menu Buffet Lẩu Thái</div>
                                        <div class="asdf price"
                                            style="
                                  font-size: 20px;
                              ">
                                            Giá: <strong style="color: #fbbf24;">229k</strong></div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
        <style>
            h1.review-title {
                text-align: center;
                color: #015134;
                font-weight: bold;
                font-size: 3rem;
                margin: 20px 0;
            }

            @media (max-width: 768px) {
                #reviewaf {
                    gap: 20px;
                }
                /* .ljaksfdsss{
                    flex-direction: column !important;
                } */
            }
        </style>
        <div class="container"
            style="
        background: white;
        padding: 20px;
        border-radius: 20px;
    ">
            <h1 class="review-title">REVIEW ẨM THỰC</h1>
            <div class="row" id="reviewaf">
                <div class="col-md-4">
                    <div class="card" style="
                    position: relative;
                    ">
                        <img src="/logo/Screenshot 2025-05-07 174624.png" class="card-img-top" alt="Food Image"
                            style="
                        border-radius: 20px;
                    ">
                        <div class="card-body"
                            style="
                        display: flex;
                        justify-content: space-between;
                        position: absolute;
                            width: 100%;
                    ">
                            <div
                                style="
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            text-align: center;
                        ">
                                <img src="{{ Storage::url($setting->web_favicon) }}" alt=""
                                    style="
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                ">
                                <h5 class="card-title"
                                    style="
                                margin: inherit;
                                margin-left: 10px;
                                color: #ffffff;
                                font-size: 1.2rem;
                                font-weight: bold;
                            ">
                                    KHAY-PHA THAI</h5>

                            </div>
                            <a href="#" class="share-link">► Share</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="
                    position: relative;
                    ">
                        <img src="/logo/Screenshot 2025-05-07 174624.png" class="card-img-top" alt="Food Image"
                            style="
                        border-radius: 20px;
                    ">
                        <div class="card-body"
                            style="
                        display: flex;
                        justify-content: space-between;
                        position: absolute;
                            width: 100%;
                    ">
                            <div
                                style="
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            text-align: center;
                        ">
                                <img src="{{ Storage::url($setting->web_favicon) }}" alt=""
                                    style="
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                ">
                                <h5 class="card-title"
                                    style="
                                margin: inherit;
                                margin-left: 10px;
                                color: #ffffff;
                                font-size: 1.2rem;
                                font-weight: bold;
                            ">
                                    KHAY-PHA THAI</h5>

                            </div>
                            <a href="#" class="share-link">► Share</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="
                    position: relative;
                    ">
                        <img src="/logo/Screenshot 2025-05-07 174624.png" class="card-img-top" alt="Food Image"
                            style="
                        border-radius: 20px;
                    ">
                        <div class="card-body"
                            style="
                        display: flex;
                        justify-content: space-between;
                        position: absolute;
                            width: 100%;
                    ">
                            <div
                                style="
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            text-align: center;
                        ">
                                <img src="{{ Storage::url($setting->web_favicon) }}" alt=""
                                    style="
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                ">
                                <h5 class="card-title"
                                    style="
                                margin: inherit;
                                margin-left: 10px;
                                color: #ffffff;
                                font-size: 1.2rem;
                                font-weight: bold;
                            ">
                                    KHAY-PHA THAI</h5>

                            </div>
                            <a href="#" class="share-link">► Share</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" style="    padding-top: 100px;">
            <div class=" bg-transparent text-white" style="    margin: 50px 0;">
                <div class="row ljaksfdsss">
                    <div class="col-md-5 col-12" style="    justify-content: center;    display: flex;    flex-direction: column;">
                        <h1 class="display-4"
                            style="     font-size: 2.4rem; ">CẨM NANG <br> TẠI
                            KHAY-PHA THAI</h1>
                        <p>Được mệnh danh "xứ sở chùa Vàng", không chỉ có chùa chiền mà văn hóa ẩm thực Thái Lan cũng
                            rất độc đáo.

                        </p>
                    </div>
                    <div class="col-md-7 col-12">
                        <div
                            style="    border: 1px solid #fbbf24;    border-radius: 20px;">

                            <img style="    border-radius: 20px;"
                                src="http://127.0.0.1:8000/logo/Screenshot 2025-05-07 181424.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <style>
            .card:hover .owowo {
                    color: #fbbf24 !important;
                }
                @media (max-width: 768px) {
                    .lasdf {
                        left: 0px !important;
                    }
                    .ljaksfd{
                        gap: 20px !important;
                    }
                }
            </style>
            <div class="row ljaksfd">

                <div class="col-md-4">
                    <div class="card bg-light" style="background: #085c3c !important;border: 1px solid #fbbf24;border-radius: 20px;color: #fbbf24; padding: 20px;">
                        <img class="lasdf" style="    border-radius: 20px; left: -46px;" src="http://127.0.0.1:8000/logo/Screenshot%202025-05-07%20173212.png"
                            class="card-img-top" alt="Thai Food 1">
                        <div class="card-body">
                            <h5 class="card-title owowo" style="color: white;">Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại - Bài viết</h5>
                            <div style="    display: flex;    justify-content: end;    ">

                                <a href="#" style="color: white; text-decoration: underline;" class="owowo">Xem chi tiết »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light" style="background: #085c3c !important;border: 1px solid #fbbf24;border-radius: 20px;color: #fbbf24; padding: 20px;">
                        <img class="lasdf" style="    border-radius: 20px; left: -46px;" src="http://127.0.0.1:8000/logo/Screenshot%202025-05-07%20173212.png"
                            class="card-img-top" alt="Thai Food 1">
                        <div class="card-body">
                            <h5 class="card-title owowo" style="color: white;">Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại - Bài viết</h5>
                            <div style="    display: flex;    justify-content: end;    ">

                                <a href="#" style="color: white; text-decoration: underline;" class="owowo">Xem chi tiết »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light" style="background: #085c3c !important;border: 1px solid #fbbf24;border-radius: 20px;color: #fbbf24; padding: 20px;">
                        <img class="lasdf" style="    border-radius: 20px; left: -46px;" src="http://127.0.0.1:8000/logo/Screenshot%202025-05-07%20173212.png"
                            class="card-img-top" alt="Thai Food 1">
                        <div class="card-body">
                            <h5 class="card-title owowo" style="color: white;">Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại - Bài viết</h5>
                            <div style="    display: flex;    justify-content: end;    ">

                                <a href="#" style="color: white; text-decoration: underline;" class="owowo">Xem chi tiết »</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="product" class="animate__animated animate__fadeIn wow">
            <div class="center">
                <div class="title">
                    <h2> <img src="{{ asset('assets/images/icon-title.png') }}" alt="Icon title"> <span> Món đặc
                            sắc</span></h2>
                </div>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10"
                    data-md-items="3:10" data-lg-items="4:10" data-xlg-items="4:26" data-rewind="1"
                    data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0"
                    data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0"
                    data-animations="" data-nav="0" data-navtext="\" data-navcontainer="">
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="heo-sua-quay-lu"
                                title="Heo sữa quay lu_Đảo ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/4286330914808387348637483471338278497491559n-4095.jpg') }}"
                                    alt="Heo sữa quay lu_Đảo ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="heo-sua-quay-lu" title="Heo sữa quay lu_Đảo ngọc">Heo sữa quay lu_Đảo
                                    ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="tom-hung-alaskadao-ngoc"
                                title="Tôm hùng alaska_Đảo Ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/3867175943977839298358961412330629269003547n-1555.jpg') }}"
                                    alt="Tôm hùng alaska_Đảo Ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="tom-hung-alaskadao-ngoc" title="Tôm hùng alaska_Đảo Ngọc">Tôm hùng
                                    alaska_Đảo Ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="cua-gach-sot-hoang-kimdao-ngoc"
                                title="Cua gạch sốt hoàng kim_Đảo Ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/3735970903781264151349816828652451922535504n-3937.jpg') }}"
                                    alt="Cua gạch sốt hoàng kim_Đảo Ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="cua-gach-sot-hoang-kimdao-ngoc" title="Cua gạch sốt hoàng kim_Đảo Ngọc">Cua
                                    gạch sốt hoàng kim_Đảo Ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="oc-huong-dao-ngoc"
                                title="Ốc hương_Đảo Ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/3754652943781261451350082847489614264125173n-6914.jpg') }}"
                                    alt="Ốc hương_Đảo Ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="oc-huong-dao-ngoc" title="Ốc hương_Đảo Ngọc">Ốc hương_Đảo Ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="ca-hu-hap-dao-ngoc"
                                title="Cá hú hấp_Đảo Ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/3736470583781264284683132984145346152003333n-9651.jpg') }}"
                                    alt="Cá hú hấp_Đảo Ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="ca-hu-hap-dao-ngoc" title="Cá hú hấp_Đảo Ngọc">Cá hú hấp_Đảo Ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="tom-nuong-pho-maidao-ngoc"
                                title="Tôm nướng phô mai_Đảo Ngọc"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy"
                                    src="{{ asset('/thumbs/540x540x1/upload/product/imgmenu-5692.jpg') }}"
                                    alt="Tôm nướng phô mai_Đảo Ngọc"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="tom-nuong-pho-maidao-ngoc" title="Tôm nướng phô mai_Đảo Ngọc">Tôm nướng phô
                                    mai_Đảo Ngọc</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                </div>
                <a href="menu" class="btn-more">Xem tất cả</a>
            </div>
        </div>
        <div id="album" class="animate__animated animate__fadeIn wow">
            <div class="center">
                <div class="title">
                    <h2><img src="{{ asset('assets/images/icon-title.png') }}" alt="Icon title"> <span> Không gian
                            quán</span></h2>
                </div>
                <div class="album-grid">
                    <div class="album-item">
                        <a href="album-6" class="scale-img">
                            <img src="{{ asset('upload/product/4211956044597280436414846659908515408414651n-4945.jpg') }}"
                                alt="Album 6"></a>
                    </div>
                    <div class="album-item">
                        <a href="album-5" class="scale-img">
                            <img src="{{ asset('upload/product/4187389924534268209382736966552340802858549n-2584.jpg') }}"
                                alt="Album 5"></a>
                    </div>
                    <div class="album-item">
                        <a href="album-4" class="scale-img">
                            <img src="{{ asset('upload/product/imgalbum1-2916.jpg') }}" alt="Album 4"></a>
                    </div>
                    <div class="album-item">
                        <a href="album-3" class="scale-img">
                            <img src="{{ asset('upload/product/4187328404534270642715821957851210359025432n-7109.jpg') }}"
                                alt="Album 3"></a>
                    </div>
                    <div class="album-item">
                        <a href="album-2" class="scale-img">
                            <img src="{{ asset('upload/product/4296692314848019811340903938413084471332823n-4901.jpg') }}"
                                alt="Album 2"></a>
                    </div>
                    <div class="album-item">
                        <a href="album-1" class="scale-img">
                            <img src="{{ asset('upload/product/4296902674848016378007917854878830773590064n-1917.jpg') }}"
                                alt="Album 1"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="video" class="animate__animated animate__fadeIn wow">
            <div class="center d-flex flex-wrap justify-content-between">
                <div class="newsletter">
                    <div class="newsletter-box">
                        <div class="title-video">
                            <h3>Đặt chỗ</h3>
                        </div>
                        <form class="form-newsletter validation-newsletter" novalidate method="post" action=""
                            enctype="multipart/form-data">
                            <div class="input-newsletter-group">
                                <div class="input-newsletter">
                                    <input type="text" class="form-control" id="ten-newsletter"
                                        name="ten-newsletter" placeholder="Họ tên" required />

                                </div>
                                <div class="input-newsletter">
                                    <input type="text"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                                        class="form-control" id="dienthoai-newsletter" name="dienthoai-newsletter"
                                        placeholder="Số điện thoại" required />

                                </div>
                            </div>
                            <div class="input-newsletter">
                                <input type="text" class="form-control" id="soluong-newsletter"
                                    name="soluong-newsletter" placeholder="Chọn số lượng người" required />

                            </div>
                            <div class="input-newsletter">
                                <textarea class="form-control" id="noidung-newsletter" name="noidung-newsletter" placeholder="Bạn cần tư vấn gì?" /></textarea>

                            </div>
                            <input type="submit" class="btn btn-newsletter" name="submit-newsletter"
                                value="Đặt chỗ" disabled />
                            <input type="hidden" name="recaptcha_response_newsletter"
                                id="recaptchaResponseNewsletter">
                        </form>
                    </div>
                </div>
                <div class="video">
                    <div class="title-video">
                        <h3>Video nổi bật</h3>
                    </div>
                    <div class="video-box">
                        <iframe width="100%" height="100%" src="//www.youtube.com/embed/GNeYb8JxTls"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="khachhang" class="animate__animated animate__fadeIn wow">
            <div class="center">
                <div class="title-main">
                    <h2>Cảm nhận về Ẩm thực đảo ngọc</h2>
                    <p>Feedback của khách hàng là niềm vinh hạnh của chúng tôi. Cám ơn khách hàng đã quan tâm đến Ẩm
                        thực Đảo Ngọc!</p>
                </div>
                <div class="slick-khachhang">
                    <div class="wrap-khachhang">
                        <div class="box-khachhang">
                            <div class="text-khachhang">
                                <div class="img-khachhang">
                                    <img onerror="this.src='/thumbs/162x162x2/assets/images/noimage.png';"
                                        src="{{ asset('/thumbs/162x162x1/upload/news/taoanhdeplamnetanh68237-3052.png') }}" />
                                </div>
                                <div class="name-khachhang">
                                    <h3>Trần Văn Nam</h3>
                                    <p>CEO </p>
                                </div>
                                <div class="des-khachhang">
                                    <p>Mình đánh giá cao phong cách phục vụ chuyên nghiệp và chu đáo của Đảo Ngọc. Nhân
                                        viên luôn niềm nở, sẵn sàng giải đáp mọi thắc mắc của khách hàng. Mình cũng rất
                                        thích không gian nhà hàng rộng rãi, thoáng mát, tạo cảm giác thoải mái tự nhiên
                                        như ở nhà. Mình sẽ giới thiệu Đảo Ngọc cho các đối tác và bạn bè của mình. Đảo
                                        ngọc là một địa điểm đáng để trải nghiệm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-khachhang">
                        <div class="box-khachhang">
                            <div class="text-khachhang">
                                <div class="img-khachhang">
                                    <img onerror="this.src='/thumbs/162x162x2/assets/images/noimage.png';"
                                        src="{{ asset('/thumbs/162x162x1/upload/news/taoanhdeplamnetanh40146-6896.png') }}" />
                                </div>
                                <div class="name-khachhang">
                                    <h3>Đinh Văn Toàn</h3>
                                    <p>Bác sĩ</p>
                                </div>
                                <div class="des-khachhang">
                                    <p>Mình và gia đình thường xuyên đến Đảo Ngọc để tổ chức các bữa ăn gia đình. Mọi
                                        người đều rất hài lòng với chất lượng món ăn và dịch vụ tại đây. Mình thích nhất
                                        món <strong>bò kho</strong> và <strong>lẩu ếch măng cay</strong>. Giá cả ở đây
                                        cũng rất hợp lý, phù hợp với thu nhập của gia đình mình. Rất vui khi đến đảo
                                        ngọc đó mọi người!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-khachhang">
                        <div class="box-khachhang">
                            <div class="text-khachhang">
                                <div class="img-khachhang">
                                    <img onerror="this.src='/thumbs/162x162x2/assets/images/noimage.png';"
                                        src="{{ asset('/thumbs/162x162x1/upload/news/imgkhachhang-8401.jpg') }}" />
                                </div>
                                <div class="name-khachhang">
                                    <h3>Hariwon </h3>
                                    <p>Ca sĩ/ nghệ sĩ</p>
                                </div>
                                <div class="des-khachhang">
                                    <p data-sourcepos="3:1-3:59"><strong>Hương vị đậm đà, dịch vụ hoàn hảo - Nơi níu
                                            chân tôi!</strong></p>

                                    <ul data-sourcepos="5:1-8:0">
                                        <li data-sourcepos="5:1-5:60"><strong>Cá kho tộ</strong> ngọt
                                            thanh, <strong>chả giò</strong> giòn rụm, thơm ngon.</li>
                                        <li data-sourcepos="6:1-6:59"><strong>Dịch vụ chuyên nghiệp, chu đáo</strong>,
                                            nhân viên nhiệt tình.</li>
                                        <li data-sourcepos="7:1-8:0"><strong>Không gian ấm cúng</strong>, như chính
                                            ngôi nhà của mình.</li>
                                    </ul>

                                    <p data-sourcepos="9:1-9:42"><strong>Đảo Ngọc - Điểm đến yêu thích của tôi</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('footer')

        <!-- Modal notify -->
        <div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog"
            aria-labelledby="popup-notify-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-notify-label">Thông báo</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal cart -->
        <div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-cart-label">Giỏ hàng của bạn</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <!-- Js Config -->
        <script type="text/javascript">
            var VNS_FRAMEWORK = VNS_FRAMEWORK || {};
            var CONFIG_BASE = 'https://nhahangthaivungtau.com/';
            var WEBSITE_NAME = 'Ẩm Thực Đảo Ngọc';
            var TIMENOW = '04/05/2025';
            var SHIP_CART = false;
            var GOTOP = 'assets/images/top.png';
            var LANG = {
                'no_keywords': 'Chưa nhập từ khóa tìm kiếm',
                'delete_product_from_cart': 'Bạn muốn xóa sản phẩm này khỏi giỏ hàng ? ',
                'no_products_in_cart': 'Không tồn tại sản phẩm nào trong giỏ hàng !',
                'wards': 'Phường/xã',
                'back_to_home': 'Về trang chủ',
            };
        </script>

        <!-- Js Files -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=flJ06ywzoi') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=Qj4Nv9JS8p') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=cgWM89TmyN') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=A76q9wu0L9') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=GXCWdNFQQC') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=Ybnx4mBXWj') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=dpdVqZM9D2') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=a9mirnTLp') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=yb4rxWWjn5') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=WaSKy8wH0M') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=gDWvIirdq3') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=TZR6koLwZy') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=vSIQqTeIOY') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=eGWWucYYKW') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=GLFzz84q6k') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=6EhZQVtYwT') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=FVRx0pJ7Bi') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=SOtTj4Ullh') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=OkUgulXN6') }}"></script>



        <!-- Js Structdata -->
        <!-- General -->
        <script type="application/ld+json">
        {
            "@context" : "https://schema.org",
            "@type" : "Organization",
            "name" : "Ẩm Thực Đảo Ngọc",
            "url" : "https://nhahangthaivungtau.com/",
            "sameAs" :
            [
                        ],
            "address":
            {
                "@type": "PostalAddress",
                "streetAddress": "89 Nguyễn Thị Búp, phường Tân Chánh Hiệp, quận 12, TP. HCM",
                "addressRegion": "Ho Chi Minh",
                "postalCode": "70000",
                "addressCountry": "vi"
            }
        }
    </script>

        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </body>
    <style>
        .intro-image {
            max-width: 100%;
        }

        .intro-image.intro-image1.scale-img {
            border: initial;
            box-shadow: initial;
        }
    </style>
</div>
