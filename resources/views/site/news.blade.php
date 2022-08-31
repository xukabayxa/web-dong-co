@extends('site.layouts.master')
@section('title')
    <title>{{ 'Tin tức'  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="arc-news">
                            <h1 class="heading">Tin tức</h1>
                            <div class="new-list">
                                @foreach($posts as $post)
                                    <div class="news-post">
                                        <h2 class="title"><a
                                                href="{{route('front.post-detail', $post->slug)}}"
                                                title="{{$post->name}}">{{$post->name}}</a></h2>
                                        <div class="date-time">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> By : <a
                                                href="{{route('front.post-detail', $post->slug)}}"
                                                title="Posts by {{$post->user_create->name}}" rel="author">{{$post->user_create->name}}</a></span>
                                          <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at->format('d/m/Y')}}</span>
                                        </div>
                                        <div class="img-post">
                                            <a href="{{route('front.post-detail', $post->slug)}}"
                                               title="">

                                                <img width="250" height="178"
                                                     src="{{$post->image->path ?? ''}}"
                                                     class="attachment-medium size-medium wp-post-image"
                                                     alt="{{$post->name}}">
                                            </a>
                                            <div class="mask">
                                                <h2>
                                                    <a href="{{route('front.post-detail', $post->slug)}}"
                                                       title="{{$post->name}}">{{$post->name}}D</a></h2>

                                                <p></p>
                                                <p>{{$post->intro}}<a class="link-more"
                                                               href="{{route('front.post-detail', $post->slug)}}">Đọc
                                                        thêm »<span class="screen-reader-text"> {{$post->name}}</span></a>
                                                </p>
                                                <p></p>

                                                <a href="{{route('front.post-detail', $post->slug)}}"
                                                   title="">Xem thêm</a>
                                            </div>
                                        </div>

                                        <p>{{$post->intro}}...<br><a class="more-link"
                                                            href="{{route('front.post-detail', $post->slug)}}">Đọc
                                                Thêm</a></p>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--End #news-wrap-->

                        {{ $posts->links('site.pagination.paginate2') }}

                    </main><!-- #main -->
                </div><!-- #primary -->


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
