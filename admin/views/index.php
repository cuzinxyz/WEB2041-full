<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/admin/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Lượng hàng hóa <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $countProduct ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/admin/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Loại hàng <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $countCategory ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/admin/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Khách hàng <i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $countUser ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                        <h4 class="font-weight-normal mb-3">Lượt bình luận <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $countComment ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left">Product Statistics</h4>
                        </div>
                        <canvas id="product"></canvas>
                    </div>
                </div>

            </div>

            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <canvas id="customer" width="100%"></canvas>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- content-wrapper ends -->

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Updates</h4>
                        <div class="row mt-3">
                            <?php foreach ($hightlightProduct as $prdHl) : ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 pe-1">
                                <a href="/product/<?= $prdHl->id ?>" title="<?= $prdHl->name ?>">
                                    <img src="<?= $prdHl->image ?>" style="height: 400px;object-fit: cover;" class="mb-2 mw-100 w-100 rounded" alt="<?= $prdHl->name ?>">
                                </a>
                            </div>
                            <?php endforeach; ?>
<!--                            <div class="col-6 pe-1">-->
<!--                                <img src="/assets/admin/images/dashboard/img_3.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">-->
<!--                            </div>-->
<!--                            <div class="col-6 pe-1">-->
<!--                                <img src="/assets/admin/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">-->
<!--                            </div>-->
<!--                            <div class="col-6 pe-1">-->
<!--                                <img src="/assets/admin/images/dashboard/img_4.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2
                    | Quản trị website</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

<?php require_once '../views/partials/footer.php'; ?>
