<div>

    <head>

        <title>Cách thưởng thức</title>
        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=PH2iw4glF') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=yETMJ9JRMW') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=VldLBsAEOZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=fkRLBF3DrU') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=GDxUR124U') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=aXQrDOhkxZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=f7iZWmbTn') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=SRotZvQ54') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=qdwFpFANbG') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=0kFsr05oeW') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=iwUXSkwpyz') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=ZeqsVjmdI1') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=LdvgeiNY5g') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=BATjJQTOB3') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=9gPJiwkXVW') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=sMqqoMYZkD') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=bB5P5CUW01') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=mIVbSwi2s') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=EBkcelMho3') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=htUNYaH9a1') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=jVHMZ76WC') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=lY8xgjbe39') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=4HWo4KT39Z') }}" rel="stylesheet">

        <!-- Background -->

        <!-- Js Google Analytic -->

        <!-- Js Head -->
    </head>

    <body>
        <ul class="h-card hidden">
            <li class="h-fn fn">Ẩm Thực Đảo Ngọc</li>
            <li class="h-org org">Ẩm Thực Đảo Ngọc</li>
            <li class="h-tel tel">0918606032</li>
            <li><a class="u-url ul" href="https://nhahangthaivungtau.com/">https://nhahangthaivungtau.com/</a></li>
        </ul>
        @livewire('header')

        <div class="breadCrumbs">
            <div class="center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none"
                            href="https://nhahangthaivungtau.com/"><span>Trang chủ</span></a></li>
                    <li class="breadcrumb-item active"><a class="text-decoration-none"
                            href="https://nhahangthaivungtau.com/cach-thuong-thuc"><span>Cách thưởng thức</span></a>
                    </li>
                </ol>
                <script
                    type="application/ld+json">{"@context": "https://schema.org","@type": "BreadcrumbList","itemListElement": [{"@type":"ListItem","position":1,"name":"C\u00e1ch th\u01b0\u1edfng th\u1ee9c","item":"https:\/\/nhahangthaivungtau.com\/cach-thuong-thuc"}]}</script>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="title-main">
                <h1>Cách thưởng thức</h1>
            </div>
            <div class="loading-news" data-show="10" data-type="cach-thuong-thuc" data-title="Cách thưởng thức">
                @foreach ($news as $item)
                <div class="box-hot-news animate__ animate__zoomIn wow animated"
                    style="visibility: visible; animation-name: zoomIn;">
                    <div class="pic-hot-news">
                        <a class="text-decoration-none scale-img" href="/tin-tuc/{{ $item->slug }}" title="{{ $item->title }}">
                            <img onerror="this.src='/thumbs/480x320x2/assets/images/noimage.png';"
                                src="{{ Storage::url($item->thumb_img) }}" alt="{{ $item->title }}">
                        </a>
                    </div>
                    <div class="desc-hot-news">
                        <h3 class="name-hot-news">
                            <a class="text-decoration-none scale-img" href="/tin-tuc/{{ $item->slug }}" title="{{ $item->title }}">
                                {{ $item->title }} </a>
                        </h3>
                        <div class="time-hot-news">Đăng ngày: {{ $item->created_at->format('d/m/Y') }} </div>
                        <p class="info-hot-news text-split">{{ $item->short_desc }}</p>
                        <a href="/tin-tuc/{{ $item->slug }}" class="btn-hot-news">Đọc tin.</a>
                    </div>
                </div>
                @endforeach
                <div class="news-total-container">
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=UryE0wwYS') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=ai31Fd9tbF') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=xann7EmY56') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=PiatBW6gOa') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=LKFzRPeUql') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=wBAxQzH0i6') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=pvNQ48ESSV') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=JUeTJxrkEN') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=ubMfN1wI6e') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=cHW4uAAF1D') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=Loyw4jOys3') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=c41Ce1Ljl9') }}">
            </script>
        <script type="text/javascript"
            src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=ktYjxhgPNO') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=vsJkgYlMMd') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=VXjYrgQ6sG') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=l7tWLVfQCr') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=W3wz6b8Gzn') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=qHCmBKF0VL') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=kzEYM6g1RW') }}"></script>



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
