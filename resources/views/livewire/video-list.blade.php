<div>

    <head>

        <title>Review ẩm thực</title>

        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=JotnzvlYzj') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=8QbISgYOtx') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=xKyWkl92') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=LolZXmp2Xh') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=BaxFUaLVHs') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=RjdVZnvwVw') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=krXWVJZxFC') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=grWPOg5o8m') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=s1ulUNjanB') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=Y1adBcJYXe') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=qOaFG4JWUW') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=PJ3cztp1w') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=Ww8mFYD2pa') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=BGwCE0AKrQ') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=uW4vZHsBEk') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=ZvWzAOrWWb') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=3jnG3Yt6AZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=xNR7vA5fUY') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=UWd2dymJ0D') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=Miq4KNUD2r') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=x1NOwt5B3N') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=KC0gEhGvt') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=KcgecZcoo9') }}" rel="stylesheet">

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
                            href="https://nhahangthaivungtau.com/video"><span>Video</span></a></li>
                </ol>
                <script type="application/ld+json">{"@context": "https://schema.org","@type": "BreadcrumbList","itemListElement": [{"@type":"ListItem","position":1,"name":"Video","item":"https:\/\/nhahangthaivungtau.com\/video"}]}</script>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="title-main">
                <h1>Video</h1>
                <p></p>
            </div>
            <div class="w-clear">
                @foreach ($videos as $video)
                <div class="box-video text-decoration-none" data-fancybox="video"
                    data-src="{{ $video->video_link }}" title="">
                    <div class="pic-video scale-img"><img
                            onerror="this.src='/thumbs/480x360x2/assets/images/noimage.png';"
                            src="{{ Storage::url($video->image) }}" alt="" /></div>
                    <h3 class="name-video text-split"></h3>
                </div>
                @endforeach
                <div class="clear"></div>
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=3HSPgeWfsf') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=Wq1aw99Xo3') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=cTajrmbDe7') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=3VElqwi0o8') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=u3MEXq1L9S') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=ild2i3ut4j') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=9PlBcdBmhx') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=oQM6d1YzT') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=Rj2YZZgAcS') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=Ed38wZxpMF') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=L4XwwoutcV') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=qOcT2GqDW7') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=cFgHl0wzdt') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=K0UbKCdTsB') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=Rde47DyQ9d') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=dtXV8YpR1') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=QV8qj3CKJT') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=ohjc0WxqGH') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=11YHM11ior') }}"></script>



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
