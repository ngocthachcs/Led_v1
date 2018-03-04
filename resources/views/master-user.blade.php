
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel='stylesheet' href='{{ URL('assets/content/plugins/accesspress-pinterest/css/frontend.css?ver=3.1.9')}}' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="{{ URL('assets/assets/css/font-awesome.min.css')}}">
    <link rel='stylesheet' id='contact-form-7-css' href='{{ URL('assets/content/plugins/contact-form-7/includes/css/styles.css?ver=4.8.1')}}' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="{{ URL('assets/assets/css/woocommerce-layout.css')}}">
    <link rel='stylesheet' href='{{ URL('assets/assets/css/woocommerce-smallscreen.css')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel="stylesheet" type="text/css" href="{{ URL('assets/assets/css/prettyPhoto.css')}}">
    <link rel='stylesheet' href='{{ URL('assets/assets/css/woocommerce.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ URL('assets/content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css?ver=4.8.5')}}' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='{{ URL('assets/content/themes/bkteckshop/assets/css/bootstrap.min.css?ver=3.3.7')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='ncnteam-main-css' href='{{ URL('assets/content/themes/bkteckshop/assets/css/main.min.css?ver=1.0.0')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='ncnteam-style-css' href='{{ URL('assets/content/themes/bkteckshop/style.css?ver=1.0.0')}}' type='text/css' media='all' />
    {{-- <script type="text/javascript" src="{{ URL('assets/assets/js/jquery.js')}}"></script> --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style id='yith-quick-view-inline-css' type='text/css'>
    #yith-quick-view-modal .yith-wcqv-main {
        background: #ffffff;
    }

    #yith-quick-view-close {
        color: #cdcdcd;
    }

    #yith-quick-view-close:hover {
        color: #ff0000;
    }
    </style>
    <style>
    #callnowbutton {
        display: none;
    }
    /*call button on mobile*/
    @media screen and (max-width:650px) {
        #callnowbutton {
            display: block;
            position: fixed;
            text-decoration: none;
            z-index: 9999;
            width: 65px;
            height: 65px;
            border-radius: 80px;
            border: 2px solid #fff;
            bottom: 15px;
            left: 20px;
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjAgNjAiPjxwYXRoIGQ9Ik03LjEwNCAxNC4wMzJsMTUuNTg2IDEuOTg0YzAgMC0wLjAxOSAwLjUgMCAwLjk1M2MwLjAyOSAwLjc1Ni0wLjI2IDEuNTM0LTAuODA5IDIuMSBsLTQuNzQgNC43NDJjMi4zNjEgMy4zIDE2LjUgMTcuNCAxOS44IDE5LjhsMTYuODEzIDEuMTQxYzAgMCAwIDAuNCAwIDEuMSBjLTAuMDAyIDAuNDc5LTAuMTc2IDAuOTUzLTAuNTQ5IDEuMzI3bC02LjUwNCA2LjUwNWMwIDAtMTEuMjYxIDAuOTg4LTI1LjkyNS0xMy42NzRDNi4xMTcgMjUuMyA3LjEgMTQgNy4xIDE0IiBmaWxsPSIjMDBiNjAwIi8+PHBhdGggZD0iTTcuMTA0IDEzLjAzMmw2LjUwNC02LjUwNWMwLjg5Ni0wLjg5NSAyLjMzNC0wLjY3OCAzLjEgMC4zNWw1LjU2MyA3LjggYzAuNzM4IDEgMC41IDIuNTMxLTAuMzYgMy40MjZsLTQuNzQgNC43NDJjMi4zNjEgMy4zIDUuMyA2LjkgOS4xIDEwLjY5OWMzLjg0MiAzLjggNy40IDYuNyAxMC43IDkuMSBsNC43NC00Ljc0MmMwLjg5Ny0wLjg5NSAyLjQ3MS0xLjAyNiAzLjQ5OC0wLjI4OWw3LjY0NiA1LjQ1NWMxLjAyNSAwLjcgMS4zIDIuMiAwLjQgMy4xMDVsLTYuNTA0IDYuNSBjMCAwLTExLjI2MiAwLjk4OC0yNS45MjUtMTMuNjc0QzYuMTE3IDI0LjMgNy4xIDEzIDcuMSAxMyIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==) center/50px 50px no-repeat #21e806;
        }
    }
    </style>
    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <style type="text/css" id="wp-custom-css">
    .ncn_support_widget .widget-title {
        background: #158a00;
    }

    .main-navigation {
        background: #2b2b2b;
    }

    .ncn_cart_wrap {
        position: absolute;
        top: 85%;
        left: 25%;
        width: 100%;
    }

    .woocommerce ul.products li.product .added_to_cart,
    .woocommerce ul.products li.product .button {
        padding: 11px 0;
        width: 45%;
        border-radius: 20px;
    }

    .main-navigation {
        background: #ffffff;
    }

    .primary-menu-container ul.menu>li:hover>a,
    .primary-menu-container .current-menu-item,
    .primary-menu-container .current_page_parent,
    .primary-menu-container .current-menu-ancestor,
    .primary-menu-container ul.menu li ul.sub-menu li:hover {
        background: #ffffff;
        font-weight: bold;
    }

    .widget-title {
        background: #158a00;
    }

    .box-col-inner {
        background: none;
        color: #656565;
    }

    .header-search-form-submit,
    .primary-menu-container ul.menu li ul.sub-menu li a,
    .section-title {
        color: #5e0500;
    }

    a {
        color: #5e0500 !important;
    }
    p{
      margin: 0 0 16px;
    }
    h3{
      margin-bottom: 16px;
      padding-bottom: 16px !important;
      padding-top: 16px !important;
    }
    body {
        font-size: 15px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
    }

    @media screen and (max-width: 768px) {
        .page-content,
        .entry-content {
            margin: 0em 0 0;
            width: 100%;
        }
        header.entry-header.fll {
            width: 100%;
        }
    }

    body {
      font-family: 'Montserrat', sans-serif !important;
    }

    @media only screen and (max-width:480px) {
        .hide_on_mobile {
            display: none !important;
        }
    }
    </style>
</head>
<?php
	$categorys = \App\GetData::getCategory();
	$sp_noi_bat = \App\GetData::getSPNoiBat();
	$sp_giam_gia = \App\GetData::getSPGiamGia();
?>
<body class="home page-template page-template-template-home-page page-template-template-home-page-php page page-id-2675 wp-custom-logo group-blog">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">Skip</a>
        <header id="masthead" class="site-header" role="banner">
            {{-- <div class="container">
                <div class="row">
                    <div class="site-branding col-md-3 col-sm-10 col-xs-10">
                        <h1 class="screen-reader-text site-title">Đèn Led giá tốt chính hãng tại TP.HCM</h1>
                        <a href="/" class="custom-logo-link" rel="home" itemprop="url">
                        <img width="264" height="59" src="content/uploads/2017/06/cropped-LOGO-DEN-LED-GIA-RE-01.jpg" class="custom-logo" alt="Đèn led giá tốt" itemprop="logo"/></a>
                    </div>
                    <!-- .site-branding -->
                    <div class="header-cart woocommerce hidden-lg hidden-md col-sm-2 col-xs-2">
                    </div>
                    <!-- .header-cart -->
                    <div class="header-right col-md-9 col-sm-12 hidden-sm hidden-xs">
                        <div id="ncn-box-intro-widget-3" class="widget-odd widget-last widget-first widget-1 section ncn-box-intro-widget">
                            <div class="row intro-box">
                                <div class="col-md-4 box-col mt-10 mb-10">
                                    <div class="box-col-inner clearfix">
                                        <div class="pull-left mr-25 ml-5 fs-45">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="content-body ofl-h">
                                            <h3 class="mt-10 mb-10 fs-15">Miễn phí vận chuyển HCM</h3>
                                            <span>Đơn hàng trên 1 triệu
                                    </span>
                                        </div>
                                    </div>
                                    <!-- .box-col-inner -->
                                </div>
                                <!-- .box-col -->
                                <div class="col-md-4 box-col mt-10 mb-10">
                                    <div class="box-col-inner bg-orange clearfix">
                                        <div class="pull-left mr-25 ml-5 fs-45">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <div class="content-body ofl-h">
                                            <h3 class="mt-10 mb-10 fs-15">Đặt hàng online</h3>
                                            <span>Dễ dàng trên hệ thống
                                    </span>
                                        </div>
                                    </div>
                                    <!-- .box-col-inner -->
                                </div>
                                <!-- .box-col -->
                                <div class="col-md-4 box-col mt-10 mb-10">
                                    <div class="box-col-inner bg-blue clearfix">
                                        <div class="pull-left mr-25 ml-5 fs-45">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                        <div class="content-body ofl-h">
                                            <h3 class="mt-10 mb-10 fs-15">Chất lượng 100%</h3>
                                            <span>Sản phẩm chất lượng</span>
                                        </div>
                                    </div>
                                    <!-- .box-col-inner -->
                                </div>
                                <!-- .box-col -->
                            </div>
                            <!-- .intro-box -->
                        </div>
                    </div>
                    <!-- .header-right -->
                </div>
                <!-- .row -->
            </div> --}}
            <!-- .container -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="hidden-lg hidden-md col-sm-2 col-xs-3">
                            <button class="btn-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- .btn mobile menu -->
                        <div class="btn-search col-sm-10 col-xs-9">
                            <form action="/shop" method="get" role="search" class="header-search-form">
                                <label for="search-form-5a8eea3e5f5a2" class="screen-reader-text">
                                    <span class="screen-reader-text">Tìm kiếm sản phẩm:</span>
                                </label>
                                <input type="search" id="search-form-5a8eea3e5f5a2" placeholder="Tìm kiếm sản phẩm &hellip;" value="" name="s" data-swplive="true" data-swpengine="default" data-swpconfig="default">
                                <button type="submit" class="header-search-form-submit">
                                    <i class="fa fa-search"></i>
                                    <span class="screen-reader-text">Tìm kiếm sản phẩm</span>
                                </button>
                            </form>
                        </div>
                        <!-- .btn-search -->
                        <div class="primary-menu-container col-md-8 col-sm-12 col-xs-12">
                            <ul id="primary-menu" class="menu clearfix">
                                <li id="menu-item-2731" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2731"><a href="{{URL('/')}}">TRANG CHỦ</a></li>
                                <li id="menu-item-2733" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2733"><a href="{{URL('/')}}/gioi-thieu">GIỚI THIỆU</a></li>
                                <li id="menu-item-2732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2732"><a href="{{URL('/')}}/cua-hang">CỬA HÀNG</a></li>
                                <li id="menu-item-2735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2735"><a href="{{URL('/')}}/lien-he">LIÊN HỆ</a></li>
                            </ul>
                        </div>
                        <!-- .primary-menu-container -->
                        <div class="btn-search-show-mdlg col-md-3 hidden-sm hidden-xs">
                            <form action="{{URL('/')}}/tim-kiem" method="get" role="search" class="header-search-form">
                                <label for="search-form-5a8eea3e6096a" class="screen-reader-text">
                                    <span class="screen-reader-text">Tìm kiếm sản phẩm:</span>
                                </label>
                                <input type="search" id="search-form-5a8eea3e6096a" placeholder="Tìm kiếm sản phẩm &hellip;" value="" name="s" data-swplive="true" data-swpengine="default" data-swpconfig="default">
                                <button type="submit" class="header-search-form-submit">
                                    <i class="fa fa-search"></i>
                                    <span class="screen-reader-text">Tìm kiếm sản phẩm</span>
                                </button>
                            </form>
                        </div>
                        <!-- .btn-search-show-mdlg -->
                        <div class="header-nav-cart woocommerce col-md-1 hidden-sm hidden-xs">
                            <div class="ncn_cart_widget widget_shopping_cart">
                                <div class="shopping-bag">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span><a href="{{URL('/')}}/gio-hang">{{ count(Cookie::get('giohang'))}}</a></span>
                                </div>
                                <!-- <div class="widget_shopping_cart_content"></div> -->
                            </div>
                        </div>
                        <!-- .header-nav-cart -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </nav>
            <!-- #site-navigation -->
        </header>
        <!-- #masthead -->
        <div id="content" class="container site-content">
            <div id="layout" class="row sidebar-left">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" >
                        @yield('content')
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                <aside id="secondary" class="sidebar widget-area" role="complementary">
                    <div id="ncn_support_widget-3" class="widget-odd widget-first widget-1 widget ncn_support_widget">
                        <h3 class="widget-title">Hỗ trợ trực tuyến</h3>
                        <div class="support-item clearfix">
                            <div class="support-title">
                                Hỗ trợ viên: <span>Nguyễn Văn Thao</span>
                            </div>
                            <div class="support-info">
                                <div class="support-thumbnail">
                                    <img width="60" height="90" src="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                </div>
                                <div class="support-chat">
                                    <p><span style="color: #ff0000;"><strong>Zalo,Viber: 0938 982 410</strong></span>
                                        <br />
                                        <span style="color: #ff0000;"><strong> Phone: 0938 982 410</strong></span>
                                        <br />
                                        <span style="color: #ff0000;"><strong> Hotline 1: 028 6278 4888</strong></span>
                                        <br />
                                        <span style="color: #ff0000;"><strong> Hotline 2: 028 6288 9269</strong></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="text-3" class="widget-even widget-2 hide_on_mobile widget widget_text">
                        <h3 class="widget-title">DANH MỤC ĐÈN LED</h3>
                        <div class="textwidget">
                            <div id="text-2" class="widget widget_text">
                                <div class="textwidget">
                                	@foreach($categorys as $dm)
                                    <p>
                                    	<strong>
                                    		<a href="{{URL('/')}}/danh-muc/{{$dm->slug}}">{{$dm->name}}</a>
                                    	</strong>
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="woocommerce_products-2" class="widget-odd widget-3 hide_on_mobile widget woocommerce widget_products">
                        <h3 class="widget-title">Sản phẩm nổi bật</h3>
                        <ul class="product_list_widget">
                            @foreach($sp_noi_bat as $sp)
                            <li>
                                <a href="{{URL('/')}}/san-pham/{{$sp->slug}}">
                              <img width="140" height="115" src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"/>
                              <span class="product-title">{{$sp->title}}</span>
                           </a>
                                <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="woocommerce_products-3" class="widget-even widget-4 hide_on_mobile widget woocommerce widget_products">
                        <h3 class="widget-title">Sản phẩm giảm giá</h3>
                        <ul class="product_list_widget">
                            @foreach($sp_giam_gia as $sp)
                            <li>
                                <a href="{{URL('/')}}/san-pham/{{$sp->slug}}">
                              <img width="140" height="115" src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"/>
                              <span class="product-title">{{$sp->title}}</span>
                           </a>
                                <del>
                                    <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;
                                 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                    </span>
                                </del>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">{{ number_format($sp->old_price, 0, ',', '.')}}&nbsp;
                                 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                    </span>
                                </ins>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
                <!-- #secondary -->
            </div>
            <!-- #layout -->
        </div>
        <!-- #content -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="text-5" class="widget-odd widget-last widget-first widget-1 widget widget_text">
                                <h3 class="widget-title">Thông tin công ty Athaco</h3>
                                <div class="textwidget">
                                    <p>CÔNG TY TNHH-PT-TM ATHACO
                                        <br /> Địa chỉ: 240A Dương Đình Hội, Phường Tăng Nhơn Phú B, Quận 9. TP HCM
                                    </p>
                                    <p>Hottile:</p>
                                    <p>0938 982 410 – 028 6288 9269
                                        <br /> 028 6278 4888 – 0984 563 564
                                    </p>
                                    <p>Gmail: athaco.q9@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="text-8" class="widget-odd widget-last widget-first widget-1 widget widget_text">
                                <h3 class="widget-title">THÔNG TIN CHUYỂN KHOẢN</h3>
                                <div class="textwidget">
                                    <p>Tên TK: Nguyễn Văn Thao</p>
                                    <p>ACB chi nhánh Quận 9.hcm
                                        <br /> STK: 201962869
                                    </p>
                                    <p>AGRIBANK chi nhánh quận 9
                                        <br /> STK: 6300205780118
                                    </p>
                                    <p>VIETCOMBANK chi nhánh sài gòn
                                        <br /> STK: 0381000504824
                                    </p>
                                    <p>VIETINBANK chi nhánh phước long A quận 9
                                        <br /> STK: 711AD6410322
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div id="text-9" class="widget-odd widget-last widget-first widget-1 widget widget_text">
                                <h3 class="widget-title">BẢN ĐỒ ATHACO</h3>
                                <div class="textwidget">
                                    <div class="footer-widget-container">
                                        <div class="textwidget">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div id="text-13" class="widget-odd widget-last widget-first widget-1 widget widget_text">
                                <div class="textwidget">
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .top-footer -->
        </footer>
        <!-- #colophon -->
        <div class="mobile-menu-container">
            <div class="close-menu">Đóng menu x</div>
            <ul id="moblie-menu" class="moblie-menu">
                <li id="menu-item-2676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2675 current_page_item menu-item-2676">
                    <a href="{{URL('/')}}">TRANG CHỦ</a>
                </li>
                <li id="menu-item-2759" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2759">
                    <a href="{{URL('/')}}/gioi-thieu">Giới thiệu</a>
                </li>
                <li id="menu-item-2759" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2759">
                    <a href="{{URL('/')}}/cua-hang">Cửa Hàng</a>
                </li>
                <li id="menu-item-2758" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2758">
                    <a href="{{URL('/')}}/lien-he">LIÊN HỆ</a>
                </li>
            </ul>
            <div class="mobile-menu-contact">
                <a href="tel:0938982410">
               <span class="menu-icon"><i class="fa fa-phone-square"></i></span>
               Mobile: 0938 982 410    </a>
                <a href="mailto:thaoedu.vn175@gmail.com">
               <span class="menu-icon"><i class="fa fa-envelope"></i></span>
               thaoedu.vn175@gmail.com    </a>
                <a href="http://facebook.com" rel="nofollow">
               <span class="menu-icon"><i class="fa fa-facebook-square"></i></span>
               Facebook: Athaco     </a>
            </div>
        </div>
        <!-- .mobile-menu-container -->
        <div class="overlay"></div>
        <a href="#top" id="totop" title="Back to Top">TOP</a>
    </div>
    <!-- #page -->
    <a href="tel:0938982410" id="callnowbutton">&nbsp;</a>
    <div id="yith-quick-view-modal">
        <div class="yith-quick-view-overlay"></div>
        <div class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                </div>
                <div id="yith-quick-view-content" class="woocommerce single-product"></div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' id='metaslider-responsive-slider-css' href='{{ URL('assets/content/plugins/ml-slider/assets/sliders/responsiveslides/responsiveslides.css?ver=3.5.1')}}' type='text/css' media='all' property='stylesheet' />
    <link rel='stylesheet' id='metaslider-public-css' href='{{ URL('assets/content/plugins/ml-slider/assets/metaslider/public.css?ver=3.5.1')}}' type='text/css' media='all' property='stylesheet' />
    <script type='text/javascript' src='{{ URL('assets/content/plugins/accesspress-pinterest/js/jquery-masionary.js')}}' async='async'></script>
    <script type='text/javascript' src='{{ URL('assets/content/plugins/accesspress-pinterest/js/frontend.js')}}' async='async'></script>
    <script type='text/javascript' src='{{ URL('assets/includes/js/imagesloaded.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/includes/js/masonry.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/includes/js/jquery/jquery.masonry.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/content/plugins/contact-form-7/includes/js/scripts.js')}}'></script>
    <script type="text/javascript" src="{{ URL('assets/assets/js/frontend/add-to-cart.min.js')}}"></script>
    <script type='text/javascript' src='{{ URL('assets/assets/js/jquery-blockui/jquery.blockUI.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/assets/js/js-cookie/js.cookie.min.js')}}'></script>
    <script type="text/javascript" src="{{ URL('assets/assets/js/frontend/woocommerce.min.js')}}"></script>
    <script type='text/javascript' src='{{ URL('assets/assets/js/frontend/cart-fragments.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/content/themes/bkteckshop/assets/js/slick.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/content/themes/bkteckshop/assets/js/main.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/content/plugins/ml-slider/assets/sliders/responsiveslides/responsiveslides.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/includes/js/underscore.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/includes/js/wp-util.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/assets/js/frontend/add-to-cart-variation.min.js')}}'></script>
    <script type='text/javascript' src='{{ URL('assets/assets/js/prettyPhoto/jquery.prettyPhoto.min.js')}}'></script>
    @yield('js')
</body>

</html>