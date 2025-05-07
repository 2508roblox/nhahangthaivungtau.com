<div>

    <div id="menu" style="background: #003D26; padding: 0;">
        <div class="center d-flex align-items-center justify-content-between">
            <div class="left-menu">
                <div style="color: #fff;">
                    <i class="fas fa-map-marker-alt"></i> {{ $settings->web_address }}
                </div>
                <ul class="d-flex align-items-center justify-content-start" style="color: #fff;">
                    <li>
                        <a style="background: {{ request()->routeIs('home') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}" title="Trang chủ" style="color: #fff;">Trang chủ</a>
                    </li>
                    <li>
                        <a style="background: {{ request()->routeIs('about') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}" title="Giới thiệu" style="color: #fff;">Giới thiệu</a>
                    </li>
                    <li   class="menu-item-has-children">
                        <a style="background: {{ request()->routeIs('food.*') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('food.*') ? 'active' : '' }}"
                            href="{{ route('food.list') }}" title="Món ăn" style="color: #fff;">Món ăn</a>
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li class="menu-item-has-children">
                                    <a style="color: #000000;"
                                        href="{{ route('food.list', ['category' => $category->id]) }}"
                                        title="{{ $category->name }}">{{ $category->name }}</a>
                                    @if($category->subCategories->count() > 0)
                                        <ul class="sub-menu">
                                            @foreach($category->subCategories as $subCategory)
                                                <li>
                                                    <a style="color: #000000;"
                                                        href="{{ route('food.list', ['category' => $category->id, 'subcategory' => $subCategory->id]) }}"
                                                        title="{{ $subCategory->name }}">{{ $subCategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="   d-flex align-items-center" id="logo_">
                <a href="{{ route('home') }}">
                    <img onerror="this.src='/thumbs/148x60x2/assets/images/noimage.png';"
                        src="{{ Storage::url($settings->web_logo) }}" alt="{{ $settings->web_name }}"
                        style="width: initial;object-fit: contain;max-height: 150px;" />
                </a>
            </div>
            <style>
                #menu .center {
                    max-width: 1200px;
                }

                #menu ul li ul li a {
                    text-align: left;
                    border-bottom: 1px solid rgb(0 0 0 / 20%);
                    padding: 10px;
                    border-radius: 0;
                }

                #menu {
                    box-shadow: initial;
                }

                @media (max-width: 768px) {
                    #logo_ {
                        width: 100%;
                        display: flex;
                        justify-content: center;
                    }

                    #logo_ img {
                        height: 100px;
                    }
                }
            </style>
            <div class="right-menu">
                <div class="right" style="display: flex; align-items: center; gap: 10px; color: #fff;">
                    <div style="display: flex; align-items: center; gap: 5px; white-space: nowrap; ">
                        <i class="fas fa-phone"></i> Hotline: {{ $settings->web_phone }}
                    </div>
                    <div style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                        <i class="far fa-envelope"></i> Email: {{ $settings->web_email }}
                    </div>
                </div>
                <ul class="d-flex align-items-center justify-content-start">
                    <li>
                        <a style="background: {{ request()->routeIs('video.list') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('video.list') ? 'active' : '' }}"
                            href="{{ route('video.list') }}" title="Review ẩm thực" style="color: #fff;">Review ẩm
                            thực</a>
                    </li>
                    <li>
                        <a style="background: {{ request()->routeIs('album.list') || request()->routeIs('album.*') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('album.list') || request()->routeIs('album.*') ? 'active' : '' }}"
                            href="{{ route('album.list') }}" title="Album ảnh" style="color: #fff;">Album ảnh</a>
                    </li>
                    <li>
                        <a style="background: {{ request()->routeIs('news.list') || request()->routeIs('news.*') ? 'url("/logo/image_2025-05-07_204305047-removebg-preview.png")' : 'url("/logo/image_2025-05-07_204647669-removebg-preview.png")' }} no-repeat center center; background-size: 100% 100%; color: #fff; width: 100%;" class="transition {{ request()->routeIs('news.list') || request()->routeIs('news.*') ? 'active' : '' }}"
                            href="{{ route('news.list') }}" title="Cẩm nang" style="color: #fff;">Cẩm nang</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div id="menu-mobile">
        <div class="menu-bar-res">
            <a id="hamburger" href="#mmenu" title="Menu"><span></span></a>
        </div>
        <div class="search_mobi">
            <input type="text" id="keyword2" placeholder="Nhập từ khóa cần tìm..."
                onkeypress="doEnter(event,'keyword2');" value="">
            <i class="fa fa-search" aria-hidden="true" onclick="onSearch('keyword2');"></i>
        </div>
        <nav id="mmenu">
            <ul>
                <li class="heading">Chuyên mục</li>
                <li>
                    <a  class="transition active" href="{{ route('home') }}" title="Trang chủ">Trang chủ</a>
                </li>
                <li>
                    <a class="transition " href="{{ route('about') }}" title="Giới thiệu">Giới thiệu</a>
                </li>
                <li>
                    <a class="transition " href="{{ route('food.list') }}" title="Món ăn">Món ăn</a>
                </li>
                <li>
                    <a class="transition " href="{{ route('video.list') }}" title="Review ẩm thực">Review ẩm thực</a>
                </li>
                <li>
                    <a class="transition " href="{{ route('album.list') }}" title="Album ảnh">Album ảnh</a>
                </li>
                <li>
                    <a class="transition " href="{{ route('news.list') }}" title="Cẩm nang">Cẩm nang</a>
                </li>
            </ul>
        </nav>
    </div>
</div>