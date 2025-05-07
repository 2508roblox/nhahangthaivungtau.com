<div>
    <div class="wave-container">
        <div class="wave-container">
            <img src="/logo/Frame_90-removebg-preview.png" style="width: 100%;" alt="">
        </div>
    </div>
    <div id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row text-center text-md-start align-items-center">

                    <!-- Column 1: Info -->
                    <div class="col-md-4 mb-4">
                        <h5>NHÀ HÀNG THÁI</h5>
                        <p>Cityland Park Hills, Phường 11, Quận Gò Vấp,<br>
                            Thành phố Hồ Chí Minh, Việt Nam</p>
                        <p>Hotline: <span class="highlight">{{ $settings->web_phone }}</span></p>
                        <p>Email: <a style="color: #fff;"
                                href="mailto:{{ $settings->web_email }}">{{ $settings->web_email }}</a></p>
                        <div class="social-icons mt-3">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>

                    <!-- Column 2: Logo + Text -->
                    <div class="col-md-4 mb-4 text-center">
                        <img src="/logo/logo_footer.png" alt="Logo" class="logo mb-3">
                        <!-- Thay link này bằng logo của bạn -->
                        <p>©2025 <strong>Khay–Pha Thai</strong>.</p>
                        <p>Design by <strong>Vinasoftware (VNS)</strong></p>
                    </div>

                    <!-- Column 3: Facebook card -->
                    <div class="col-md-4 mb-4">
                        <h5>FACEBOOK</h5>
                        <div class="fb-card p-3 mt-3">
                            <img src="/logo/fanpage.png" alt="Logo" class="brand-logo me-2"> <!-- Avatar -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {!! $settings->map_iframe !!}

    <a class="btn-phone btn-frame text-decoration-none" href="tel:0918606032">
        <i><img src="{{ asset('logo/Facebook_Logo_(2019).png') }}" alt="Hotline"></i>
    </a>
    <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/0918606032">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i><img src="{{ asset('logo/image 20.png') }}" alt="Hotline"></i>

    </a>
    <a class="btn-insta btn-frame text-decoration-none" target="_blank" href="https://zalo.me/0918606032">
        <i><img src="{{ asset('logo/v982-d3-04 1.png') }}" alt="Zalo"></i>
    </a>
    <div id="messages-facebook"></div>

    <div class="fix-toolbar">
        <ul>
            <li>
                <a id="goidien" href="tel:0918606032" title="title">
                    <img src="{{ asset('assets/images/fp-phone.png') }}" alt="images"><br>
                    <span>Gọi điện</span>
                </a>
            </li>
            <li>
                <a id="sms" href="sms:0918606032" title="title">
                    <img src="{{ asset('assets/images/fp-sms.png') }}" alt="images"><br>
                    <span>Nhắn tin</span>
                </a>
            </li>
            <li>
                <a target="_blank"
                    href="https://www.google.com/maps/dir/?api=1&origin=&destination=89 Nguyễn Thị Búp, phường Tân Chánh Hiệp, quận 12, TP. HCM"
                    title="Map">
                    <img src="{{ asset('assets/images/fp-zalo.png') }}" alt="images"><br>

                    <span>Chỉ Đường</span>
                </a>
            </li>
            <li>
                <a id="chatzalo" href="https://zalo.me/0918606032" title="title">
                    <img src="{{ asset('assets/images/fp-zalo.png') }}" alt="images"><br>
                    <span>Chat zalo</span>
                </a>
            </li>
            <li>
                <a target="_blank" id="chatfb" href="https://www.facebook.com/facebook/" title="title">
                    <img src="{{ asset('assets/images/fp-mess.png') }}" alt="images"><br>
                    <span>Chat facebook</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="map-container">
        {!! $settings->web_map_iframe !!}
    </div>
    <style>
        iframe {
            width: 100%;
        }

        #footer {
            background: linear-gradient(180deg, #015436, #004f32);

        }

        .btn-insta {
            bottom: 145px;
        }

        .btn-frame i img {
            vertical-align: middle;
            width: 100%;
        }

        .btn-phone {
            bottom: 210px;
        }

        .progress-wrap::after {

            color: #e3b505;

        }

        .progress-wrap svg.progress-circle path {
            stroke: #e3b505;
        }
        #footer {
    background: #015134;
}
    </style>
</div>