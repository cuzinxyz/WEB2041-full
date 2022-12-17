<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh sách thành viên </h3>
            <nav aria-label="breadcrumb">
                <button type="button" class="btn btn-gradient-danger btn-icon-text" onclick="window.location.href='/admin/add-user'">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm thành viên
                </button>
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
                                    <th> Tên thành viên </th>
                                    <th> Hình ảnh </th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th> Vai trò </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listUsers as $key => $user) :
                                    $key++;
                                ?>
                                <tr>
                                    <td><?= $key ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td style="text-align: center;">
                                        <img src="<?= $user['image'] ?>"
                                            style="width: 100px;height: 100px;object-fit:cover;" alt="">
                                    </td>
                                    <td><?= $user['sex'] ?></td>
                                    <td><?= $user['birthday'] ?></td>
                                    <td>
                                        <?php
                                            if ($user['role_id'] == 1) {
                                                echo '<label class="badge badge-gradient-danger">Admin</label>';
                                            } else if ($user['role_id'] == 0) {
                                                echo '<label class="badge badge-info">Khách</label>';
                                            } else {
                                                echo '<mark class="badge badge-gradient-warning">Nhân Viên</mark>';
                                            }
                                            ?>
                                    </td>
                                    <?php if ( empty($_SESSION['isStaff']) ) : ?>
                                        <td>
                                            <?php
                                            $updateUrl = "/admin/update-user/" . $user['id'];
                                            $deleteUrl = "/admin/delete-user/" . $user['id'];
                                            ?>
                                            <div class="template-demo">
                                                <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href=' <?= $updateUrl ?> '"
                                                        style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                                                <button type="button" class="btn btn-outline-warning btn-fw" onclick="window.location.href=' <?= $deleteUrl ?> '"
                                                        style="max-width:100%; min-width: 50px; padding: 14px 20px;">Delete</button>
                                            </div>
                                        </td>
                                    <?php else:
                                        if ($user['role_id'] == 0) :
                                        ?>
                                            <td>
                                                <?php
                                                $updateUrl = "/admin/update-user/" . $user['id'];
                                                $deleteUrl = "/admin/delete-user/" . $user['id'];
                                                ?>
                                                <div class="template-demo">
                                                    <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href=' <?= $updateUrl ?> '"
                                                            style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                                                    <button type="button" class="btn btn-outline-warning btn-fw" onclick="window.location.href=' <?= $deleteUrl ?> '"
                                                            style="max-width:100%; min-width: 50px; padding: 14px 20px;">Delete</button>
                                                </div>
                                            </td>
                                    <?php endif; endif; ?>
                                </tr>
                                <?php
                                    endforeach;
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
