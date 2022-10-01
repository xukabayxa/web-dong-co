<footer class="site-footer" style="margin-top: 20px">


    <div class="container">

        <div class="footer-row row clear">
            <div id="footer-1" class="rt-footer footer-1 widget_wrap">
                <div id="rt-widget-text-2" class="widget rt_textwidget"><h3 class="widget-title">Thông tin liên
                        hệ</h3>
                    <div class="classic-text-widget"><p>{{$config->web_title}}<br/>
                            ĐC: {{$config->address_company}}<br/>
                            ĐT: {{$config->zalo}}<br/>
                            Email: {{$config->email}}<br/>
                            Website: {{URL::to('/')}}</p>
                    </div>
                </div>
                <div id="imgqc-3" class="widget img-qc"><h3 class="widget-title">Mạng xã hội</h3>
                    <div class="image-adv">
                        <div class="image-item">
                            <a href="{{$config->facebook}}" rel="" title="">
                                <img src="/site/image/icon/ico_fb.png" alt=""/>
                            </a>
                        </div>
                        <div class="image-item">
                            <a href="{{$config->instagram}}" rel="" title="">
                                <img src="/site/image/icon/ico_ins.png" alt=""/>
                            </a>
                        </div>
                        <div class="image-item">
                            <a href="{{$config->twitter}}" rel="" title="">
                                <img src="/site/image/icon/ico_tw.png" alt=""/>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div id="footer-2" class="rt-footer footer-2 widget_wrap">
                <div id="facebook-like-widget-2" class="widget facebook_like"><h3 class="widget-title">Like
                        Facebook</h3>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like-box" data-href="{{$config->facebook}}"
                         data-height="239" data-width="385" data-colorscheme="light" data-show-faces="true"
                         data-header="false" data-stream="false" allowTransparency="true"></div>
                </div>
            </div>
            <div id="footer-3" class="rt-footer footer-3 widget_wrap">
                <div id="custom_html-2" class="widget_text widget widget_custom_html"><h3 class="widget-title">Bản
                        đồ</h3>
                    <div class="textwidget custom-html-widget">

                        <iframe src='https://maps.google.com/maps?q={{$store->lat}},{{$store->long}}&hl=es&z=14&amp;output=embed' class='map-iframe'  width="100%" height="200" style='border:0;' allowfullscreen=''
                                loading='lazy'></iframe>"
                    </div>
                </div>
                <div id="text-6" class="widget widget_text">
                    <div class="textwidget">
                        <div id="fb-root"></div>
                        <p>
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                        </p>



                </div>
            </div>
        </div><!-- .bottom-footer -->
        <div class="footer-site-code row clear">
        </div><!-- .bottom-footer -->                    </div>


</footer>
