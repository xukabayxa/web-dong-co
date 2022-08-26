<div class="before-footer clear">
    <div class="container">
        <div class="row">
            <div id="before-footer-1" class="rt-before-footer before-footer-1 widget_wrap">
                <div id="imgpartner-2" class="widget img-partner"><h3 class="widget-title">
                        <span>Đối tác liên kết</span></h3>
                    <div class="image-partner">
                        @foreach($partners as $partner)
                        <div class="slide">
                            <div class="image-item">
                                <a href="{{$partner->link}}" target="_blank" title="{{$partner->name}}">
                                    <img src="{{$partner->image->path ?? ''}}" alt="{{$partner->name}}"/>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            "use strict";
                            jQuery('#imgpartner-2 .image-partner').slick({
                                infinite: true,
                                speed: 2000,
                                autoplay: true,
                                autoplaySpeed: 1500,
                                vertical: false,
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                arrows: true,
                                prevArrow:
                                    '<div class="slick-prev"></div>',
                                nextArrow:
                                    '<div class="slick-next"></div>',
                                responsive: [
                                    {
                                        breakpoint: 1024,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3,
                                            infinite: true,
                                            dots: false
                                        }
                                    },
                                    {
                                        breakpoint: 600,
                                        settings: {
                                            slidesToShow: 4,
                                            slidesToScroll: 1
                                        }
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 1
                                        }
                                    }
                                    // You can unslick at a given breakpoint now by adding:
                                    // settings: "unslick"
                                    // instead of a settings object
                                ]
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div><!-- .bottom-footer -->
