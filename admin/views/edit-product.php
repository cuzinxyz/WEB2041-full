<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Sửa sản phẩm </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="tensp">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" id="tensp"
                                    placeholder="Product name" value="<?= $product['name'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="imgUpload">Hình ảnh</label>
                                <input type="file" class="form-control" name="product_image" id="imgUpload">
                            </div>
                            <div class="form-group">
                                <label for="product_price">Giá sản phẩm</label>
                                <input type="number" class="form-control" name="product_price" id="product_price"
                                    placeholder="Product price" value="<?= $product['price'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="product_sale">Giảm giá</label>
                                <input type="number" class="form-control" name="product_sale" id="product_sale"
                                    placeholder="Product sale" value="<?= $product['sale'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="editor">Mô tả sản phẩm</label>
                                <textarea name="description" class="form-control" id="editor" rows="4">
                                <?= $product['description'] ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select name="category" class="form-control" required>
                                    <option>Choose Category</option>
                                    <?php foreach ($listCategories as $category) : ?>
                                    <option value="<?= $category['categoryID'] ?>" <?php if ($product['categoryID'] == $category['categoryID']) {
                                                                                            echo ' selected';
                                                                                        } ?>>
                                        <?= $category['categoryName'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
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
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 |
                Quản trị website</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

<?php require_once '../views/partials/footer.php'; ?>