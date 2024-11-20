<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 12:16:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trang chủ Doji</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= ROOT_URL . 'views/client/assets/images/logo/1.png' ?>">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/flaticon/flaticon.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/slick.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/jquery-ui.min.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/sal.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/magnific-popup.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/vendor/base.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'views/client/assets/css/style.min.css' ?>">

</head>


<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-4">
        <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <div class="campaign-countdown"></div>
                    <p>Mở cánh cửa đến với thế giới trang sức <a href="#">Nhận ưu đãi cửa bạn</a></p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div>
        <!-- Start Header Top Area  -->
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-12">
                        <!-- <div class="header-top-dropdown dropdown-box-style">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    EN
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EN</a></li>
                                    <li><a class="dropdown-item" href="#">ARB</a></li>
                                    <li><a class="dropdown-item" href="#">SPN</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-4 col-5">
                        <div class="header-brand">
                            <a href="index.html" class="logo logo-dark">
                                <img src="<?= ROOT_URL . 'views/client/assets/images/logo/logo.webp'?>" width="150px" alt="Site Logo">
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <img src="assets/images/logo/logo-light.png" alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-7">
                        <div class="header-action">
                            <ul class="action-list">
                                <li class="axil-search">
                                    <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                        <i class="flaticon-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="wishlist.html">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </li>
                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        <span class="cart-count">3</span>
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </li>
                                <li class="my-account">
                                    <a href="javascript:void(0)">
                                        <i class="flaticon-person"></i>
                                    </a>
                                    <div class="my-account-dropdown">
                                        <span class="title">QUICKLINKS</span>
                                        <ul>
                                            <li>
                                                <a href="<?= ROOT_URL . '?ctl=my-account' ?>">My Account</a>
                                            </li>
                                            <li>
                                                <a href="#">Initiate return</a>
                                            </li>
                                            <li>
                                                <a href="#">Support</a>
                                            </li>
                                            <li>
                                                <a href="#">Language</a>
                                            </li>
                                        </ul>
                                        <a href="<?= ROOT_URL . '?ctl=sign-in' ?>" class="axil-btn btn-bg-primary">Login</a>
                                        <div class="reg-footer text-center">No account yet? <a href="sign-up.html"
                                                class="btn-link">REGISTER HERE.</a></div>
                                    </div>
                                </li>
                                <li class="axil-mobile-toggle">
                                    <button class="menu-btn mobile-nav-toggler">
                                        <i class="flaticon-menu-2"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area  -->

        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.html" class="logo">
                                    <img src="<?= ROOT_URL . 'views/client/assets/images/logo/logo.webp'?>" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li>
                                    <a href="<?= ROOT_URL ?>">Trang chủ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?= ROOT_URL . '?ctl=shop' ?>">Cửa hàng</a>
                                    <ul class="axil-submenu">
                                        <li><a href="#">Nhẫn</a></li>
                                        <li><a href="#">Dây chuyền</a></li>
                                        <li><a href="#">Vòng tay</a></li>

                                    </ul>
                                </li>

                                <li><a href="<?= ROOT_URL . '?ctl=about' ?>">Giới thiệu</a></li>
                                <li>
                                    <a href="<?= ROOT_URL . '?ctl=blog' ?>">Tin tức</a>
                                </li>
                                <li><a href="<?= ROOT_URL . '?ctl=contact' ?>">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area  -->
    </header>