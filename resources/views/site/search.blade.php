@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="search-result">
                            <h2 class="heading">Kết quả tìm kiếm : {{$_GET['keyword']}}</h2>
                            <div class="search-value row">
                                @foreach($products as $product)
                                    <div class="news-post col-md-4">
                                        <a href="" title="{{$product->name}}">
                                            <img width="300" height="200" src="{{$product->image->path ?? '/asset_front/img/shop/img4.jpg'}}" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">						    </a>
                                        <a class="title" href="{{route('front.product-detail', $product->slug)}}" title="{{$product->name}}">{{$product->name}}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </main><!-- #main -->
                </div><!-- #primary -->


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
