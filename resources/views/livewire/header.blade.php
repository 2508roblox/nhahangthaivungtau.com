<div>
    <div class="top-header" style="background: #002418; color: #fff; padding: 5px 0;">
        <div class="center d-flex align-items-center justify-content-between">
            <div class="left">
                <i class="fas fa-map-marker-alt"></i> {{ $settings->address }}
            </div>
            <div class="right">
                <i class="fas fa-phone"></i> Hotline: {{ $settings->hotline }} | <i class="far fa-envelope"></i> Email: {{ $settings->email }}
            </div>
        </div>
    </div>
    <div id="menu" style="background: #003D26;">
        <div class="center d-flex align-items-center justify-content-between">
            <div class="left-menu">
                <ul class="d-flex align-items-center justify-content-start" style="color: #fff;">
                    <li>
                        <a class="transition {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" title="Trang chủ" style="color: #fff;">Trang chủ</a>
                    </li>
                    <li>
                        <a class="transition {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" title="Giới thiệu" style="color: #fff;">Giới thiệu</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a class="transition {{ request()->routeIs('food.*') ? 'active' : '' }}" href="{{ route('food.list') }}" title="Món ăn" style="color: #fff;">Món ăn</a>
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li class="menu-item-has-children">
                                    <a href="{{ route('food.list', ['category' => $category->slug]) }}" title="{{ $category->name }}" style="color: #fff;">{{ $category->name }}</a>
                                    @if($category->subCategories->count() > 0)
                                        <ul class="sub-menu">
                                            @foreach($category->subCategories as $subCategory)
                                                <li>
                                                    <a href="{{ route('food.list', ['category' => $category->slug, 'subcategory' => $subCategory->slug]) }}" title="{{ $subCategory->name }}" style="color: #fff;">{{ $subCategory->name }}</a>
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
            <div class="   d-flex align-items-center">
                <a href="{{ route('home') }}">
                    <img onerror="this.src='/thumbs/148x60x2/assets/images/noimage.png';"
                         src="{{ asset('storage/'.$settings->logo) }}"
                         alt="{{ $settings->website_name }}"
                         style="width: 270px;   object-fit: contain;" />
                </a>
            </div>
            <style>
                #menu .center {
    max-width: 1200px;
}
            </style>
            <div class="right-menu">
                <ul class="d-flex align-items-center justify-content-start">
                    <li>
                        <a class="transition {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.list') }}" title="Review ẩm thực" style="color: #fff;">Review ẩm thực</a>
                    </li>
                    <li>
                        <a class="transition {{ request()->routeIs('album.list') ? 'active' : '' }}" href="{{ route('album.list') }}" title="Album ảnh" style="color: #fff;">Album ảnh</a>
                    </li>
                    <li>
                        <a class="transition {{ request()->routeIs('news.list') ? 'active' : '' }}" href="{{ route('news.list') }}" title="Cẩm nang" style="color: #fff;">Cẩm nang</a>
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
                    <a class="transition active" href="" title="Trang chủ">Trang chủ</a>
                </li>
                <li>
                    <a class="transition " href="gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                </li>
                <li>
                    <a class="transition " href="menu" title="Menu">Menu</a>
                </li>
                <li>
                    <a class="transition " href="video" title="Video">Video</a>
                </li>
                <li>
                    <a class="transition " href="cach-thuong-thuc" title="Cách thưởng thức">Cách thưởng thức</a>
                </li>
                <li>
                    <a class="transition " href="lien-he" title="Liên hệ">Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>
</div>