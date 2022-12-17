<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Slide Manager </h3>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName1">Title </label>
                                <input type="text" name="title" class="form-control" id="exampleInputName1"
                                    placeholder="Enter title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Description </label>
                                <input type="text" name="desc" class="form-control" id="exampleInputEmail3" required
                                    placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select name="category" class="form-control" required>
                                    <option selected>Choose Category</option>
                                    <?php foreach ($listCategories as $category) : ?>
                                    <option value="<?= $category['categoryID'] ?>"><?= $category['categoryName'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Background</label>
                                <input type="file" class="form-control" name="background" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-gradient-primary me-2" value="Submit">
                                <button type="button" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Title </th>
                                    <th> Background </th>
                                    <th> Description</th>
                                    <th> Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listSlide as $key => $slide) : $key++; ?>
                                <tr>
                                    <td><?= $key ?></td>
                                    <td><?= $slide['name'] ?></td>
                                    <td>
                                        <img src="<?= $slide['image'] ?>"
                                            style="width: 100%; height: 200px; object-fit: contain;border-radius: 0;"
                                            alt="">
                                    </td>
                                    <td><?= $slide['description'] ?></td>

                                    <td><?= $slide['slug'] ?></td>
                                    <td>
                                        <a href="/admin/delete-slider/<?= $slide['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 |
                Quản trị website</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<?php require_once '../views/partials/footer.php'; ?>
