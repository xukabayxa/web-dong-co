@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div id="layout" class="clearfix sidebar-left">


                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <div class="page_home">
                            <h3 class="heading" style="margin: 0;">giới thiệu</h3>
                            <div class="content_page">
                                <div class="colum-left">
                                    <img src="http://sonhaiphat.vn/wp-content/uploads/2018/03/images-3-1.jpg">
                                </div>
                                <div class="colum-right">
                                    <div class="des_page">
                                        <p>CÔNG TY TNHH THIẾT BỊ SƠN HẢI PHÁT là nhà cung cấp các giải pháp Truyền
                                            Động cho thiết bị<br/>
                                            công nghiệp, motor điện, động cơ điện 1 pha, động cơ điện 3 pha, băng
                                            tải và các máy móc, thiết bị<br/>
                                            khác của các thương hiệu hàng đầu đến từ Mỹ, Đức, Nhật Bản, Hàn Quốc,
                                            Đài Loan, Trung Quốc<br/>
                                            ... Chúng tôi là đơn vị nhập khẩu trực tiếp từ các nhà sản xuất và phân
                                            phối tại thị trường Việt Nam.</p>
                                    </div>
                                    <a class="views-al" href="http://sonhaiphat.vn/ve-chung-toi/">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_home">
                            <div class="product_list">
                                <h2 class="heading">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/">
                                        THIẾT BỊ BĂNG TẢI </a>
                                </h2>
                                <div class="content_cate">
                                    <img src='http://sonhaiphat.vn/wp-content/uploads/2018/05/G5W9315_sRGB_Original_7372.jpg'>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/may-tao-ranh-cao-su/"><i
                                                class="fa fa-stop"></i>Máy tạo rãnh cao su</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/bang-tai-cao-su/"><i
                                                class="fa fa-stop"></i>Băng tải cao su</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/may-dan-luu-hoa-bang-tai/"><i
                                                class="fa fa-stop"></i>Máy dán lưu hóa băng tải</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/vat-tu-dan-bang-tai-cao-su/"><i
                                                class="fa fa-stop"></i>Vật tư dán nối băng tải</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-bang-tai/con-lan-bang-tai/"><i
                                                class="fa fa-stop"></i>Con lăn băng tải</a>
                                    </li>
                                </div>
                            </div>
                            <div class="product_list">
                                <h2 class="heading">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/">
                                        THIẾT BỊ TRUYỀN ĐỘNG </a>
                                </h2>
                                <div class="content_cate">
                                    <img src='http://sonhaiphat.vn/wp-content/uploads/2018/05/siemens.jpg'>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/dong-co-dien-thiet-bi-truyen-dong/"><i
                                                class="fa fa-stop"></i>Động cơ điện</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/dong-co-dien-lien-hop-giam-toc/"><i
                                                class="fa fa-stop"></i>Động cơ liền hộp giảm tốc</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/hop-giam-toc/"><i
                                                class="fa fa-stop"></i>Hộp giảm tốc</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/khop-noi/"><i
                                                class="fa fa-stop"></i>Khớp nối</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-truyen-dong/phanh/"><i
                                                class="fa fa-stop"></i>Phanh</a>
                                    </li>
                                </div>
                            </div>
                            <div class="product_list">
                                <h2 class="heading">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/">
                                        THIẾT BỊ CẢNG BIỂN </a>
                                </h2>
                                <div class="content_cate">
                                    <img src='http://sonhaiphat.vn/wp-content/uploads/2018/05/seaport.jpg'>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/day-cap-thep/"><i
                                                class="fa fa-stop"></i>Dây cáp thép</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/moc-cau/"><i
                                                class="fa fa-stop"></i>Móc cẩu</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/tang-cuon-cap/"><i
                                                class="fa fa-stop"></i>Tang cuốn cáp</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/thiet-bi-bao-ho/"><i
                                                class="fa fa-stop"></i>Thiết bị bảo hộ</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/thiet-bi-khac/"><i
                                                class="fa fa-stop"></i>Socket &amp; Quick release link MEMAG</a>
                                    </li>
                                </div>
                            </div>
                            <div class="product_list">
                                <h2 class="heading">
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/">
                                        THIẾT BỊ CÔNG NGHIỆP </a>
                                </h2>
                                <div class="content_cate">
                                    <img src='http://sonhaiphat.vn/wp-content/uploads/2018/05/Thiet-bi-cong-nghiep.jpg'>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/bom-bom-cao-ap/"><i
                                                class="fa fa-stop"></i>Bơm, Bơm cao áp</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/may-nen-khi/"><i
                                                class="fa fa-stop"></i>Máy nén khí</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/quat/"><i
                                                class="fa fa-stop"></i>Quạt - Root Blower</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/diot-chinh-luu-dong-co-siemens/"><i
                                                class="fa fa-stop"></i>Cuộn nắn dòng Siemens</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/phu-kien-phanh-dong-co-toi-siemens/"><i
                                                class="fa fa-stop"></i>Phụ kiện phanh động cơ tời Siemens</a>
                                    </li>
                                </div>
                            </div>
                            <div class="product_list">
                                <h2 class="heading">
                                    <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/">
                                        DỊCH VỤ </a>
                                </h2>
                                <div class="content_cate">
                                    <img src='http://sonhaiphat.vn/wp-content/uploads/2018/03/images-2.png'>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-dan-noi-va-sua-chua-bang-tai-tai-cong-truong/"><i
                                                class="fa fa-stop"></i>Dịch vụ dán nối và sửa chữa băng tải</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-boc-rullo-tai-cong-truong/"><i
                                                class="fa fa-stop"></i>Dịch vụ bọc Rullo</a>
                                    </li>
                                    <li>
                                        <a href="http://sonhaiphat.vn/danh-muc/dich-vu-2/dich-vu-dao-tao-dan-noi-sua-chua-bang-tai/"><i
                                                class="fa fa-stop"></i>Dịch vụ đào tạo dán nối sửa chữa băng tải</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!-- End Product -->


                    </main><!-- #main -->
                </div><!-- #primary -->


                <aside id="secondary-1" class="sidebar widget-area">
                    <div id="nav_menu-8" class="widget widget_nav_menu"><h3 class="widget-title">Danh mục sản
                            phẩm</h3>
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
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cang-bien/">Thiết Bị Công
                                        Nghiệp</a>
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
                                            <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/quat/">Quạt
                                                &#8211; Root Blower</a></li>
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
                                    <a href="http://sonhaiphat.vn/danh-muc/thiet-bi-cong-nghiep/">Thiết Bị Cảng
                                        Biển</a>
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
                    <div id="support_online-2" class="widget support-online-widget"><h3 class="widget-title">Hỗ trợ
                            trực tuyến</h3><img class='support-img'
                                                src='http://sonhaiphat.vn/wp-content/uploads/2018/03/support.png'/>
                        <div id="supporter-info" class="gd_support_3">
                            <div id="support-1" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span
                                            class="name-support">Hỗ trợ trực tuyến </span><span
                                            class="phone-support phone-support_2 phone_support_3"><a
                                                href=tel:+842466 516 913><i class="fa fa-phone-square"
                                                                            aria-hidden="true"></i>+842466 516 913</a></span>
                                        <div class='socical'><a href="skype:huyxda?chat">
                                                <img src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                     style="border: none; width:auto; height: 24px;" width="100"
                                                     height="24" alt="My status"/>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>info@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                            <div id="support-2" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span class="name-support">Hotline 24/7</span><span
                                            class="phone-support phone-support_2 phone_support_3"><a href=tel:+84906
                                                                                                     118 618><i
                                                    class="fa fa-phone-square"
                                                    aria-hidden="true"></i>+84906 118 618</a></span>
                                        <div class='socical'><a href="skype:vũ khánh?chat">
                                                <img src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                     style="border: none; width:auto; height: 24px;" width="100"
                                                     height="24" alt="My status"/>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>khanh.vv@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                            <div id="support-3" class="supporter">
                                <div class="info">
                                    <div class="support-rt"><span class="name-support">Hỗ trợ kĩ thuật</span><span
                                            class="phone-support phone-support_2 phone_support_3"><a href=tel:+84906
                                                                                                     118 618><i
                                                    class="fa fa-phone-square"
                                                    aria-hidden="true"></i>+84906 118 618</a></span>
                                        <div class='socical'><a href="skype:huyxda?chat">
                                                <img src="http://sonhaiphat.vn/wp-content/themes/RT/assets/css/images/icon-sky.png"
                                                     style="border: none; width:auto; height: 24px;" width="100"
                                                     height="24" alt="My status"/>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="mail-support"><i class="fa fa-envelope" aria-hidden="true"></i>huy.cv@sonhaiphat.vn</span>
                                </div>
                            </div>  <!-- end supporter -->
                        </div> <!-- end supporter-info -->
                    </div>
                </aside>

                <div class="news-home project clear">
                </div>

                <div class="news-home clear">
                    <div class="list 3 clear">
                        <h2 class="headings">
                            <a href="http://sonhaiphat.vn/du-an-tieu-bieu/">
                                Dự án tiêu biểu </a>
                        </h2>
                        <div class="list-news">
                            <div class="style-blog-3 rt-shortcodes rt-blog-shortcode">
                                <div class="fusion-row">
                                    <article id="post-11082"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-11082 post type-post status-publish format-standard has-post-thumbnail category-du-an-tieu-bieu tag-may-dan-luu-hoa-bang-tai tag-may-dan-luu-hoa-bang-tai-comix tag-may-dan-noi-bang-tai-comix">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/cung-cap-may-dan-luu-hoa-bang-tai-comix-germany/"
                                                    title="CUNG CẤP MÁY DÁN LƯU HÓA BĂNG TẢI COMIX &#8211; GERMANY"><img
                                                        width="1000" height="750"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2020/02/QQ图片20200728131418.ins_.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        srcset="http://sonhaiphat.vn/wp-content/uploads/2020/02/QQ图片20200728131418.ins_.jpg 1000w, http://sonhaiphat.vn/wp-content/uploads/2020/02/QQ图片20200728131418.ins_-300x225.jpg 300w, http://sonhaiphat.vn/wp-content/uploads/2020/02/QQ图片20200728131418.ins_-768x576.jpg 768w, http://sonhaiphat.vn/wp-content/uploads/2020/02/QQ图片20200728131418.ins_-600x450.jpg 600w"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">01/09/2020</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/cung-cap-may-dan-luu-hoa-bang-tai-comix-germany/"
                                                        title="CUNG CẤP MÁY DÁN LƯU HÓA BĂNG TẢI COMIX &#8211; GERMANY">CUNG
                                                        CẤP MÁY DÁN LƯU HÓA BĂNG TẢI COMIX &#8211; GERMANY</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>01/09/2020</span>
                                                </div>
                                                <div class="entry-description">💥💥 THIẾT BỊ LƯU HÓA BĂNG TẢI 💥💥 COMIX
                                                    &#8211; GERMANY 🔝🔝 COMIX là một thương hiệu nổi tiếng trong lĩnh
                                                    vực
                                                </div>
                                                <a href="http://sonhaiphat.vn/cung-cap-may-dan-luu-hoa-bang-tai-comix-germany/"
                                                   title="CUNG CẤP MÁY DÁN LƯU HÓA BĂNG TẢI COMIX &#8211; GERMANY"
                                                   class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                 aria-hidden="true"></i></a></div>
                                        </div>
                                    </article>
                                    <article id="post-10995"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-10995 post type-post status-publish format-standard has-post-thumbnail category-du-an-tieu-bieu">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/hop-giam-toc-boneng-boneng-gearbox/"
                                                    title="HỘP GIẢM TỐC BONENG &#8211; BONENG GEARBOX"><img
                                                        width="960" height="1280"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2020/02/6085683e3a9ed8c0818f.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        srcset="http://sonhaiphat.vn/wp-content/uploads/2020/02/6085683e3a9ed8c0818f.jpg 960w, http://sonhaiphat.vn/wp-content/uploads/2020/02/6085683e3a9ed8c0818f-225x300.jpg 225w, http://sonhaiphat.vn/wp-content/uploads/2020/02/6085683e3a9ed8c0818f-768x1024.jpg 768w, http://sonhaiphat.vn/wp-content/uploads/2020/02/6085683e3a9ed8c0818f-600x800.jpg 600w"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">19/02/2020</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/hop-giam-toc-boneng-boneng-gearbox/"
                                                        title="HỘP GIẢM TỐC BONENG &#8211; BONENG GEARBOX">HỘP GIẢM TỐC
                                                        BONENG &#8211; BONENG GEARBOX</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>19/02/2020</span>
                                                </div>
                                                <div class="entry-description">Boneng được thành lập vào năm 1992
                                                    với một địa điểm duy nhất và một đội ngũ chuyên dụng. Với
                                                    &hellip; <a class="link-</div><a href=" http://sonhaiphat.vn/hop-giam-toc-boneng-boneng-gearbox/"
                                                    title="HỘP GIẢM TỐC BONENG &#8211; BONENG GEARBOX"
                                                    class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                  aria-hidden="true"></i></a></div>
                                            </div>
                                    </article>
                                    <article id="post-10219"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-10219 post type-post status-publish format-standard has-post-thumbnail category-du-an-tieu-bieu">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/cung-cap-lo-dong-co-giam-toc-phong-chong-chay-no-sew/"
                                                    title="CUNG CẤP LÔ ĐỘNG CƠ GIẢM TỐC PHÒNG CHỐNG CHÁY NỔ SEW"><img
                                                        width="1280" height="960"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        srcset="http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b.jpg 1280w, http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b-300x225.jpg 300w, http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b-768x576.jpg 768w, http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b-1024x768.jpg 1024w, http://sonhaiphat.vn/wp-content/uploads/2019/10/f3b73367461aa044f90b-600x450.jpg 600w"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">29/10/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/cung-cap-lo-dong-co-giam-toc-phong-chong-chay-no-sew/"
                                                        title="CUNG CẤP LÔ ĐỘNG CƠ GIẢM TỐC PHÒNG CHỐNG CHÁY NỔ SEW">CUNG
                                                        CẤP LÔ ĐỘNG CƠ GIẢM TỐC PHÒNG CHỐNG CHÁY NỔ SEW</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>29/10/2019</span>
                                                </div>
                                                <div class="entry-description">🇻🇳-🇩🇪: Cung cấp lô động cơ giảm tốc
                                                    phòng nổ SEW &#8211; Germany cho dây chuyền sản xuất thuốc nổ.
                                                    &hellip; <a cl</div>
                                                <a href="http://sonhaiphat.vn/cung-cap-lo-dong-co-giam-toc-phong-chong-chay-no-sew/"
                                                   title="CUNG CẤP LÔ ĐỘNG CƠ GIẢM TỐC PHÒNG CHỐNG CHÁY NỔ SEW"
                                                   class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                 aria-hidden="true"></i></a></div>
                                        </div>
                                    </article>
                                    <article id="post-8307"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column fusion-column-last post-8307 post type-post status-publish format-image has-post-thumbnail category-du-an-tieu-bieu post_format-post-format-image">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/cung-cap-hop-giam-toc-phan-ly-may-nghien-flender/"
                                                    title="CUNG CẤP HỘP GIẢM TỐC PHÂN LY MÁY NGHIỀN FLENDER"><img
                                                        width="1280" height="960"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        srcset="http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0.jpg 1280w, http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0-300x225.jpg 300w, http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0-768x576.jpg 768w, http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0-1024x768.jpg 1024w, http://sonhaiphat.vn/wp-content/uploads/2019/08/697abcf09ba17cff25b0-600x450.jpg 600w"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">12/08/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/cung-cap-hop-giam-toc-phan-ly-may-nghien-flender/"
                                                        title="CUNG CẤP HỘP GIẢM TỐC PHÂN LY MÁY NGHIỀN FLENDER">CUNG
                                                        CẤP HỘP GIẢM TỐC PHÂN LY MÁY NGHIỀN FLENDER</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>12/08/2019</span>
                                                </div>
                                                <div class="entry-description">Bên cạnh các ngành công nghiệp nặng
                                                    như sắt thép, khai thác khoáng sản, &#8230; ngành sản xuất xi
                                                    măng &hellip; <a class="link</div><a href=" http://sonhaiphat.vn/cung-cap-hop-giam-toc-phan-ly-may-nghien-flender/"
                                                    title="CUNG CẤP HỘP GIẢM TỐC PHÂN LY MÁY NGHIỀN FLENDER"
                                                    class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                  aria-hidden="true"></i></a></div>
                                            </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list 3 clear">
                        <h2 class="headings">
                            <a href="http://sonhaiphat.vn/tin-tuc/">
                                Tin tức </a>
                        </h2>
                        <div class="list-news">
                            <div class="style-blog-3 rt-shortcodes rt-blog-shortcode">
                                <div class="fusion-row">
                                    <article id="post-9385"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-9385 post type-post status-publish format-standard has-post-thumbnail category-tin-tuc">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/tap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd/"
                                                    title="Tập đoàn Mỹ đầu tư nhà máy điện khí 5 tỷ USD"><img
                                                        width="250" height="178"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2019/10/nheit.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">07/10/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/tap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd/"
                                                        title="Tập đoàn Mỹ đầu tư nhà máy điện khí 5 tỷ USD">Tập đoàn Mỹ
                                                        đầu tư nhà máy điện khí 5 tỷ USD</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>07/10/2019</span>
                                                </div>
                                                <div class="entry-description">Thủ tướng đồng ý giao Tập đoàn AES
                                                    (Mỹ) làm chủ đầu tư dự án điện Sơn Mỹ 2 tại &hellip; <a
                                                        class="link-more" href="ht</div><a href=" http://sonhaiphat.vn/tap-doan-my-dau-tu-nha-may-dien-khi-5-ty-usd/"
                                                    title="Tập đoàn Mỹ đầu tư nhà máy điện khí 5 tỷ USD"
                                                    class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                  aria-hidden="true"></i></a></div>
                                            </div>
                                    </article>
                                    <article id="post-9382"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-9382 post type-post status-publish format-standard has-post-thumbnail category-tin-tuc">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/du-an-dien-mat-troi-hut-von-ngoai/"
                                                    title="Dự án điện mặt trời hút vốn ngoại"><img width="480"
                                                                                                   height="265"
                                                                                                   src="http://sonhaiphat.vn/wp-content/uploads/2019/10/du-an-dien-mat-troi-hut-von-ngoai1570397247.jpg"
                                                                                                   class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                                                                   alt=""
                                                                                                   srcset="http://sonhaiphat.vn/wp-content/uploads/2019/10/du-an-dien-mat-troi-hut-von-ngoai1570397247.jpg 480w, http://sonhaiphat.vn/wp-content/uploads/2019/10/du-an-dien-mat-troi-hut-von-ngoai1570397247-300x166.jpg 300w"
                                                                                                   sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">07/10/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/du-an-dien-mat-troi-hut-von-ngoai/"
                                                        title="Dự án điện mặt trời hút vốn ngoại">Dự án điện mặt trời
                                                        hút vốn ngoại</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>07/10/2019</span>
                                                </div>
                                                <div class="entry-description">Hơn 37 triệu USD đã được Ngân hàng
                                                    Phát triển châu Á (ADB) và các đối tác tài chính quốc &hellip;
                                                    <a class="link-more" href=</div><a
                                                            href="http://sonhaiphat.vn/du-an-dien-mat-troi-hut-von-ngoai/"
                                                            title="Dự án điện mặt trời hút vốn ngoại"
                                                            class="view-more">Xem thêm <i
                                                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                    </article>
                                    <article id="post-85"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column  post-85 post type-post status-publish format-standard has-post-thumbnail category-tin-tuc">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/vinfast-thanh-lap-trung-tam-dao-tao-ky-thuat-vien-co-khi-co-dien-tu/"
                                                    title="Vinfast thành lập Trung tâm đào tạo kỹ thuật viên cơ khí, cơ điện tử"><img
                                                        width="480" height="320"
                                                        src="http://sonhaiphat.vn/wp-content/uploads/2017/09/VF_1.jpg"
                                                        class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                        alt=""
                                                        srcset="http://sonhaiphat.vn/wp-content/uploads/2017/09/VF_1.jpg 480w, http://sonhaiphat.vn/wp-content/uploads/2017/09/VF_1-300x200.jpg 300w"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">25/02/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/vinfast-thanh-lap-trung-tam-dao-tao-ky-thuat-vien-co-khi-co-dien-tu/"
                                                        title="Vinfast thành lập Trung tâm đào tạo kỹ thuật viên cơ khí, cơ điện tử">Vinfast
                                                        thành lập Trung tâm đào tạo kỹ thuật viên cơ khí, cơ điện tử</a>
                                                </h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>25/02/2019</span>
                                                </div>
                                                <div class="entry-description">Ngày 7/2, VinFast chính thức ra mắt
                                                    Trung tâm đào tạo kỹ thuật viên cơ điện tử và cơ khí công
                                                    nghiệp, với quy mô tuyể
                                                </div>
                                                <a href="http://sonhaiphat.vn/vinfast-thanh-lap-trung-tam-dao-tao-ky-thuat-vien-co-khi-co-dien-tu/"
                                                   title="Vinfast thành lập Trung tâm đào tạo kỹ thuật viên cơ khí, cơ điện tử"
                                                   class="view-more">Xem thêm <i class="fa fa-arrow-circle-right"
                                                                                 aria-hidden="true"></i></a></div>
                                        </div>
                                    </article>
                                    <article id="post-3434"
                                             class="element hentry post-item fusion-one-fourth fusion-spacing-yes fusion-layout-column fusion-column-last post-3434 post type-post status-publish format-image has-post-thumbnail category-tin-tuc post_format-post-format-image">
                                        <div class="post-inner">
                                            <div class="entry-thumb"><a
                                                    href="http://sonhaiphat.vn/zhongda-motors-co-ltd-zoda/"
                                                    title="Zhongda Motors Co., Ltd (ZODA)"><img width="476"
                                                                                                height="344"
                                                                                                src="http://sonhaiphat.vn/wp-content/uploads/2019/01/09401205532.jpg"
                                                                                                class="attachment-rt_thumb300x200 size-rt_thumb300x200 wp-post-image"
                                                                                                alt=""
                                                                                                srcset="http://sonhaiphat.vn/wp-content/uploads/2019/01/09401205532.jpg 476w, http://sonhaiphat.vn/wp-content/uploads/2019/01/09401205532-300x217.jpg 300w"
                                                                                                sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"/></a>
                                                <p class="timestyle5" style="display:none;">20/02/2019</p>
                                                <span>view</span></div>
                                            <div class="entry-content"><h3 class="entry-title"><a
                                                        href="http://sonhaiphat.vn/zhongda-motors-co-ltd-zoda/"
                                                        title="Zhongda Motors Co., Ltd (ZODA)">Zhongda Motors Co., Ltd
                                                        (ZODA)</a></h3>
                                                <div class="meta"><span class="date-time"><i class="fa fa-clock-o"
                                                                                             aria-hidden="true"></i>20/02/2019</span>
                                                </div>
                                                <div class="entry-description">Zhongda Motors Co., Ltd. Motors nằm
                                                    trong khu vực phát triển công nghệ cao cấp quốc gia tại Vô Tích,
                                                    &hellip; <a class="link-more" h</div>
                                                <a href="http://sonhaiphat.vn/zhongda-motors-co-ltd-zoda/"
                                                   title="Zhongda Motors Co., Ltd (ZODA)" class="view-more">Xem thêm
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #layout -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

@push('scripts')
@endpush
