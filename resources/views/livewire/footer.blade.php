<div>
    <div class="wave-container">
        <div class="wave-container">
            <svg viewBox="0 0 1440 200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
              <path d="
                M0,120
                C120,40 240,200 360,120
                C480,40 600,0 720,120
                C840,240 960,240 1080,120
                C1200,0 1320,80 1440,120
              "
              fill="none" stroke="#FFD369" stroke-width="5" />
            </svg>
          </div>
      </div>
    <div id="footer">

        <div class="footer-top">
            <div class="center d-flex flex-wrap align-items-start justify-content-between">
                <div class="footer-1">
                    <div class="logo-ft sss1 d-flex align-items-center justify-content-center">
                        <a href=""><img onerror="this.src='/thumbs/225x90x2/assets/images/noimage.png';"
                                src="{{ asset('/thumbs/225x90x2/upload/photo/logoft-4363.png') }}" /></a>
                    </div>
                    <div class="footer-content">
                        <p style="text-align: center;">Địa chỉ: 89 Nguyễn Thị Búp, Quận 12, Thành phố Hồ Chí Minh,
                            Việt Nam</p>

                        <p style="text-align: center;">Email: nhahangthaivungtau@gmail.com  Hotline - 0918 606 032</p>

                        <p style="text-align: center;"> </p>

                        <p style="text-align: center;">Hân hạnh được phục vụ quý khách!</p>
                    </div>
                    <ul class="mxh footer-mxh">
                        <li>
                            <a href="" target="_blank">
                                <img onerror="this.src='/thumbs/20x20x2/assets/images/noimage.png';"
                                    src="{{ asset('/thumbs/20x20x2/upload/photo/socicalft4-28243.png') }}"
                                    alt="4">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img onerror="this.src='/thumbs/20x20x2/assets/images/noimage.png';"
                                    src="{{ asset('/thumbs/20x20x2/upload/photo/socicalft3-88092.png') }}"
                                    alt="3">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img onerror="this.src='/thumbs/20x20x2/assets/images/noimage.png';"
                                    src="{{ asset('/thumbs/20x20x2/upload/photo/socicalft2-68291.png') }}"
                                    alt="2">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img onerror="this.src='/thumbs/20x20x2/assets/images/noimage.png';"
                                    src="{{ asset('/thumbs/20x20x2/upload/photo/socicalft1-42700.png') }}"
                                    alt="1">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="center d-flex flex-wrap align-items-center justify-content-between">
                <p class="copyright">Copyright ©2024 Ẩm Thực Đảo Ngọc. Design by <a
                        href="https://vinasoftware.com.vn/">Vina Software (VNS)</a></p>
            </div>
        </div>

    </div>

    {!! $settings->map_iframe !!}
    <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/0918606032">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i><img src="{{ asset('assets/images/zl.png') }}" alt="Zalo"></i>
    </a>
    <a class="btn-phone btn-frame text-decoration-none" href="tel:0918606032">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i><img src="{{ asset('assets/images/hl.png') }}" alt="Hotline"></i>
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
                    <img src="{{ asset('assets/images/fp-chiduong.png') }}" alt="images"><br>
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
</div>
