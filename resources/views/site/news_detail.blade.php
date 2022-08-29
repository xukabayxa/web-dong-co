@extends('site.layouts.master')
@section('title')
    <title>{{ $post->name  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading">{{$post->name}}</h1>
                        <div class="entry-content">

                            <article class="content_detail fck_detail width_common block_ads_connect">
                                {!! $post->body !!}
                            </article>

{{--                            <div class="rt-social"><a class="rt-link rt-facebook"--}}
{{--                                                      href="#"--}}
{{--                                                      target="_blank">Facebook</a>--}}
{{--                                <a class="rt-link rt-twitter"--}}
{{--                                                                                     href="#"--}}
{{--                                                                                     target="_blank">Twitter</a><a--}}
{{--                                    class="rt-link rt-googleplus"--}}
{{--                                    href="#"--}}
{{--                                    target="_blank">Google+</a>--}}
{{--                             --}}
{{--                            </div>--}}
                        </div>
                        <div class="clear"></div>
                        <div class="related-post">
                            <h3 class="heading-realate">Tin Liên Quan</h3>
                            <ul>
                                @foreach($postsRelated as $postRelated)
                                    <li>
                                        <a href="{{route('front.post-detail', $postRelated->slug)}}">{{$postRelated->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End relate -->

                    </main><!-- #main -->
                </div><!-- #primary -->

                @include('site.partials.sidebar_category_product', ['categories' => $categories])

            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
