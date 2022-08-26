@extends('site.layouts.master')
@section('title')
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

                            <div class="rt-social"><a class="rt-link rt-facebook"
                                                      href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsonhaiphat.vn%2Ftap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd%2F"
                                                      target="_blank">Facebook</a><a class="rt-link rt-twitter"
                                                                                     href="https://twitter.com/intent/tweet?text=Tập%20đoàn%20Mỹ%20đầu%20tư%20nhà%20máy%20điện%20khí%205%20tỷ%20USD&amp;url=http%3A%2F%2Fsonhaiphat.vn%2Ftap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd%2F&amp;via=rt"
                                                                                     target="_blank">Twitter</a><a
                                    class="rt-link rt-googleplus"
                                    href="https://plus.google.com/share?url=http%3A%2F%2Fsonhaiphat.vn%2Ftap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd%2F"
                                    target="_blank">Google+</a><a class="rt-link rt-pinterest"
                                                                  href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsonhaiphat.vn%2Ftap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd%2F&amp;media=http://sonhaiphat.vn/wp-content/uploads/2019/10/nheit.jpg&amp;description=Tập%20đoàn%20Mỹ%20đầu%20tư%20nhà%20máy%20điện%20khí%205%20tỷ%20USD"
                                                                  data-pin-custom="true" target="_blank">Pin It</a>
                            </div>
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
