@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div id="product-434" class="product">

                            <div class="row">

                                <div class="col-xs-12">

                                    <div
                                        class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images rt_woocommerce-product-gallery"
                                        data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                        <figure class="woocommerce-product-gallery__wrapper">
                                            <div
                                                data-thumb=""
                                                class="woocommerce-product-gallery__image"><a
                                                    href="{{$product->image->path ?? ''}}"><img
                                                        width="370" height="246"
                                                        src="{{$product->image->path ?? ''}}"
                                                        class="attachment-shop_single size-shop_single wp-post-image"
                                                        alt="" title="download" data-caption=""
                                                        data-src=""
                                                        data-large_image=""
                                                        data-large_image_width="370" data-large_image_height="246"
                                                        sizes="100vw"></a></div>
                                        </figure>
                                    </div>
                                    <div class="rt-summary entry-summary">

                                        <h1 class="product_title entry-title">{{$product->name}}</h1>
                                        <div class="rt_woocommerce_single_product_summary clearfix">
                                            <div class="">
                                                <p class="price">
                                                    <span
                                                        class="rt_price_text">Giá bán: {{formatCurrency($product->price)}}</span>
                                                    <span class="rt_single_sale_price"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="psupport"></div>
                                        <ul class="attribute-single number-two"></ul>
                                        <div class="woocommerce-product-details__short-description">
                                            {!! $product->short_des !!}
                                        </div>
                                    </div>

                                </div><!-- .col-xs-12 -->

                            </div>

                        </div><!-- .summary -->


                        <div
                            class="post-434 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-thiet-bi-bang-tai product_tag-bang-tai-chiu-dau-mo instock featured shipping-taxable product-type-simple">


                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="rt_woocommerce_tabs wc-tabs list-unstyled clearfix" role="tablist">
                                    <li class="description_tab active" id="tab-title-description" role="tab"
                                        aria-controls="tab-description">
                                        <a href="#tab-description">Mô tả sản phẩm</a>
                                    </li>
                                </ul>
                                <div
                                    class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                    id="tab-description" role="tabpanel" aria-labelledby="tab-title-description"
                                    style="display: block;">

                                    {!! $product->body !!}

{{--                                    <div class="rt-social"><a class="rt-link rt-facebook"--}}
{{--                                                              id="shareBtn"--}}
{{--                                                              target="_blank">Facebook</a>--}}
{{--                                        <a class="rt-link rt-twitter"--}}
{{--                                                                                             href="#"--}}
{{--                                                                                             target="_blank">Twitter</a>--}}

{{--                                    </div>--}}
                                </div>
                            </div>


                            <div class="related">

                                <h3 class="widget-title">Sản phẩm liên quan</h3>

                                <ul class="list-unstyled product-style">
                                    @foreach($productsRelated as $productRelated)
                                        @include('site.partials.li_product', ['product' => $productRelated])
                                    @endforeach
                                </ul>

                            </div>


                        </div>


                    </main>
                </div>


                @include('site.partials.sidebar_category_product', ['categories' => $categories])

            </div><!-- #layout -->
        </div><!-- .row -->
    </div>

@endsection

@push('scripts')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

    <script>
        document.getElementById('shareBtn').onclick = function() {
            FB.ui({
                method: 'share',
                href: "{{route('front.product-detail', $product->slug)}}",
            }, function(response){});
        }

        window.fbAsyncInit = function() {
            FB.init({
                appId      : '514608355727133',
                xfbml      : true,
                version    : 'v2.3'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endpush
