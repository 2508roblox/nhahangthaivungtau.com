<div>

    <head>

        <title>{{ $setting->home_title }} </title>
        <meta name="description" content="{{ $setting->home_description }}">

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
        <h1 class="hidden-seoh">Nhà Hàng Thái Vũng Tàu</h1>
        @livewire('header')
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div class="owl-carousel owl-theme owl-slideshow">
                @foreach ($slides as $slide)
                    <div>
                        <a href="" target="_blank" title="Slideshow 1"><img
                                onerror="this.src='/thumbs/1366x600x2/assets/images/noimage.png';"
                                src="{{ Storage::url($slide->image_link) }}" alt="Slideshow 1" title="Slideshow 1" /></a>
                    </div>
                @endforeach
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
        <div id="intro">
            <style>
                @media (max-width: 768px) {
                    #lldfdfd {
                        font-size: 3rem !important;
                        text-align: center;
                        width: 100%;
                        margin-bottom: 2rem;
                    }

                    .sdfsdfsdf {
                        margin-bottom: 2rem;
                    }

                    .album-title {
                        font-size: 7rem !important;
                        text-align: center !important;
                        margin-bottom: initial !important;
                    }
                }
            </style>
            <div class="center d-flex flex-wrap justify-content-between">
                <div class="intro-right animate__animated animate__fadeInRight wow">
                    <h1 id="lldfdfd"
                        style="color:#ffca00 ; font-size: 5.5rem;   font-family: 'Lodestone', sans-serif; ">KHAY-PHA
                        THAI</h1>
                    <div class="intro-image intro-image1 scale-img sdfsdfsdf">
                        <img onerror="this.src='/thumbs/331x420x2/assets/images/noimage.png';"
                            src="{{ asset('/logo/image 9.png') }}" />
                    </div>
                </div>
                <div class="intro-left animate__animated animate__fadeInLeft wow"
                    style="padding: 2rem; border: 1px solid #ffca00; border-radius: 23px;">
                    <h2 style="color: #fff; font-family: 'Lodestone', sans-serif; ">VỀ CHÚNG TÔI</h2>
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
                    <div style="
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

                            .intro-left>h2 {
                                font-size: 3.5rem;
                                background: rgb(255 255 255);
                                /* background: linear-gradient(90deg, rgba(255, 204, 102, 1) 0%, rgba(186, 138, 31, 1) 100%, rgba(204, 153, 0, 1) 100%); */
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }
                        </style>
                    </div>
                </div>

            </div>
        </div>
        <img src="/logo/Frame_90-removebg-preview.png" style="width: 100%;" alt="Ẩm Thực Thái">
        <div id="intro" style="
        background: #015134;
    ">
            <div class="center d-flex flex-wrap justify-content-between">
                <div class="intro-right animate__animated animate__fadeInRight wow">
                    <h1 id="lldfdfddfdf"
                        style="color:#ffca00;font-size: 4rem;font-family: 'Lodestone', sans-serif;text-align: center;margin-bottom: 4rem; width: 100%;">
                        MÓN NGON
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
                        @foreach ($setting->best_sellers as $best_seller)
                            <div style="margin-bottom: 30px; cursor: pointer;"
                                onclick="window.location.href='{{ $best_seller['link'] }}'">
                                <img src="{{ Storage::url($best_seller['image']) }}" alt="Món Thái 1"
                                    style="width: 100%; border-radius: 8px;">
                                <h3 style="margin-top: 15px;">{{ $best_seller['name'] }}</h3>
                                <p style="color: #f8e08e; font-weight: bold;">Giá: {{ $best_seller['price'] }}</p>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="intro-left animate__animated animate__fadeInLeft wow">
                    <img src="/logo/image_2025-05-09_201438147-removebg-preview.png"
                        style=" padding: 0px 4rem;    width: 100%;            " alt="">
                    <h1
                        style="color: #fcd34d; font-size: 3rem; letter-spacing: 1px; margin-bottom: 30px; font-family: 'Lodestone', sans-serif; text-align: center;">
                        "BEST
                        SELLER"</h1>
                    <div style="cursor: pointer;" onclick="window.location.href='{{ $setting->link_seller }}'">
                        <img src="{{ Storage::url($setting->banner_seller) }}" alt="Món Thái 1"
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
                        style="color: #fcd34d; font-size: 3rem; letter-spacing: 1px; margin-bottom: 30px; font-family: 'Lodestone', sans-serif;">
                        MENU TẠI KHAY-PHA THAI
                    </h2>

                    <!-- Thanh menu các món -->
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px;">
                        @foreach ($menus as $menu)
                            <div class="category-items"
                                style="background-color: transparent; color: #fff; padding: 10px 25px; border: 1px solid #fcd34d; border-radius: 30px; font-weight: bold; cursor: pointer;">
                                {{ $menu->name }}
                            </div>
                        @endforeach
                    </div>
                    <style>
                        .category-items:hover {
                            background-color: #fcd34d !important;
                        }
                    </style>

                @livewire('inc.book')
                </div>

            </div>
        </div>
        <div id="intro " wire:ignore style="
        background: #015134;
    ">
            <div class="center d-flex flex-wrap justify-content-between">
                <div
                    style="background-color: #0c4f39;padding: 40px 20px;text-align: center;font-family: sans-serif;width: 100%;">
                    <!-- Tiêu đề -->
                    <h2
                        style="color: #fcd34d; font-size: 4rem;  letter-spacing: 1px; margin-bottom: 30px;  font-family: 'Lodestone', sans-serif;">
                        MÓN ĂN ĐẶC SẮC
                    </h2>
                    <style>
                        .asdf {
                            font-weight: bold;
                            color: #ffffff;
                            font-size: 15px;
                            height: 50px;
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

                            #lldfdfddfdf {
                                font-size: 3rem !important;
                                text-align: center;
                                width: 100%;
                                margin-bottom: 2rem;
                            }
                        }
                    </style>
                    <!-- Thanh menu các món -->
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px;">
                        @foreach ($categories as $category)
                            <div class="category-items"
                                style="background-color: transparent; color: #fff; padding: 10px 25px; border: 1px solid #fcd34d; border-radius: 30px; font-weight: bold; cursor: pointer;"
                                onclick="window.location.href='/mon-an?category={{ $category->id }}'">
                                {{ $category->name }}
                            </div>
                        @endforeach

                    </div>
                    <div>

                        <div class="row g-4" id="reviews" style="margin-top: 20px;">

                            <!-- Thẻ nổi bật -->
                            @foreach ($foods as $food)
                                <div class="col-md-3 cart_pd"
                                    style="background-color: transparent; margin-bottom: 2rem; cursor: pointer;"
                                    onclick="window.location.href='/mon-an/{{ $food->slug  }}'">
                                    <div class="card card-custom highlight lslsl">
                                        <img style="     border-radius: 15px;     height: 200px;     object-fit: cover; "
                                            src="{{ Storage::url($food->thumb_img) }}" class="card-img-top"
                                            alt="{{ $food->name }}">
                                        <div class="card-body">
                                            <div class="asdf title">{{ $food->name }}</div>
                                            <div class="asdf price" style="    font-size: 20px;">
                                                Giá: <strong
                                                    style="color: #fbbf24;">{{ number_format($food->price, 0, ',', '.') }}đ</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



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
        <div style="background: #015134;">

            <div class="container" style="     background: white;     padding: 20px;     border-radius: 20px; ">
                <h1 class="review-title" style="font-family: 'Lodestone', sans-serif;">REVIEW ẨM THỰC</h1>
                <div class="row" id="reviewaf">
                    @foreach ($reviews as $review)
                        <div class="col-md-4" style="    margin-bottom: 1rem;">
                            <div class="card" style="position: relative;  cursor: pointer;"
                                data-src="{{ $review->video_link }}" data-fancybox="video">
                                <img src="{{Storage::url($review->image) }}" class="card-img-top" alt="Food Image"
                                    style="    border-radius: 20px;">
                                <div class="card-body"
                                    style="    display: flex;    justify-content: space-between;    position: absolute;        width: 100%;">
                                    <div
                                        style="     display: flex;     justify-content: center;     align-items: center;     text-align: center; ">
                                        <img src="{{ Storage::url($setting->web_favicon) }}" alt=""
                                            style=" width: 30px; height: 30px; border-radius: 50%; ">
                                        <h5 class="card-title"
                                            style="     margin: inherit;     margin-left: 10px;     color: #ffffff;     font-size: 1.2rem;     font-weight: bold; ">
                                            KHAY-PHA THAI</h5>

                                    </div>
                                    <a href="{{ $review->video_link }}" class="share-link" style="color: #ffffff;">►
                                        Share</a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
        <div style="background: #015134;">

            <div class="container" style="    padding-top: 100px;">
                <div class=" bg-transparent text-white" style="    margin: 50px 0;">
                    <div class="row ljaksfdsss">
                        <div class="col-md-5 col-12"
                            style="    justify-content: center;    display: flex;    flex-direction: column;">
                            <h1 class="display-4"
                                style="font-size: 3.7rem;font-family: 'Lodestone', sans-serif;color: #fcd34d;margin-bottom: 3rem;">
                                CẨM NANG <br> TẠI
                                KHAY-PHA THAI</h1>
                            <p style="
                        font-size: 1.27rem;
                    ">Được mệnh danh <strong style="">"xứ sở chùa Vàng"</strong>, không chỉ có chùa chiền mà văn hóa ẩm
                                thực Thái Lan cũng
                                rất độc đáo.

                            </p>
                        </div>
                        <div class="col-md-7 col-12">
                            <div style="    border: 1px solid #fbbf24;    border-radius: 20px;">

                                <img style="    border-radius: 20px;" src="/logo/Screenshot 2025-05-07 181424.png"
                                    alt="">
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

                        .ljaksfd {
                            gap: 20px !important;
                        }
                    }
                </style>
                <div class="row ljaksfd">

                    @foreach ($news as $new)
                        <div class="col-md-4">
                            <div class="card bg-light"
                                style="background: #085c3c !important;border: 1px solid #fbbf24;border-radius: 20px;color: #fbbf24; padding: 20px;">
                                <img class="lasdf" style="    border-radius: 20px; left: -46px;"
                                    src="{{Storage::url($new->thumb_img) }}" class="card-img-top" alt="Thai Food 1">
                                <div class="card-body">
                                    <h5 class="card-title owowo" style="color: white;">{{ $new->title }}</h5>
                                    <div style="    display: flex;    justify-content: end;    ">

                                        <a href="/tin-tuc/{{ $new->slug }}"
                                            style="color: white; text-decoration: underline;" class="owowo">Xem chi tiết
                                            »</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap"
            rel="stylesheet">

        <div style="  background: linear-gradient(to bottom, #015134, #046e47);     padding-top: 9rem;">

            <div class="container">
                <style>
                    .album-title {
                        font-family: 'Lodestone', sans-serif;
                        margin-bottom: -119px;
                        ;
                        font-size: 20rem;
                        color: transparent;
                        -webkit-text-stroke: 1px #FFD700;
                        text-stroke: 2px #FFD700;
                        text-align: center;
                        letter-spacing: 10px;
                    }
                </style>
                <h1 class="album-title text-center" style="font-family: 'Lodestone', sans-serif;">ALBUM</h1>

                <div class="row">
                    <div class="col-md-4"
                        style="display: flex;flex-direction: column;justify-content: end;margin-bottom: 1rem;">
                        <img style="       border: 6px solid #fbbf24 !important;"
                            src="{{ Storage::url($setting->album_1) }}" class="img-fluid mb-3" alt="Food 1">
                        <img style="       border: 6px solid #fbbf24 !important;"
                            src="{{ Storage::url($setting->album_2) }}" class="img-fluid" alt="Food 2">
                    </div>
                    <div class="col-md-4" style="     gap: 20px;     display: flex;     flex-direction: column; ">
                        <img style="    height: 100%;    border: 6px solid #fbbf24 !important;"
                            src="{{ Storage::url($setting->album_3) }}" class="img-fluid" alt="Food 3">
                        <img style="    height: 100%;    border: 6px solid #fbbf24 !important;"
                            src="{{ Storage::url($setting->album_4) }}" class="img-fluid" alt="Food 3">
                        <img src="/logo/logo_footer.png" alt="">

                    </div>
                    <div class="col-md-4" style="padding-top: 100px;">
                        <img style="    height: 100%;    border: 6px solid #fbbf24 !important;"
                            src="{{ Storage::url($setting->album_5) }}" class="img-fluid mb-3" alt="Food 4">
                    </div>
                </div>
                <div class="text-center mt-3" style="
            width: 100%;
            display: flex;
            justify-content: center;
        ">
                    <a style="background: url('/logo/Frame 7.png') no-repeat center center; background-size: 100% 100%; color: #fff;"
                        href="/album-anh" class="intro-btn">XEM TẤT CẢ</a>
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
            var WEBSITE_NAME = 'Ẩm Thực Thái';
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
        <script type="text/javascript"
            src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=GXCWdNFQQC') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=Ybnx4mBXWj') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=dpdVqZM9D2') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=a9mirnTLp') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=yb4rxWWjn5') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=WaSKy8wH0M') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=gDWvIirdq3') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=TZR6koLwZy') }}">
            </script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=vSIQqTeIOY') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=eGWWucYYKW') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=GLFzz84q6k') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=6EhZQVtYwT') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=FVRx0pJ7Bi') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=SOtTj4Ullh') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=OkUgulXN6') }}"></script>



        <!-- Js Structdata -->
        <!-- General -->
        <script type="application/ld+json">
        {
            "@context" : "https://schema.org",
            "@type" : "Organization",
            "name" : "Ẩm Thực Thái",
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