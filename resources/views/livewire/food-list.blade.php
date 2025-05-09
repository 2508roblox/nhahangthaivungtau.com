<div>
    <head>

        <!-- Title, Keywords, Description -->
        <title>Món ăn - {{ $setting->web_name }}</title>
        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=fpyPnG26N7') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=h3UwTRShaG') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=gw3xJiUUTK') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=uwq0fCwQW2') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=7TpJIWGFY') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=X04CxoBToc') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=KqfarVfxTB') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=t4iUNW72BW') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=C8n2CTZ0Vk') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=vu8NwCPsx0') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=JHrS2sjIGp') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=Rc98pUErvR') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=vz0TtUYkqW') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=cUldX4dcNL') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=3B33uhhYjm') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=IItOYoy1We') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=GWADm6gjuV') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=wQdfJDDUcl') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=X6cNhGzV7') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=j8sm7Uyi9g') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=HXsYomB8kN') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=atfkWziCIV') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=EWBT5anM0N') }}" rel="stylesheet">

        <!-- Background -->

        <!-- Js Google Analytic -->

        <!-- Js Head -->
        <style>
            #menu ul li ul li a {
    padding: 5px 10px !important;
}
        </style>
    </head>

    <body>

        @livewire('header')
        <div class="breadCrumbs">
            <div class="center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none"
                            href="{{ route('home') }}"><span>Trang chủ</span></a></li>
                    <li class="breadcrumb-item "><a class="text-decoration-none"
                            href="{{ route('food.list') }}"><span>Món ăn</span></a></li>
                            @if ($category)
                                <li class="breadcrumb-item "><a class="text-decoration-none"
                                    href="{{ route('food.list', ['category' => $category->id]) }}"><span>{{ $category->name }}</span></a></li>
                            @endif
                            @if ($subCategory)
                                <li class="breadcrumb-item "><a class="text-decoration-none"
                                    href="{{ route('food.list', ['category' => $category->id, 'subcategory' => $subCategory->id]) }}"><span>{{ $subCategory->name }}</span></a></li>
                            @endif
                </ol>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="title-main">
                <h1>Menu</h1>
                <p></p>
            </div>
            <div class="w-clear">
                <div class="div-product">
                    @foreach ($foods as $food)
                    <div class="product-item">
                        <div class="product-image"><a class="scale-img" href="{{ route('food.detail', $food->slug) }}"
                                title="{{ $food->name }}"><img
                                    onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy product-image_food" style="height: 250px !important;"
                                    src="{{ Storage::url($food->thumb_img) }}"
                                    alt="{{ $food->name }}"></a></div>
                        <div class="product-desc">
                            <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                    href="{{ route('food.detail', $food->slug) }}" title="{{ $food->name }}">{{ $food->name }}</a></h3>
                            <p class="price-box"><span class="price-new">Liên hệ</span></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <style>
                    .product-image_food {
                        height: 250px !important;
                        object-fit: cover;
                    }
                </style>
                <div class="clear"></div>
                <div class="pagination-home mgt-25"></div>
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=1dCZZBXIwr') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=455IaQYhFX') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=TegSJvd8JD') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=mIhaEmT40o') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=PWB5HUmIH4') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=wPMth7vpl5') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=aVEHWc6acA') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=xKHWT9loDO') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=W4goQmLTQE') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=8dvjISufBt') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=tH7CfOoTvo') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=SrWf2FDheW') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=qi2PmG6Nw') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=xQ2QMjsPqw') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=zrWlxMUM5w') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=KWg3cKQfq') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=jbwS4qhe39') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=6i7Nuuwn2e') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=SAiFtnRpbw') }}"></script>



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
