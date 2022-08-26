<!DOCTYPE html>
<html lang="vi-vn" xml:lang="vi-vn">
<head>
    @include('site.partials.head')
</head>
<body class="home blog hfeed has-sidebar woocommerce single-product" ng-app="App">

<div class="site site-container full w1200">
    @include('site.partials.header')

    <div id="content" class="site-content">
        @include('site.partials.banner')

        @yield('content')
    </div>

    @include('site.partials.before_footer')
    @include('site.partials.footer')

    <div class="site-footer-home">
        <div class="container">
        </div>
    </div>

    <div class="mobile-menu-container">
        <div class="close-menu">Đóng menu <i class="fa fa-times" aria-hidden="true"></i></div>

        <ul id="moblie-menu" class="mobile-menu">
            <li id="menu-item-235"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-235">
                <a href="{{route('front.home_page')}}">Trang chủ</a></li>
            <li id="menu-item-169" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-169"><a
                    href="{{route('front.about')}}">Giới thiệu</a></li>
            <li id="menu-item-167" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167"><a
                    href="{{route('front.post-list')}}">Tin tức</a></li>
            <li id="menu-item-166" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-166"><a
                    href="{{route('front.project-list')}}">Dự án</a></li>
            <li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a
                    href="{{route('front.contact')}}">Liên hệ</a></li>
        </ul>
    </div><!-- .mobile-menu-container -->

    <div class="overlay"></div>
    <div class="backtotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

</div>

<div id="glt-toolbar"></div>
<div id='glt-footer'></div>

<script>function GoogleLanguageTranslatorInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'vi',
            includedLanguages: 'en,vi',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
            autoDisplay: false
        }, 'google_language_translator');
    }</script>
<link rel='stylesheet' id='metaslider-nivo-slider-css' href='/site/css/nivo-slider.css' type='text/css' media='all'
      property='stylesheet'/>
<link rel='stylesheet' id='metaslider-public-css' href='/site/css/public.css' type='text/css' media='all'
      property='stylesheet'/>
<link rel='stylesheet' id='metaslider-nivo-slider-default-css' href='/site/css/default.css' type='text/css' media='all'
      property='stylesheet'/>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/sonhaiphat.vn\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}
    };
    /* ]]> */
</script>
<script type='text/javascript' src='/site/js/scripts.js'></script>
<script type='text/javascript' src='/site/js/element.js?cb=GoogleLanguageTranslatorInit'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "http:\/\/sonhaiphat.vn\/gio-hang\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='/site/js/add-to-cart.min.js'></script>
<script type='text/javascript' src='/site/js/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/site/js/js.cookie.min.js'></script>

<script type='text/javascript' src='/site/js/woocommerce.min.js'></script>

<script type='text/javascript' src='/site/js/cart-fragments.min.js'></script>
<script type='text/javascript' src='/site/js/slick.min.js'></script>
<script type='text/javascript' src='/site/js/owl.carousel.min.js'></script>

<script type='text/javascript' src='/site/js/main.js'></script>
<script type='text/javascript' src='/site/js/wp-embed.min.js'></script>
<script type='text/javascript' src='/site/js/jquery.nivo.slider.pack.js'></script>
<script type='text/javascript'>
    var metaslider_12 = function ($) {
        $('#metaslider_12').nivoSlider({
            boxCols: 7,
            boxRows: 5,
            pauseTime: 3000,
            effect: "fade",
            controlNav: false,
            directionNav: true,
            pauseOnHover: true,
            animSpeed: 600,
            prevText: "&lt;",
            nextText: "&gt;",
            slices: 15,
            manualAdvance: false
        });
    };
    var timer_metaslider_12 = function () {
        var slider = !window.jQuery ? window.setTimeout(timer_metaslider_12, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_12, 1) : metaslider_12(window.jQuery);
    };
    timer_metaslider_12();
</script>

<!-- jquery -->

<!-- Angular Js -->
<script src="{{ asset('libs/angularjs/angular.js') }}"></script>
<script src="{{ asset('libs/angularjs/angular-resource.js') }}"></script>
<script src="{{ asset('libs/angularjs/sortable.js') }}"></script>
<script src="{{ asset('libs/dnd/dnd.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular-sanitize.js"></script>
<script src="{{ asset('libs/angularjs/select.js') }}"></script>
<script src="{{ asset('js/angular.js') }}?version={{ env('APP_VERSION', '1') }}"></script>
<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stack('scripts')

<script>
    app.controller('headerPartial', function ($rootScope, $scope) {
        $scope.search = function () {
            let keyword = $("input#search-form").val();
            if(! keyword) {
                alert('Vui lòng nhập từ khóa');
                return;
            }

            location.href = '/tim-kiem?keyword=' + (keyword);
        }

        //
        // // click button search
        // $("button.btn-search").on("click", function() {
        //     var keyword = $(this).parents('form').find('.keyword').val();
        //
        //     if(! $scope.search.category_id) {
        //         $scope.search.category_id = 'all';
        //     }
        //
        //     if (keyword.length == 0) {
        //         return;
        //     }
        //
        //     location.href = '/tim-kiem?keyword=' + (keyword) + '&category_id=' + $scope.search.category_id;
        // });

    });



</script>
</body>
</html>
