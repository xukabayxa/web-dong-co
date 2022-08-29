@extends('site.layouts.master')
@section('title')
    <title>{{ 'Sản phẩm'  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <header class="woocommerce-products-header">

                        </header>


                        <h1 class="woocommerce-products-header__title page-title heading">Sản phẩm</h1>


                        <div class="box-pro">
                            <div class="result_count-ordering clearfix">
                            </div>

                            <ul class="list-unstyled product-style">
                                @foreach($products as $product)
                                    @include('site.partials.li_product', ['product' => $product])
                                @endforeach
                            </ul>

                            {{ $products->links('site.pagination.paginate2') }}

                        </div>
                    </main>
                </div>


                @include('site.partials.sidebar_category_product', ['categories' => $categories])

            </div><!-- #layout -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

@push('scripts')
@endpush
