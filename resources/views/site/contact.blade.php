@extends('site.layouts.master')
@section('title')
    <title>{{ 'Liên hệ'  . ' - '. ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div class="container" ng-controller="Contact">
        <div class="">
            <div id="layout" class="clearfix sidebar-left">

                <style>
                    .invalid-feedback {
                        margin-left: 10px;
                        color: rgba(255, 0, 30, 0.89);
                    }
                </style>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading">Liên hệ</h1>
                        <div class="entry-content">
                            <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <h5 ng-if="sendSuccess">Cảm ơn bạn đã để lại liên hệ, chúng tôi sẽ liên lạc lại với bạn sớm nhất !</h5>

                                <form method="post" class="wpcf7-form" ng-if="! sendSuccess">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="6">
                                        <input type="hidden" name="_wpcf7_version" value="5.0.1">
                                        <input type="hidden" name="_wpcf7_locale" value="vi">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p15-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="15">
                                    </div>
                                    <div class="form-lienhe">
                                        <div class="box-colum-1">
                                            <div class="left">
                                                <label>Họ tên</label>
                                                <span class="wpcf7-form-control-wrap text-545">
                                                    <input type="text" name="text-545" value="" size="40"
                                                           class="wpcf7-form-control wpcf7-text" aria-invalid="false" ng-model="contact.user_name"
                                                           placeholder="Nhập họ và tên">
                                                </span>
                                            <div class="invalid-feedback">
                                                 <span class=" d-block" role="alert"
                                                       ng-if="errors && errors.user_name" >
                                                 <strong><% errors.user_name[0] %></strong>
                                            </span>
                                            </div>
                                            </div>

                                            <div class="right"><label>Điện thoại</label><span
                                                    class="wpcf7-form-control-wrap number-683">
                                                    <input type="text" name="number-683" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                                           aria-invalid="false" ng-model="contact.phone_number"
                                                           placeholder="Nhập số điện thoại"></span>
                                                <span class="invalid-feedback d-block" role="alert"
                                                      ng-if="errors && errors.phone_number" >
                                                    <strong><% errors.phone_number[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box-colum-2"><label>Địa chỉ</label><span
                                                class="wpcf7-form-control-wrap text-546"><input type="text"  ng-model="contact.address"
                                                                                                name="text-546" value=""
                                                                                                size="40"
                                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                                aria-invalid="false"
                                                                                                placeholder="Địa chỉ"></span>
                                        </div>
                                        <div class="box-colum-3"><label>Nội dung</label><span
                                                class="wpcf7-form-control-wrap textarea-444"><textarea
                                                    name="textarea-444" cols="40" rows="10" ng-model="contact.content"
                                                    class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Nhập nội dung liên hệ"></textarea></span>
                                            <span class="invalid-feedback d-block" role="alert"
                                                  ng-if="errors && errors.content" >
                                        <strong><% errors.content[0] %></strong>
                                        </span>
                                        </div>
                                        <div class="submits"><input type="button" value="Gửi liên hệ" ng-click="submit()"
                                                                    class="wpcf7-form-control wpcf7-submit"><span
                                                class="ajax-loader"></span></div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </main><!-- #main -->
                </div><!-- #primary -->


                @include('site.partials.sidebar_category_product', ['categories' => $categories])


                <div class="loading"><i class="icon">Loading</i></div>

            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
    <script>
        app.controller('Contact', function ($scope, $http) {
            $scope.contact = {};
            $scope.submit = function() {
                var url = "{{route('send.contact')}}";
                $scope.loading = true;
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                    },
                    data: $scope.contact,
                    beforeSend: function() {
                        $('.loading').show();
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.errors = null;
                            $scope.sendSuccess = true;
                        } else {
                            $scope.errors = response.errors;
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    },
                    complete: function() {
                        $('.loading').hide();
                        $scope.$apply();
                    }
                });
            }
        })
    </script>
@endpush
