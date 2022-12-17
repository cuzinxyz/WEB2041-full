<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh mục sản phẩm </h3>
            <nav aria-label="breadcrumb">
                <button type="button" class="btn btn-gradient-danger btn-icon-text"
                    onclick="window.location.href='/admin/add-category'">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm danh mục </button>
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
                                    <th> Tên danh mục </th>
                                    <th style="max-width: 700px"> Mô tả </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listCategories as $key => $category) {
                                    $updateUrl = "'/admin/update-category/" . $category['categoryID'] . "'";
                                    $deleteUrl = "'/admin/delete-category/" . $category['categoryID'] . "'";
                                    $key++;
                                    echo '
                                        <tr>
                                            <td>' . $key . '</td>
                                            <td>' . $category['categoryName'] . '</td>
                                            <td style="max-width: 700px"><span class="desc">' . $category['category_desc'] . '</span></td>
                                            <td>
                                                <div class="template-demo">
                                                    <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='.$updateUrl.'"
                                                        style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                                                    <button type="button" class="btn btn-outline-warning btn-fw" onclick="window.location.href='.$deleteUrl.'"
                                                        style="max-width:100%; min-width: 50px; padding: 14px 20px;">Delete</button>
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
