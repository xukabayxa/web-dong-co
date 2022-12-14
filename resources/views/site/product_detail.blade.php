@extends('site.layouts.master')
@section('title')
    <title>{{ $product->name  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
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
                                                        class="rt_price_text">Gi?? b??n: {{formatCurrency($product->price)}}</span>
                                                    <span class="rt_single_sale_price"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="psupport"></div>
                                        <ul class="attribute-single number-two"></ul>
                                        <div class="woocommerce-product-details__short-description">
                                            {!! $product->short_des !!}
                                        </div>
                                        <br/>
                                        <div>
                                            <?php
                                            $attachments = explode(',', $product->attachments);
                                            $attachments = array_filter($attachments, function ($val){
                                                return $val;
                                            })
                                            ?>
                                            @foreach($attachments as $attachment)
                                                <div style="margin-bottom: 10px">
                                                    <a href="{{$attachment}}"
                                                       class="btn btn-primary btn-xs"><i class="fa fa-download"
                                                                                         aria-hidden="true"></i> {{basename($attachment)}}</a>
                                                </div>

                                            @endforeach



                                        </div>
                                    </div>

                                </div><!-- .col-xs-12 -->

                            </div>

                        </div><!-- .summary -->

                        <div
                            class="post-434 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-thiet-bi-bang-tai product_tag-bang-tai-chiu-dau-mo instock featured shipping-taxable product-type-simple">

                            <div class="woocommerce-tabs wc-tabs-wrapper">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">M?? T??? S???N PH???M</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">VIDEO</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent" style="margin-top: 15px">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        {!! $product->body !!}
                                    </div>
                                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                                        <div style="text-align: center">
                                            @foreach($product->videos as $video)
                                                <video src="{{$video->link}}" width="500px" height="300px" controls></video>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>

{{--                                <ul class="rt_woocommerce_tabs wc-tabs list-unstyled clearfix" role="tablist">--}}
{{--                                    <li class="description_tab active" id="tab-title-description" role="tab"--}}
{{--                                        aria-controls="tab-description">--}}
{{--                                        <a href="#tab-description">M?? t??? s???n ph???m</a>--}}
{{--                                    </li>--}}

{{--                                    <li class="description_tab" id="tab-title-video" role="tab"--}}
{{--                                        aria-controls="tab-video">--}}
{{--                                        <a href="#tab-video">Video</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                                <div--}}
{{--                                    class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab active"--}}
{{--                                    id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">--}}
{{--                                    {!! $product->body !!}--}}
{{--                                </div>--}}


{{--                                <div--}}
{{--                                    class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"--}}
{{--                                    id="tab-video" role="tabpanel" aria-labelledby="tab-title-video">--}}

{{--                                    @foreach($product->videos as $video)--}}
{{--                                        <video src="{{$video->link}}" controls></video>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}



                            </div>


                            <div class="related">

                                <h3 class="widget-title">S???n ph???m li??n quan</h3>

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
        document.getElementById('shareBtn').onclick = function () {
            FB.ui({
                method: 'share',
                href: "{{route('front.product-detail', $product->slug)}}",
            }, function (response) {
            });
        }

        window.fbAsyncInit = function () {
            FB.init({
                appId: '514608355727133',
                xfbml: true,
                version: 'v2.3'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endpush
