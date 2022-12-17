<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?php if (isset($title)) {
                echo $title . ' | ';
            } ?> X-SHOP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!--===============================================================================================-->
    <?php if (isset($cssAdd)) {
        echo $cssAdd;
        echo '<!--===============================================================================================-->';
    } ?>
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <span class="topbar-child1">
                    Giao hàng miễn phí cho đơn hàng tiêu chuẩn trên 400.000₫
                </span>

                <div class="topbar-child2">
                    <span class="topbar-email">
                        support@xshop.store
                    </span>
                </div>
            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="/" class="logo">
<!--                    <span class="text-logo">X-SHOP</span>-->
                    <button class="btnLogo">X-SHOP</button>
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="/">Home</a>
                            </li>

                            <li>
                                <a href="/shop">Shop</a>
                            </li>

                            <?php if (isset($_SESSION['username']) && isset($_SESSION['id'])) :
                                $user = $db->get_user($_SESSION['id']);
                                if ($user['role_id'] == 1 OR $user['role_id'] == 2) :
                            ?>
                            <li class="sale-noti">
                                <a href="/admin" target="_blank">Admin</a>
                            </li>
                            <?php endif;
                            endif; ?>

                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">
                    <?php
                    if (isset($_SESSION['username']) && isset($_SESSION['id'])) :
                        $user = $db->get_user($_SESSION['id']);
                        if ($user['image'] == null) {
                            $user['image'] = "../assets/images/user-picture.png";
                        }
                        echo '
                            <img src="' . $user['image'] . '" class="user_avatar" width="27" height="27" />
                            <ul class="main_menu">
                                <li>
                                    <a href="#">' . $user['username'] . '</a>
                                    <ul class="sub_menu">
                                        <li><a href="/profile">Profile</a></li>
                                        <li><a href="/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            ';
                    else :
                        echo '
                            <a href="/login" class="header-wrapicon1 dis-block">
                                <img src="../assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            </a>
                            ';
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="/" class="logo-mobile">
                <span class="text-logo">X-SHOP</span>
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <?php if (empty($_SESSION['username']) && empty($_SESSION['id'])) : ?>
                <div class="header-icons-mobile">
                    <a href="/login" class="header-wrapicon1 dis-block">
                        <img src="../assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                </div>
                <?php else: ?>
                <div class="header-icons-mobile">
                    <a href="/profile" class="header-wrapicon1 dis-block">
                        <img src="../assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                </div>
                <?php endif; ?>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                            Giao hàng miễn phí cho đơn hàng tiêu chuẩn trên 400.000₫
                        </span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                support@xshop.store
                            </span>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="/">Home</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="/shop">Shop</a>
                    </li>

                    <?php if (isset($_SESSION['username']) && isset($_SESSION['id'])) :
                        $user = $db->get_user($_SESSION['id']);
                        if ($user['role'] == 1) :
                            ?>
                            <li class="item-menu-mobile">
                                <a href="/admin" target="_blank">Admin</a>
                            </li>
                        <?php endif; ?>

                        <li class="item-menu-mobile">
                            <a href="/logout">Đăng xuất</a>
                        </li>

                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </header>
