<div>
    <head>

        <title>{{ $food->name }} - {{ $setting->name }}</title>
        <meta property="og:image" content="{{ url(Storage::url($setting->thumb_img)) }}">
        <!-- Css Files -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css?v=m66gpdMWLF') }}" rel="stylesheet">
        <link href="{{ asset('assets/bootstrap/bootstrap.css?v=CdjSRz3wL6') }}" rel="stylesheet">
        <link href="{{ asset('assets/fontawesome512/all.css?v=fW8633qkPb') }}" rel="stylesheet">
        <link href="{{ asset('assets/mmenu/mmenu.css?v=gpbEUGoPom') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.css?v=umBHTpeZ') }}" rel="stylesheet">
        <link href="{{ asset('assets/fancybox3/jquery.fancybox.style.css?v=xUqhfyTMUH') }}" rel="stylesheet">
        <link href="{{ asset('assets/login/login.css?v=MWpxoWYHX4') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css?v=gVyHuJcof7') }}" rel="stylesheet">
        <link href="{{ asset('assets/photobox/photobox.css?v=PEy2eDWMI') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick.css?v=vl3YffUxr3') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-theme.css?v=eVQTw2p6b9') }}" rel="stylesheet">
        <link href="{{ asset('assets/slick/slick-style.css?v=ZXdWfRxyXp') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll.css?v=WgT3fBXEVn') }}" rel="stylesheet">
        <link href="{{ asset('assets/simplyscroll/jquery.simplyscroll-style.css?v=YeXNdEXytJ') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama.css?v=KKIdSbWaTM') }}" rel="stylesheet">
        <link href="{{ asset('assets/fotorama/fotorama-style.css?v=i8oKpRpVlm') }}" rel="stylesheet">
        <link href="{{ asset('assets/magiczoomplus/magiczoomplus.css?v=4ncDr8PM9') }}" rel="stylesheet">
        <link href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css?v=rrAwh6xYQX') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.carousel.css?v=ub6CFJ3GK') }}" rel="stylesheet">
        <link href="{{ asset('assets/owlcarousel2/owl.theme.default.css?v=Io52S544X3') }}" rel="stylesheet">
        <link href="{{ asset('assets/swiperjs/swiper-bundle.min.css?v=oReK0T9BlT') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css?v=XFj7SDkVPB') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css?v=wlE83opWWz') }}" rel="stylesheet">

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
                    <li class="breadcrumb-item "><a class="text-decoration-none"
                            href="{{ route('food.list') }}"><span>Menu</span></a></li>
                    <li class="breadcrumb-item active"><a class="text-decoration-none"
                            href="{{ route('food.detail', $food->slug) }}"><span>{{ $food->name }}</span></a></li>
                </ol>
            </div>
        </div>
        <div id="container" class="center w-clear">
            <div class="grid-pro-detail w-clear">
                <div class="left-pro-detail w-clear">
                    <a id="Zoom-1" class="MagicZoom"
                        data-options="zoomMode: on; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                        href="{{ Storage::url($food->img) }}"
                        title="{{ $food->name }}"><img
                            onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png';"
                            src="{{ Storage::url($food->thumb_img) }}"
                            alt="{{ $food->name }}"></a>
                </div>

                <div class="right-pro-detail w-clear">
                    <h1 class="title-pro-detail">{{ $food->name }}</h1>
                    <div class="social-plugin social-plugin-pro-detail w-clear">
                        <!-- AddToAny BEGIN -->
                        <div>
                            <a href="https://www.addtoany.com/share#url={{ route('food.detail', $food->slug) }}&amp;title=share"
                                target="_blank"><img src="{{ asset('https://static.addtoany.com/buttons/a2a.svg') }}"
                                    width="32" height="32" style="background-color:royalblue"></a>
                            <a href="https://www.addtoany.com/add_to/facebook?linkurl={{ route('food.detail', $food->slug) }}&amp;linkname=share"
                                target="_blank"><img
                                    src="{{ asset('https://static.addtoany.com/buttons/facebook.svg') }}"
                                    width="32" height="32" style="background-color:royalblue"></a>
                            <a href="https://www.addtoany.com/add_to/twitter?linkurl={{ route('food.detail', $food->slug) }}&amp;linkname=share"
                                target="_blank"><img
                                    src="{{ asset('https://static.addtoany.com/buttons/twitter.svg') }}"
                                    width="32" height="32" style="background-color:royalblue"></a>
                            <a href="https://www.addtoany.com/add_to/email?linkurl={{ route('food.detail', $food->slug) }}&amp;linkname=share"
                                target="_blank"><img
                                    src="{{ asset('https://static.addtoany.com/buttons/email.svg') }}" width="32"
                                    height="32" style="background-color:royalblue"></a>
                        </div>
                        <!-- AddToAny END -->
                        <div class="zalo-share-button"
                            data-href="{{ route('food.detail', $food->slug) }}"
                            data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false>
                        </div>
                    </div>
                    <div class="desc-pro-detail"></div>
                    <ul class="attr-pro-detail">
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">Giá:</label>
                            <div class="attr-content-pro-detail">
                                <span class="price-new-pro-detail">{{ number_format($food->price, 0, ',', '.') }}đ</span>
                                <span class="price-old-pro-detail">{{ number_format($food->discount_price, 0, ',', '.') }}đ</span>
                            </div>
                        </li>
                        <style>
                            .price-old-pro-detail {
    padding-left: 11px;
}
                        </style>
                    </ul>
                </div>

                <div class="clear"></div>

                <div class="tags-pro-detail w-clear">
                </div>

                <div class="clear"></div>

                <div class="tabs-pro-detail">
                    <ul class="ul-tabs-pro-detail w-clear">
                        <li class="active transition" data-tabs="info-pro-detail">Thông tin sản phẩm</li>
                        <li class="transition" data-tabs="commentfb-pro-detail">Bình luận</li>
                    </ul>
                    <div class="content-tabs-pro-detail info-pro-detail active mgt-25">
                        {!! $food->description !!}
                    </div>
                    <div class="content-tabs-pro-detail commentfb-pro-detail mgt-25">
                        <div class="fb-comments" data-href="{{ route('food.detail', $food->slug) }}"
                            data-numposts="3" data-colorscheme="light" data-width="100%"></div>
                    </div>
                </div>
            </div>

            <div class="title-main">
                <h2>Sản phẩm cùng loại</h2>
            </div>
            <div class="div-product">
                @foreach ($relatedFoods as $relatedFood)
                <div class="product-item">
                    <div class="product-image"><a class="scale-img" href="{{ route('food.detail', $relatedFood->slug) }}"
                            title="{{ $relatedFood->name }}"><img
                                onerror="this.src='/thumbs/540x540x2/assets/images/noimage.png'" class="lazy product-image_food" style="height: 250px !important; object-fit: cover;"
                                src="{{ Storage::url($relatedFood->thumb_img) }}"
                                alt="{{ $relatedFood->name }}"></a></div>
                    <div class="product-desc">
                        <h3 class="product-name"><a class="text-decoration-none text-split text-split-2"
                                href="{{ route('food.detail', $relatedFood->slug) }}" title="{{ $relatedFood->name }}">{{ $relatedFood->name }}</a>
                        </h3>
                        <p class="price-box"><span class="price-new">Liên hệ</span></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="clear"></div>
            <div class="pagination-home mgt-25"></div>

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
            var CONFIG_BASE = '/';
            var WEBSITE_NAME = '';
            var TIMENOW = '{{ date('d/m/Y') }}';
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
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js?v=dooY3mzgCg') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js?v=x2CZLeZySc') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js?v=SB4CwYAjwl') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js?v=AOxtdMsmPG') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/simplyscroll/jquery.simplyscroll.js?v=Ias3B6Hzx') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js?v=DPv8Sj8Fti') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js?v=QvOdPVh40h') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js?v=HpBNZ9mZWw') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/slick/slick.js?v=BZ2Yh1GISW') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/fancybox3/jquery.fancybox.js?v=T6GkOPCzdW') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/photobox/photobox.js?v=jwrvWK2L8Z') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js?v=cYJIhdNf0I') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js?v=qMIspYgdmY') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js?v=bMU6qi2eOF') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/toc/toc.js?v=iR5Qq5PgCK') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/functions.js?v=FyO3WeWhUa') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.pixelentity.shiner.min.js?v=qiEBl2Z0oh') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/swiperjs/swiper-bundle.min.js?v=KptDYMpTz6') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/apps.js?v=QMbwUWd8Dw') }}"></script>



        <!-- Js Structdata -->
        <!-- Product -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Tôm hùng alaska_Đảo Ngọc",
            "image":
            [
            "https://nhahangthaivungtau.com/upload/product/3867175943977839298358961412330629269003547n-1555.jpg"
            ],
            "description": "",
            "sku":"SP0230",
            "mpn": "925872",
            "brand":
            {
                "@type": "Thing",
                "name": "Ẩm Thực Đảo Ngọc"
            },
            "review":
            {
                "@type": "Review",
                "reviewRating":
                {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author":
                {
                    "@type": "Person",
                    "name": "Ẩm Thực Đảo Ngọc"
                }
            },
            "aggregateRating":
            {
                "@type": "AggregateRating",
                "ratingValue": "4.4",
                "reviewCount": "89"
            },
            "offers":
            {
                "@type": "Offer",
                "url": "https://nhahangthaivungtau.com/tom-hung-alaskadao-ngoc",
                "priceCurrency": "VND",
                "price": "0",
                "priceValidUntil": "2020-11-05",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller":
                {
                    "@type": "Organization",
                    "name": "Executive Objects"
                },
                "shippingDetails": {
                  "@type": "OfferShippingDetails",
                  "shippingRate": {
                    "@type": "MonetaryAmount",
                    "value": "0",
                    "currency": "VND"
                },
                "deliveryTime": {
                    "@type": "ShippingDeliveryTime",
                    "businessDays": {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                        "https://schema.org/Monday",
                        "https://schema.org/Tuesday",
                        "https://schema.org/Wednesday",
                        "https://schema.org/Thursday",
                        "https://schema.org/Friday"
                        ]
                    },
                    "handlingTime": {
                      "@type": "QuantitativeValue",
                      "minValue": "0",
                      "maxValue": "3",
                      "samedaydelivery" : "Yes",
                      "unitCode": "DAY"

                  },
                  "transitTime": {
                      "@type": "QuantitativeValue",
                      "minValue": "0",
                      "maxValue": "3",
                      "samedaydelivery" : "Yes",
                      "unitCode": "DAY"
                  }
              },
              "shippingDestination": [
              {
                  "@type": "DefinedRegion",
                  "addressCountry": "VN",
                  "addressRegion": ["VN"]
              }
              ]
          },
          "hasMerchantReturnPolicy": {
            "@type": "MerchantReturnPolicy",
            "applicableCountry": "Vi",
            "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
            "merchantReturnDays" : "7",
            "returnMethod" : "https://schema.org/ReturnByMail",
            "returnFees" : "https://schema.org/FreeReturn"
        }

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

    </html>
</div>
