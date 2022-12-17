<?php
session_start();
ob_start();
if (empty($_SESSION['idAdmin']) && empty($_SESSION['isStaff'])) {
    header('location: /');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | X-SHOP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/admin/images/favicon.ico" />
    <script src="/assets/js/ckeditor.js"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:/partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="./">
                    <span class="text-logo">X-SHOP</span>
                </a>
                <a class="navbar-brand brand-logo-mini" href="/admin"><img src="/assets/admin/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:/partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Sản phẩm</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-dns"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/add-product">Thêm sản
                                        phẩm</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin/list-product">Danh sách
                                        sản phẩm</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="/#categories" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Danh mục sản phẩm</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-certificate"></i>
                        </a>
                        <div class="collapse" id="categories">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/add-category">Thêm danh mục</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="/admin/list-categories">Danh sách danh
                                        mục</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="/#userMenu" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Thành viên</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="collapse" id="userMenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/add-user">Thêm thành
                                        viên</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin/list-user">Danh sách
                                        thành viên</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#commentMenu" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Bình Luận</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                        <div class="collapse" id="commentMenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/reviews">Quản lý bình luận</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/slider" class="nav-link">
                            <span class="menu-title">Quản lí slide</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                            <span class="menu-title">Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </nav>