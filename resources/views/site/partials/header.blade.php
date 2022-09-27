<!--  Header Start -->
<header class="header" ng-controller="headerPartial">
    <!-- haeader Mid Start -->
    <div class="haeader-mid-area bg-white border-bm-1 visible-lg ">
        <div class="container">
            <div class="">
                <div class="logo-header">
                    <div class="logo-area">
                        <a href="{{route('front.home_page')}}"><img src="{{$config->image->path ?? "/site/assets/images/logo/logo.png"}}" alt="{{$config->web_title}}"></a>
                    </div>
                </div>
                <div class="header-main-text">
                    <div class="site-text">
                        <h1 class="company-name">CÔNG TY CỔ PHẦN ĐẦU TƯ DTB VIỆT NAM</h1>
                        <h2 class="slogan">ĐẠI DIỆN CHÍNH HÃNG KSB TẠI VIỆT NAM</h2>
{{--                        <h3 class="header-hot-line">Hotline: {{ $config->hotline }}</h3>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- haeader Mid End -->

    <!-- haeader bottom Start -->
    <div class="haeader-bottom-area header-sticky">
        <div class="container">
            <div class="row align-items-left">
                <div class="col-lg-12 visible-lg visible-md">
                    <div class="main-menu-area green_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation">
                            <ul>
                                <li><a href={{route('front.home_page')}}>Trang chủ</a></li>
                                <li><a href="#">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        @foreach($productCategories as $category)
                                            <li>
                                                <a href="{{route('front.product-category', $category->slug)}}">{{$category->name}}</a>
                                                <ul>
                                                    @foreach($category->childs as $categoryChild)
                                                        <li>
                                                            <a href="{{route('front.product-category', $categoryChild->slug)}}">{{$categoryChild->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>


{{--                                @foreach($postCategories as $post_category)--}}
{{--                                    <li><a href="{{route('front.post-list', $post_category->slug)}}">{{$post_category->name}}</a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
                                <li><a href="{{route('front.post-list')}}">Tin tức</a>
                                </li>

                                <li><a href={{route('front.about')}}>Giới thiệu</a></li>
                                <li><a href="{{route('front.contact')}}">Liên hệ</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="mobile-header-comtent visible-xs">
                    <div class="logo"><a href="{{ route('front.home_page') }}"><img src="{{$config->image->path ?? "/site/assets/images/logo/logo.png"}}" alt=""></a></div>
                    <div class="hidden-lg mobile-menu">
                        <div id="menu-toggle" class="mobile-menu-primary">
                            <span id="">Menu</span>
                            <button id="" type="button" class="rt-navbar-toggle hidden-lg">
                                <span class="screen-reader-text sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- haeader bottom End -->
</header>
<!--  Header Start -->
