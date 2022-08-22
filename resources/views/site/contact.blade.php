@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading">Liên hệ</h1>
                        <div class="entry-content">
                            <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/lien-he/#wpcf7-f6-p15-o1" method="post" class="wpcf7-form"
                                      novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="6">
                                        <input type="hidden" name="_wpcf7_version" value="5.0.1">
                                        <input type="hidden" name="_wpcf7_locale" value="vi">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p15-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="15">
                                    </div>
                                    <div class="form-lienhe">
                                        <div class="box-colum-1">
                                            <div class="left"><label>Họ tên</label><span
                                                    class="wpcf7-form-control-wrap text-545"><input type="text"
                                                                                                    name="text-545"
                                                                                                    value="" size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Nhập họ và tên"></span>
                                            </div>
                                            <div class="right"><label>Điện thoại</label><span
                                                    class="wpcf7-form-control-wrap number-683"><input type="number"
                                                                                                      name="number-683"
                                                                                                      value=""
                                                                                                      class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                                                                                      aria-invalid="false"
                                                                                                      placeholder="Nhập số điện thoại"></span>
                                            </div>
                                        </div>
                                        <div class="box-colum-2"><label>Địa chỉ</label><span
                                                class="wpcf7-form-control-wrap text-546"><input type="text"
                                                                                                name="text-546" value=""
                                                                                                size="40"
                                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                                aria-invalid="false"
                                                                                                placeholder="Địa chỉ"></span>
                                        </div>
                                        <div class="box-colum-3"><label>Nội dung</label><span
                                                class="wpcf7-form-control-wrap textarea-444"><textarea
                                                    name="textarea-444" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Nhập nội dung liên hệ"></textarea></span></div>
                                        <div class="submits"><input type="submit" value="Gửi liên hệ"
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


                <aside id="secondary-1" class="sidebar widget-area">
                    <div id="nav_menu-8" class="widget widget_nav_menu"><h3 class="widget-title">Danh mục sản phẩm</h3>
                        <div class="menu-danh-muc-san-pham-container">
                            <ul id="menu-danh-muc-san-pham" class="menu">
                                <li id="menu-item-170"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-170">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/">Thiết Bị Băng Tải</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-563"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-563">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/bang-tai-cao-su/">Băng
                                                tải cao su</a></li>
                                        <li id="menu-item-176"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-176">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/may-dan-luu-hoa-bang-tai/">Máy
                                                dán lưu hóa băng tải</a></li>
                                        <li id="menu-item-564"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-564">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/vat-tu-dan-bang-tai-cao-su/">Vật
                                                tư dán nối băng tải</a></li>
                                        <li id="menu-item-178"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-178">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/vat-tu-dan-bang-tai-cao-su/">Con
                                                lăn băng tải, Lưỡi gạt băng</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-171"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-171">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/">Thiết Bị Truyền
                                        Động</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-317"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-317">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/dong-co-dien-thiet-bi-truyen-dong/">Động
                                                cơ điện</a></li>
                                        <li id="menu-item-318"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-318">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/dong-co-dien-lien-hop-giam-toc/">Động
                                                cơ liền hộp giảm tốc</a></li>
                                        <li id="menu-item-319"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-319">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/hop-giam-toc/">Hộp
                                                giảm tốc</a></li>
                                        <li id="menu-item-320"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-320">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/khop-noi/">Khớp
                                                nối</a></li>
                                        <li id="menu-item-321"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-321">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/phanh/">Phanh</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-172"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-172">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/">Thiết Bị Công Nghiệp</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-338"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-338">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/bom-bom-cao-ap/">Bơm,
                                                Bơm cao áp</a></li>
                                        <li id="menu-item-339"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-339">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/may-nen-khi/">Máy
                                                nén khí</a></li>
                                        <li id="menu-item-340"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-340">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/quat/">Quạt –
                                                Root Blower</a></li>
                                        <li id="menu-item-342"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-342">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/diot-chinh-luu-dong-co-siemens/">Cuộn
                                                nắn dòng Siemens</a></li>
                                        <li id="menu-item-344"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-344">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/phu-kien-phanh-dong-co-toi-siemens/">Phụ
                                                kiện phanh động cơ tời Siemens</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-173"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-173">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/">Thiết Bị Cảng Biển</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-345"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-345">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/day-cap-thep/">Dây
                                                cáp thép</a></li>
                                        <li id="menu-item-346"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-346">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/moc-cau/">Móc
                                                cẩu</a></li>
                                        <li id="menu-item-347"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-347">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/tang-cuon-cap/">Tang
                                                cuốn cáp</a></li>
                                        <li id="menu-item-348"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-348">
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/thiet-bi-bao-ho/">Thiết
                                                bị bảo hộ</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-174"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-174">
                                    <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/">Dịch Vụ</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-353"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-353">
                                            <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-dan-noi-va-sua-chua-bang-tai-tai-cong-truong/">Dịch
                                                vụ dán nối và sửa chữa băng tải</a></li>
                                        <li id="menu-item-354"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-354">
                                            <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-boc-rullo-tai-cong-truong/">Dịch
                                                vụ bọc Rullo</a></li>
                                        <li id="menu-item-355"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-355">
                                            <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-dao-tao-dan-noi-sua-chua-bang-tai/">Dịch
                                                vụ đào tạo dán nối sửa chữa băng tải</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="support_online-2" class="widget support-online-widget"><h3 class="widget-title">Hỗ trợ trực
                            tuyến</h3><img class="support-img"
                                           src="http://sonhaiphat.vn/wp-content/uploads/2018/03/support.png">
                        <div id="supporter-info" class="gd_support_3">
                            <div id="support-1" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span class="name-support">Hỗ trợ trực tuyến </span><span
                                            class="phone-support phone-support_2 phone_support_3"><a href="tel:+842466"
                                                                                                     516="" 913=""><i
                                                    class="fa fa-phone-square"
                                                    aria-hidden="true"></i>+842466 516 913</a></span>
                                        <div class="socical"><a href="skype:huyxda?chat">
                                                <img
                                                    src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                    style="border: none; width:auto; height: 24px;" width="100"
                                                    height="24" alt="My status">
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>info@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                            <div id="support-2" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span class="name-support">Hotline 24/7</span><span
                                            class="phone-support phone-support_2 phone_support_3"><a href="tel:+84906"
                                                                                                     118="" 618=""><i
                                                    class="fa fa-phone-square" aria-hidden="true"></i>+84906 118 618</a></span>
                                        <div class="socical"><a href="skype:vũ khánh?chat">
                                                <img
                                                    src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                    style="border: none; width:auto; height: 24px;" width="100"
                                                    height="24" alt="My status">
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>khanh.vv@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                            <div id="support-3" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span class="name-support">Hỗ trợ kĩ thuật</span><span
                                            class="phone-support phone-support_2 phone_support_3"><a href="tel:+84906"
                                                                                                     118="" 618=""><i
                                                    class="fa fa-phone-square" aria-hidden="true"></i>+84906 118 618</a></span>
                                        <div class="socical"><a href="skype:huyxda?chat">
                                                <img
                                                    src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                    style="border: none; width:auto; height: 24px;" width="100"
                                                    height="24" alt="My status">
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>huy.cv@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                        </div> <!-- end supporter-info -->
                    </div>
                </aside>


            </div><!-- #layout -->
        </div><!-- .row -->
    </div>
@endsection

@push('scripts')
@endpush
