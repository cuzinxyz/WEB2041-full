<?php require_once '../views/partials/header.php'; ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Sửa danh mục </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" name="category_name" class="form-control" value="<?php if(!empty($category)) {echo $category['categoryName'];} ?>" placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="category_description" rows="4" id="editor">
                                        <?php if(!empty($category)) {echo trim(($category['category_desc']));} ?>
                                </textarea>
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

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

<?php require_once '../views/partials/header.php'; ?>
