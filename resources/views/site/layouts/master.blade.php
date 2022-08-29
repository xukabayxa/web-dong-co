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
            <li id="menu-item-235"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-235">
                <a href="{{route('front.product-list')}}">Sản phẩm</a></li>
            <li id="menu-item-167" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167"><a
                    href="{{route('front.post-list')}}">Tin tức</a></li>
            <li id="menu-item-169" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-169"><a
                    href="{{route('front.about')}}">Giới thiệu</a></li>
            <li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a
                    href="{{route('front.contact')}}">Liên hệ</a></li>
        </ul>
    </div><!-- .mobile-menu-container -->

    <div class="overlay"></div>
    <div class="backtotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

</div>
<link rel='stylesheet' id='metaslider-nivo-slider-css' href='/site/css/nivo-slider.css' type='text/css' media='all'
      property='stylesheet'/>
<link rel='stylesheet' id='metaslider-public-css' href='/site/css/public.css' type='text/css' media='all'
      property='stylesheet'/>
<link rel='stylesheet' id='metaslider-nivo-slider-default-css' href='/site/css/default.css' type='text/css' media='all'
      property='stylesheet'/>
<script type='text/javascript' src='/site/js/scripts.js'></script>
<script type='text/javascript' src='/site/js/add-to-cart.min.js'></script>
<script type='text/javascript' src='/site/js/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/site/js/js.cookie.min.js'></script>
<script type='text/javascript' src='/site/js/woocommerce.min.js'></script>
<script type='text/javascript' src='/site/js/cart-fragments.min.js'></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/libs/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type='text/javascript' src='/site/js/main.js'></script>

<script>
    $(".owl-carousel").on("initialized.owl.carousel", () => {
        setTimeout(() => {
            $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
            $("section").show();
        }, 50);
    });

    const $owlCarousel = $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        slideSpeed: 450,
        autoplay: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplayTimeout: 2000,
        navText: ["", ""]
    });

</script>

<script type='text/javascript'>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
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

    });



</script>
</body>
</html>
