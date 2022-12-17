<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Sửa bình luận </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nội dung:</label>
                                <input type="text" name="comment_content" class="form-control"
                                    placeholder="Nhập nội dung mới" value="<?= isset($get_comment['content']) ? $get_comment['content'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-gradient-primary me-2" value="Submit">
                                <button type="button" class="btn btn-light">Cancel</button>
                            </div>
                        </form>
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
