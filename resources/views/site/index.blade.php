@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <div class="page_home">
                            <h3 class="heading" style="margin: 0;">giới thiệu</h3>
                            <div class="content_page">
                                <div class="colum-left">
                                    <img src="http://sonhaiphat.vn/wp-content/uploads/2018/03/images-3-1.jpg">
                                </div>
                                <div class="colum-right">
                                    <div class="des_page">
                                        <?php
                                        $config = \App\Model\Admin\Config::query()->first();
                                        ?>
                                        <p>{{$config->web_des}}</p>
                                    </div>
                                    <a class="views-al" href="{{route('front.about')}}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_home">
                            @foreach($categories as $categoryProduct)
                                <div class="product_list">
                                    <h2 class="heading">
                                        <a href="{{route('front.product-category', $categoryProduct->slug)}}">
                                            {{$categoryProduct->name}} </a>
                                    </h2>
                                    <div class="content_cate">
                                        <img src='{{$categoryProduct->image->path ?? ''}}'>
                                        @foreach($categoryProduct->child_categories as $childCategoryProduct)
                                            <li>
                                                <a href="{{route('front.product-category', ['slug' => $categoryProduct->slug, 'childSlug' => $childCategoryProduct->slug])}}"><i
                                                        class="fa fa-stop"></i>{{$childCategoryProduct->name}}</a>
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                        <!-- End Product -->


                    </main><!-- #main -->
                </div><!-- #primary -->

                @include('site.partials.sidebar_category_product', ['categories' => $categories])

                <div class="news-home project clear">
                </div>

                <div class="news-home clear">
                    <div class="list 3 clear">
                        <h2 class="headings">
                            <a href="{{route('front.project-list')}}">
                                Dự án tiêu biểu </a>
                        </h2>
                        <div class="list-news">
                            <div class="style-blog-3 rt-shortcodes rt-blog-shortcode">
                                <div class="fusion-row">
                                    @foreach($projects as $project)
                                    <article id="post-11082"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-11082 post type-post status-publish format-standard has-post-thumbnail category-du-an-tieu-bieu tag-may-dan-luu-hoa-bang-tai tag-may-dan-luu-hoa-bang-tai-comix tag-may-dan-noi-bang-tai-comix">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href=""
                                                    title="{{$project->title}}"><img
                                                        width="1000" height="750"
                                                        src="{{$project->image->path ?? ''}}"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">{{$project->created_at->format('d/m/Y')}}</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="{{route('front.project-detail', $project->slug)}}"
                                                        title={{$project->title}}"">{{$project->title}}</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>{{$project->created_at->format('d/m/Y')}}</span>
                                                </div>
                                                <div class="entry-description">{!! $project->short_des !!}
                                                </div>
                                                <a href="{{route('front.project-detail', $project->slug)}}"
                                                   title="CUNG CẤP MÁY DÁN LƯU HÓA BĂNG TẢI COMIX &#8211; GERMANY"
                                                   class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                 aria-hidden="true"></i></a></div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list 3 clear">
                        <h2 class="headings">
                            <a href="{{route('front.post-list')}}">
                                Tin tức </a>
                        </h2>
                        <div class="list-news">
                            <div class="style-blog-3 rt-shortcodes rt-blog-shortcode">
                                <div class="fusion-row">
                                    @foreach($posts as $post)
                                        <article id="post-9385"
                                                 class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-9385 post type-post status-publish format-standard has-post-thumbnail category-tin-tuc">
                                            <div class="post-inner">
                                                <div class="entry-thumb"><a
                                                        href="{{route('front.post-detail', $post->slug)}}"
                                                        title="{{$post->name}}"><img
                                                            width="250" height="178"
                                                            src="{{$post->image->path ?? ''}}"
                                                            class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                            alt=""
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                    <p class="timestyle5"
                                                       style="display:none;">{{$post->created_at->format('d/m/Y H:i')}}</p>
                                                    <span>view</span></div>
                                                <div class="entry-content"><h3 class="entry-title"><a
                                                            href="{{route('front.post-detail', $post->slug)}}"
                                                            title="Tập đoàn Mỹ đầu tư nhà máy điện khí 5 tỷ USD">{{$post->name}}</a>
                                                    </h3>
                                                    <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                                 aria-hidden="true"></i>{{$post->created_at->format('d/m/Y H:i')}}</span>
                                                    </div>
                                                    <div class="entry-description">{{$post->intro}}

                                                    </div>
                                                </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #layout -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

@push('scripts')
@endpush
