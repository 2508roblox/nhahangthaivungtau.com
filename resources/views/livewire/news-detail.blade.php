<div>

    <head>
        <title>{{ $news->title }} - {{ \App\Models\Setting::first()->web_name }}</title>
        <meta property="og:image" content="{{ url(Storage::url($news->thumb_img)) }}">
        <meta name="description" content="{{ $news->short_desc }}">
        <meta property="og:url" content="{{ url('/tin-tuc/' . $news->slug) }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $news->title }}">
        <meta property="og:description" content="{{ $news->short_desc }}">
        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=ZXPNU7W6bW') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=Mhdy0ipEJY') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=MAEJJxNs0Q') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=GTovmc6imN') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=D5Q23wR0rL') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=RnwDuGwzno') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=hEwEkR1hWn') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=oX4bKywwAU') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=rqgOHorN1g') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=tPkudVw5BC') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=iwPLHO68') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=0P2riMbWzH') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=lDx65GoI0') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=gXenFLCk03') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=fuc3FH5utY') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=iBwGknrPp1') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=abeu932Mof') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=hhXNijAbqq') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=7bKRAD1p') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=w0tsDdp8Zk') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=QcqjWScZih') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=EfelNLPBVe') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=SGi29V0Ept') }}" rel="stylesheet">

        <!-- Background -->

        <!-- Js Google Analytic -->

        <!-- Js Head -->
    </head>

    <body>

        @livewire('header')
        <div class="breadCrumbs">
            <div class="center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="/"><span>Trang chủ</span></a></li>
                    <li class="breadcrumb-item "><a class="text-decoration-none" href="/tin-tuc"><span>Cẩm
                                nang</span></a>
                    </li>
                    <li class="breadcrumb-item active"><a class="text-decoration-none"
                            href="/tin-tuc"><span>{{ $news->title }}</span></a></li>
                </ol>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="title-detail">
                <h1>{{ $news->title }}</h1>
            </div>
            <div class="time-detail"><i class="fas fa-calendar-week"></i><span>Ngày đăng:
                    {{ $news->created_at->format('d/m/Y') }} {{ $news->created_at->format('H:i') }}</span>
            </div>
            <div class="meta-toc">
                <div class="box-readmore">
                    <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                </div>
            </div>
            <div class="content w-clear" id="toc-content">
                {!! $news->desc !!}
            </div>
            <div class="share">
                <b>Chia sẻ:</b>
                <div class="social-plugin w-clear">
                    <div>
                        <a href="https://www.addtoany.com/share#url={{ url('/tin-tuc/' . $news->slug) }}&amp;title=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/a2a.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/facebook?linkurl={{ url('/tin-tuc/' . $news->slug) }}&amp;linkname=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/facebook.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/twitter?linkurl={{ url('/tin-tuc/' . $news->slug) }}&amp;linkname=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/twitter.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                        <a href="https://www.addtoany.com/add_to/email?linkurl={{ url('/tin-tuc/' . $news->slug) }}&amp;linkname=share"
                            target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/email.svg') }}"
                                width="32" height="32" style="background-color:royalblue"></a>
                    </div>
                    <!-- AddToAny END -->
                    <div class="zalo-share-button" data-href="{{ url('/tin-tuc/' . $news->slug) }}"
                        data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
                </div>
            </div>
            <div class="share othernews">
                <b>Bài viết khác:</b>
                <ul class="list-news-other">
                </ul>
                <div class="pagination-home"></div>
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=spOm8mqr1a') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=wqRy9n5jjw') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=SI2SSmfLZL') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=4QlN3ywOL3') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=ll7H22nnvG') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=QFc1OklAKF') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=TRud2zE6mS') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=zgUItoiOct') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=aR0hJAvgwD') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=8DEUt5uw8G') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=kRUWY9S66w') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=Epy1zt4LBv') }}">
            </script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=3drWm4IZan') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=MHcSClC1Ho') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=cXdxQJ6Tmc') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=3zTJxAQW1w') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=SxiPeQgZ40') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=HdWwAJaw0n') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=vlhvuCbcnS') }}"></script>



        <!-- Js Structdata -->
        <!-- News -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage":
            {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "Khám phá Đảo Ngọc",
            "image":
            [
            "https://nhahangthaivungtau.com/upload/news/slider-9732.jpg"
            ],
            "datePublished": "2024-02-26",
            "dateModified": "1970-01-01",
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
            "description": ""
        }
    </script>

        <!-- Js Addons -->
        <div id="script-main"></div>
        <script type="text/javascript">
            $(function () {
                var a = !1;
                $(window).scroll(function () {
                    $(window).scrollTop() > 10 && !a && ($("#messages-facebook").load(
                        "ajax/ajax_addons.php?type=messages-facebook"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function () {
                var a = !1;
                $(window).scroll(function () {
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
