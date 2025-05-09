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
                        <h5
                            style="color: #ffffff;font-size: 2rem;letter-spacing: 1px;margin-bottom: 30px;font-family: 'Lodestone', sans-serif;">
                            NHÀ HÀNG THÁI</h5>
                        <p>Cityland Park Hills, Phường 11, Quận Gò Vấp,<br>
                            Thành phố Hồ Chí Minh, Việt Nam</p>
                        <p>Hotline: <span class="highlight">{{ $settings->web_phone }}</span></p>
                        <p>Email: <a style="color: #fff;"
                                href="mailto:{{ $settings->web_email }}">{{ $settings->web_email }}</a></p>
                        <div class="social-iconss">
                            <div class="icons" onclick="window.open('{{ $settings->web_facebook }}', '_blank')"><img src="/logo/icons8-facebook-480.png" alt="Facebook"></div>
                            <div class="icons" onclick="window.open('{{ $settings->web_instagram }}', '_blank')"><img src="/logo/icons8-instagram-logo-250.png" alt="Instagram"></div>
                            <div class="icons" onclick="window.open('{{ $settings->web_youtube }}', '_blank')"><img src="/logo/icons8-youtube-512.png" alt="YouTube"></div>
                            <div class="icons" onclick="window.open('{{ $settings->web_tiktok }}', '_blank')"><img src="/logo/icons8-tiktok-512.png" alt="TikTok"></div>
                        </div>
                        <style>
                          .social-iconss {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin: 2rem 0;
}
                            .icons {
                                width: 50px;
                                height: 50px;
                                border: 2px solid white;
                                border-radius: 50%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                background-color: #005F40;
                                transition: background-color 0.3s;
                            }

                            .icons:hover {
                                background-color: rgba(255, 255, 255, 0.1);
                            }

                            .icons img {
                                width: 70%;
                                /* Điều chỉnh kích thước biểu tượng */
                            }
                        </style>
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
                        <h5 style="color: #ffffff;font-size: 2rem;letter-spacing: 1px;font-family: 'Lodestone', sans-serif;text-align: left;" class="text-leftsss">FACEBOOK</h5>
                        <div style="
                        padding: 0 !important;!i;!;
                        margin: 0;
                        cursor: pointer;
                    " class="fb-card p-3 mt-3">
                            <img onclick="window.open('{{ $settings->web_facebook }}', '_blank')" src="/logo/fanpage.png" alt="Logo" class="brand-logo me-2"> <!-- Avatar -->
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

        @media (max-width: 767px) {

            .btn-zalo,
            .btn-phone,
            #messages-facebook {
                display: block;
            }
            .text-leftsss {
                text-align: center !important;
            }
        }
    </style>
</div>