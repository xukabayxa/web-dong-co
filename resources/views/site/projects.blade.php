@extends('site.layouts.master')
@section('title')
    <title>{{ 'Dự án tiêu biểu'  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="arc-news">
                            <h1 class="heading">Dự án tiêu biểu</h1>
                            <div class="new-list">
                                @foreach($projects as $project)
                                    <div class="news-post">
                                        <h2 class="title"><a
                                                href="{{route('front.project-detail', $project->slug)}}"
                                                title="{{$project->title}}">{{$project->title}}</a></h2>
                                        <div class="date-time">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> By : <a
                                                href="{{route('front.project-detail', $project->slug)}}"
                                                title="Posts by {{$project->user_create->name}}" rel="author">{{$project->user_create->name}}</a></span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$project->created_at->format('d/m/Y')}}</span>
                                        </div>
                                        <div class="img-post">
                                            <a href="{{route('front.project-detail', $project->slug)}}"
                                               title="">

                                                <img width="250" height="178"
                                                     src="{{$project->image->path ?? ''}}"
                                                     class="attachment-medium size-medium wp-post-image"
                                                     alt="{{$project->title}}">
                                            </a>
                                            <div class="mask">
                                                <h2>
                                                    <a href="{{route('front.project-detail', $project->slug)}}"
                                                       title="{{$project->title}}">{{$project->title}}D</a></h2>

                                                <p></p>
                                                <p>{!! $project->short_des !!}<a class="link-more"
                                                                      href="{{route('front.project-detail', $project->slug)}}">Đọc
                                                        thêm »<span class="screen-reader-text"> {{$project->title}}</span></a>
                                                </p>
                                                <p></p>

                                                <a href="{{route('front.project-detail', $project->slug)}}"
                                                   title="">Xem thêm</a>
                                            </div>
                                        </div>

                                        <p>{!! $project->short_des !!}...<br><a class="more-link"
                                                                     href="{{route('front.project-detail', $project->slug)}}">Đọc
                                                Thêm</a></p>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--End #news-wrap-->

                        {{ $projects->links('site.pagination.paginate2') }}

                    </main><!-- #main -->
                </div><!-- #primary -->


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
