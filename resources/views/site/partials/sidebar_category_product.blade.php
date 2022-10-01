<aside id="secondary-1" class="sidebar widget-area">
    <div id="nav_menu-8" class="widget widget_nav_menu"><h3 class="widget-title">Danh mục sản
            phẩm</h3>
        <div class="menu-danh-muc-san-pham-container">
            <ul id="menu-danh-muc-san-pham" class="menu">
                @foreach($categories as $category)
                    <li id="menu-item-170"
                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-170">
                        <a href="{{route('front.product-category', $category->slug)}}">{{$category->name}}</a>
                        <ul class="sub-menu">
                            @foreach($category->child_categories as $childCategory)
                                <li id="menu-item-563"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-563">
                                    <a href="{{route('front.product-category', ['slug' => $category->slug, 'childSlug' => $childCategory->slug])}}">{{$childCategory->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
    <div id="support_online-2" class="widget support-online-widget"><h3 class="widget-title">Hỗ trợ
            trực tuyến</h3><img class='support-img'
                                src='/site/image/support.png'/>
        <div id="supporter-info" class="gd_support_3">
            <?php
            $users = \App\Model\Admin\Consultant::query()->latest()->get();
            ?>
            <div id="support-1" class="supporter">
                <div class="info">
                    <div class="support-rt"><span
                            class="name-support" style="font-weight: bold">Hotline</span><span
                            class="phone-support phone-support_2 phone_support_3"><a
                                href=tel:{{$config->zalo}}><i class="fa fa-phone-square"
                                                                    aria-hidden="true"></i>{{$config->zalo}}</a></span>
                        <div class='socical'><a href="">
                                <img src="/site/image/icon/icon-sky.png"
                                     style="border: none; width:auto; height: 24px;" width="100"
                                     height="24" alt="My status"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($users as $user)
                <div id="support-1" class="supporter">
                    <div class="info">
                        <div class="support-rt"><span
                                class="name-support">{{$user->name}}</span>
                            <span
                                class="phone-support phone-support_2 phone_support_3"><a
                                    href=tel:{{$user->phone}}><i class="fa fa-phone-square"
                                                                     aria-hidden="true"></i>{{$user->phone}}</a></span>
                            <div class='socical'><a href="">
                                    <img src="/site/image/icon/icon-sky.png"
                                         style="border: none; width:auto; height: 24px;" width="100"
                                         height="24" alt="My status"/>
                                </a>
                            </div>
                        </div>
{{--                        <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>{{$config->email}}</span>--}}
                    </div>
                </div>  <!-- end supporter -->

            @endforeach
        </div> <!-- end supporter-info -->
    </div>
</aside>
