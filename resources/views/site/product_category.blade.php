@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <header class="woocommerce-products-header">

                        </header>

                        <h1 class="woocommerce-products-header__title page-title heading">{{$category->name}}</h1>

                        @if($category->child_categories->count() && ! $childSlug)
                            <div class="box-pro">
                                @foreach($category->child_categories as $childCategory)
                                    <h2 class="headings">
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/dong-co-dien-thiet-bi-truyen-dong/">
                                            {{$childCategory->name}} </a>
                                    </h2>
                                    <ul class="woocommerce product-style ">
                                        @foreach($childCategory->products as $product)
                                            @include('site.partials.li_product', ['product' => $product])
                                        @endforeach
                                    </ul>
                                @endforeach
                            </div>
                        @elseif($childSlug || $productCategory)
                            <div class="box-pro">
                                <div class="result_count-ordering clearfix">
                                </div>

                                <ul class="list-unstyled product-style">
                                    @foreach($productCategory as $product)
                                        @include('site.partials.li_product', ['product' => $product])
                                    @endforeach
                                </ul>

                                {{ $productCategory->links('site.pagination.paginate2') }}

                            </div>
                        @endif
                    </main>
                </div>


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush