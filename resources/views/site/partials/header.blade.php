<header class="site-header" role="banner" ng-controller="headerPartial">
    <div class="rt-header">
        <div class="container">
{{--            <div id="glt_widget-2" class="widget widget_glt_widget">--}}
{{--                <div id="flags" class="size22">--}}
{{--                    <ul id="sortable" class="ui-sortable" style="float:left">--}}
{{--                        <li id='English'><a title='English' class='notranslate flag en united-states'></a></li>--}}
{{--                        <li id='Vietnamese'><a title='Vietnamese' class='notranslate flag vi Vietnamese'></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div id="google_language_translator" class="default-language-vi"></div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="site-branding">
        <div class="container">
            <div class="row">
                <div class="header-layout">
                    <a href="{{route('front.home_page')}}" title="{{$config->web_title}}">
                        <img src="/site/image/logo.png"
                             alt="{{$config->web_title}}">
                    </a>
                    <h1 class="site-title hidden"><a href="http://sonhaiphat.vn/">{{$config->web_title}}</a></h1>
                </div>
                <div class="nav-layout">
                    <nav id="site-navigation" class="main-navigation">
                        <div class="container_class">
                            <div class="row">

                                <div class="primary-menu-container visible-lg col-lg-9">
                                    <ul id="primary-menu" class="primary-menu menu clearfix">
                                        <li id="menu-item-396"
                                            class="menu-item menu-item-type-custom menu-item-object-custom {{ Request::routeIs('front.home_page') ? 'current_page_item' : '' }} menu-item-home menu-item-396">
                                            <a href="{{route('front.home_page')}}">Trang chủ</a></li>
                                        <li id="menu-item-397"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-397 {{ Request::routeIs('front.product-list') ? 'current_page_item' : '' }}">
                                            <a href="{{route('front.product-list')}}">Sản phẩm</a></li>
                                        <li id="menu-item-127"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127 {{ Request::routeIs('front.about') ? 'current_page_item' : '' }}">
                                            <a href="{{route('front.about')}}">GIỚI THIỆU</a></li>
                                        <li id="menu-item-128"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128 {{ Request::routeIs('front.contact') ? 'current_page_item' : '' }}">
                                            <a href="{{route('front.contact')}}">Liên hệ</a></li>
                                    </ul>
                                </div>

                                <div class="header-search col-lg-3 col-md-10 col-sm-10 col-xs-10">


                                    <form role="search" method="get" class="search-form">
                                        <label for="search-form">
                                            <span class="screen-reader-text">Tìm kiếm:</span>
                                        </label>
                                        <input type="search" id="search-form" class="search-field"
                                               value="" name="s" />
                                        <button type="submit" class="search-submit" ng-click="search()"><i class="fa fa-search"
                                                                                       aria-hidden="true"></i><span
                                                class="screen-reader-text">Search</span></button>
                                    </form>
                                </div>

                                <div class="hidden-lg col-md-2 col-sm-2 col-xs-2">
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
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </nav><!-- #site-navigation -->
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-branding -->
</header><!-- #masthead -->
