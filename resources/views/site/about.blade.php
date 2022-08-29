@extends('site.layouts.master')
@section('title')
    <title>{{ 'Về chúng tôi'  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading">Về chúng tôi</h1>
                        <div class="entry-content">
                          {!! $config->introduction !!}
                        </div>
                        <div class="clear"></div>

                    </main><!-- #main -->
                </div><!-- #primary -->


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
