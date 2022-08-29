<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/site/image/logo.png"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="/site/js/jquery.min.js"></script>
    <script type="text/javascript" src="/site/js/w2ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/site/css/w2ui.min.css"/>

    @yield('title')
    <!-- This site is optimized with the Yoast SEO plugin v7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:site_name" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content=""/>

    <!-- / Yoast SEO plugin. -->
    <link rel='dns-prefetch' href='//translate.google.com'/>
    <link rel='dns-prefetch' href='//code.jquery.com'/>
    <link rel="alternate" type="application/rss+xml" title=""
          href=""/>
    <link rel="alternate" type="application/rss+xml" title=""
          href=""/>
    <link rel='stylesheet' id='support-css-css' href='/site/css/support.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-blog-shortcode-css' href='/site/css/rt-blog-shortcode.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css' href='/site/css/styles.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='google-language-translator-css' href='/site/css/style.css' type='text/css' media=''/>
    <link rel='stylesheet' id='glt-toolbar-styles-css' href='/site/css/toolbar.css' type='text/css' media=''/>
    <link rel='stylesheet' id='woocommerce-layout-css' href='/site/css/woocommerce-layout.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='/site/css/woocommerce-smallscreen.css' type='text/css'
          media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css' href='/site/css/woocommerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-general-css' href='css/woocommerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='/site/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='/site/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='slick-css' href='/site/css/slick.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='jquery-ui-base-css' href='/site/css/jquery-ui.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='xzoom-css' href='/site/css/xzoom.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-widget-css' href='/site/css/widget.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-media-css' href='/site/css/media.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-woo-css' href='/site/css/woo.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-main-css' href='/site/css/main.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-main-css' href='/site/css/loading.css' type='text/css' media='all'/>
    <style id='rt-main-inline-css' type='text/css'>
        body {
        }

        .widget-title {
            background-color: #05559F;
        }

        .site-main .heading {
            background-color: #05559F;
            background-repeat: no-repeat;
            background-position: left center;
        }

        .site-footer {
            background-color: #05559F;
            background-repeat: no-repeat;
            background-position: center center;
        }

        #primary-menu li ul.sub-menu {
        }

        .primary-menu li a:hover, .primary-menu li.current-menu-item a {
        }

        .site-footer > .container {
            background-color: #05559F;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    <link rel='stylesheet' id='rt-res-css' href='/site/css/res.css' type='text/css' media='all'/>
    <script type='text/javascript' src='/site/js/jquery.js'></script>
    <script type='text/javascript' src='/site/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/site/js/xzoom.js'></script>
    <link rel='https://api.w.org/' href='http://sonhaiphat.vn/wp-json/'/>
    <link rel="stylesheet" href="/site/css/counter.css" type="text/css"/>
<style>
    .owl-carousel .owl-nav {
        left: 50%;
        top: 50%;
        transform: translateX(-50%);
        margin: 0;
        position: absolute;
        margin-top: 0;
        width: 100%;
    }

    .owl-carousel .owl-nav svg {
        opacity: 0.3;
        transition: opacity 0.3s;
        position: relative;
    }

    .owl-carousel .owl-nav button:hover svg {
        opacity: 1;
    }

    .owl-carousel .owl-nav [class*="owl-"]:hover {
        background: transparent;
    }

    @media screen and (max-width: 575px) {
        .owl-carousel .owl-nav {
            top: 5%;
        }

        .owl-carousel .owl-nav svg {
            width: 24px;
            height: 24px;
        }

        .owl-prev,
        .owl-next {
            width: 15px;
            height: 100px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: block !important;
            border: 0px solid black;
        }

        .owl-prev {
            left: -20px;
        }

        .owl-next {
            right: -20px;
        }

        .owl-prev svg,
        .owl-next svg {
            transform: scale(2, 5);
            color: #ccc;
        }
    }

    .owl-carousel .owl-dots {
        display: block;
        margin-top: -20px;
        text-align: center;
        width: 100%;
    }

    .owl-carousel .owl-dots .owl-dot.active {
        /*background: #fff;*/
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #fff;
    }

</style>
    <link rel="stylesheet" href="/libs/owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/libs/owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

    <style type="text/css">.goog-te-gadget {
            margin-top: 2px !important;
        }



        p.hello {
            font-size: 12px;
            color: #666;
        }

        #google_language_translator {
            clear: both;
        }

        #flags {
            width: 165px;
        }

        #flags a {
            display: inline-block;
            margin-right: 2px;
        }

        #google_language_translator a {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget {
            font-size: 0px !important;
        }

        .goog-branding {
            display: none;
        }

        .goog-tooltip {
            display: none !important;
        }

        .goog-tooltip:hover {
            display: none !important;
        }

        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        #google_language_translator {
            display: none;
        }

        #google_language_translator select.goog-te-combo {
            color: #32373c;
        }

        .goog-te-banner-frame {
            visibility: hidden !important;
        }

        body {
            top: 0px !important;
        }

        #glt-translate-trigger {
            left: 20px;
            right: auto;
        }

        #glt-translate-trigger > span {
            color: #ffffff;
        }

        #glt-translate-trigger {
            background: #f89406;
        }</style>

    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
</head>
