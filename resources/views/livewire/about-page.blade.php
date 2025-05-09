<div>

    <head>
        <title>{{ $setting->about_title }} - {{ $setting->web_name }}</title>
        <meta property="og:image" content="{{ url(Storage::url($setting->about_image)) }}">

        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=TNfdh6fWQo') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=SOKfkmO7qU') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=5x6fWss6sZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=pt3URH6wZ6') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=W09cJTdLkP') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=SUS90CXYq') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=tLYTH4Bw1J') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=SD9h73llla') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=wShRmroTvM') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=hcp3smo7IG') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=BuVgshhMO') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=noQLwrICi3') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=YgWyyXWNSt') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=dg9vYnfHfu') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=iDgC5WuSuf') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=ZwLwfgbsdw') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=VBhKqWdvER') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=91CwmlR90k') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=NAh9TsStZ0') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=dRwxHo5ycw') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=pb0XvouMGP') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=pfIrFk2RG') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=kApWLIZb84') }}" rel="stylesheet">

        <!-- Background -->

        <!-- Js Google Analytic -->

        <!-- Js Head -->
    </head>

    <body>

        @livewire('header')
        <div class="breadCrumbs">
            <div class="center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none"
                            href="{{ route('home') }}"><span>Trang chủ</span></a></li>
                    <li class="breadcrumb-item active"><a class="text-decoration-none"
                            href="{{ route('about') }}"><span>Giới thiệu</span></a></li>
                </ol>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="title-main">
                <h1 style="font-family: 'Lodestone', sans-serif;">{{ $setting->about_title }}</h1>
                <p></p>
            </div>
            <div class="content w-clear">
                <div style="text-align: center;margin-bottom: 50px;">
                <img  style="
                max-width: 800px;
                width: 100%;
            " src="{{ Storage::url($setting->about_image) }}" alt="{{ $setting->about_title }}">
             </div>
                {!! $setting->about_content !!}
            </div>
            <div class="share">
                <b>Chia sẻ:</b>
                <div class="social-plugin w-clear">
                    <!-- AddToAny BEGIN -->
                    <div>
                        <a href="https://www.addtoany.com/share#url={{ url()->current() }}&amp;title=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/a2a.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/facebook?linkurl={{ url()->current() }}&amp;linkname=share"
                            target="_blank"><img
                                src="{{ asset('https://static.addtoany.com/buttons/facebook.svg') }}" width="32"
                                height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/twitter?linkurl={{ url()->current() }}&amp;linkname=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/twitter.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/email?linkurl={{ url()->current() }}&amp;linkname=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/email.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                    </div>
                    <!-- AddToAny END -->
                    <div class="zalo-share-button" data-href="{{ url()->current() }}"
                        data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=v2nWjY8uPs') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=oruyF7jiuJ') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=K19wM3c38x') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=CbXgkSNSE4') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=LbcU75FWYN') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=aR3E7mcmL2') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=Xa9x6dsUc') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=tsLTo8bor') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=6LyIxNW8rP') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=DSNxb3rqb5') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=uodWah7zMu') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=59WwIR4fxy') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=L5XZjQXQ6E') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=E1DlBkgM12') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=VVwiKJ0AaB') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=WVQ4pI6pTD') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=5gllA26EsY') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=RwW0rjTLWD') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=AIh88WwwBX') }}"></script>



        <!-- Js Structdata -->
        <!-- Static -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage":
            {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "Ẩm Thực Thái",
            "image":
            [
            "https://nhahangthaivungtau.com/upload/photo/imggioithieu-8480.jpg"
            ],
            "datePublished": "2020-08-11",
            "dateModified": "2024-03-15",
            "author":
            {
                "@type": "Person",
                "name": "Ẩm Thực Thái"
            },
            "publisher":
            {
                "@type": "Organization",
                "name": "Google",
                "logo":
                {
                    "@type": "ImageObject",
                    "url": "https://nhahangthaivungtau.com/upload/photo/logo-9843.png"
                }
            },
            "description": "Giới thiệu desc"
        }
    </script>

        <!-- Js Addons -->
        <div id="script-main"></div>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 10 && !a && ($("#messages-facebook").load(
                        "ajax/ajax_addons.php?type=messages-facebook"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 0.5 && !a && ($("#script-main").load(
                        "ajax/ajax_addons.php?type=script-main"), a = !0)
                })
            });
        </script>
        <!-- Js Body -->
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </body>
</div>
