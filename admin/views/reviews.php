<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Quản Lý Bình Luận </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="max-width: 700px"> Product </th>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Comment
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listReviews as $key => $review) : ?>
                                <tr>
                                    <td><?= $review->name ?></td>
                                    <?php $comments = $db->get_comment($review->id); ?>
                                    <td>
                                        <ul class="list-star list-star d-flex flex-column justify-content-center"
                                            style="row-gap: 8px;">
                                            <?php foreach ($comments as $comment) : ?>
                                            <li><img src="<?= $comment->image ?>"
                                                    style="width: 40px;height:40px;object-fit:cover;"
                                                    alt=""><?= $comment->username ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-arrow">
                                            <?php foreach ($comments as $comment) : ?>
                                            <li>
                                                <?= $comment->content ?>
                                                <a style="text-decoration: none" href="/admin/update-review/<?= $comment->idReview ?>"><mark class="bg-warning text-white">Update</mark></a>
                                                <a class="custom-font" href="/admin/delete-review/<?= $comment->idReview ?>"><del>Delete</del></a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
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
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 | Quản trị
                website</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<?php require_once '../views/partials/footer.php'; ?>