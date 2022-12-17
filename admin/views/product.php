<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh sách sản phẩm </h3>
            <nav aria-label="breadcrumb">
                <button type="button" class="btn btn-gradient-danger btn-icon-text" data-toggle="modal"
                    data-target="#exampleModal" onclick="window.location.href='/admin/add-product'">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm sản phẩm </button>

            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Tên sản phẩm </th>
                                    <th style="width: 300px;"> Hình ảnh </th>
                                    <th> Giá </th>
                                    <th> Giá sale </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($listProduct as $key => $product) {
                                    $key++;
                                    $updateUrl = "'/admin/update-product/" . $product['id'] . "'";
                                    $deleteUrl = "'/admin/delete-product/" . $product['id'] . "'";
                                    echo '
                                            <tr>
                                                <td>' . $key . '</td>
                                                <td>' . $product['name'] . '</td>
                                                <td>
                                                    <img src="' . $product['image'] . '" class="mb-2 mw-100 w-100 mh-100 rounded" style="height: 100px !important;object-fit:cover;" />
                                                </td>
                                                <td>' . $product['price'] . '</td>
                                                <td>' . $product['sale'] . '</td>
                                                <td>
                                                    <div class="template-demo">
                                                        <button type="button" class="btn btn-outline-primary btn-fw"
                                                            style="max-width:100%; min-width: 50px; padding: 14px 20px;" onclick="window.location.href=' . $updateUrl . '">Update</button>
                                                        <button type="button" class="btn btn-outline-warning btn-fw"
                                                            style="max-width:100%; min-width: 50px; padding: 14px 20px;" onclick="window.location.href=' . $deleteUrl . '">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        ';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 | Quản trị
                website</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<?php require_once '../views/partials/footer.php'; ?>
