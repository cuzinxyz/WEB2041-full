<?php
require_once '../views/partials/header.php';
?>

<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="/" class="s-text16">
        Home
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="/category/<?= $product['categoryID'] ?>" class="s-text16">
        <?= $product['categoryName'] ?>
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
        <?= $product['name'] ?>
    </span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <img src="<?= $product['image'] ?>" class="product_image" alt="">
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?= $product['name'] ?>
            </h4>

            <span class="m-text17">
                <?php echo number_format($product['price'], 0, '', ','); ?>
            </span>

            <p class="s-text8 p-t-10">
                <?= isset($product['sort_desc']) ? $product['sort_desc'] : '' ?>
            </p>

            <!--  -->
            <div class="p-t-33 p-b-60">
                <div class="flex-l-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">
                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>

                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product"
                                value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-b-45">
                <span class="s-text8 m-r-35">ID: <?= $product['id'] ?></span>
                <span class="s-text8">Categories: <?= $product['categoryName'] ?></span>
            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Description
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        <?= $product['description'] ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Review Product  -->
<section style="background-color: #eee;" id="review">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <?php if(!empty($comments)) : ?>
                        <div class="card-body">
                            <?php foreach ($comments as $comment) : ?>
                            <div class="review">
                                <div class="d-flex flex-start align-items-center" style="column-gap: 10px;">
                                    <img class="rounded-circle shadow-1-strong me-3" src="<?= $comment->image ?>"
                                        alt="avatar" width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold text-primary mb-1"><?= $comment->username ?></h6>
                                        <p class="text-muted small mb-0">
                                            <?php echo $db->time_elapsed_string($comment->time) . PHP_EOL; ?>
                                        </p>
                                    </div>
                                </div>

                                <p class="mt-3 mb-4 pb-2">
                                    <?= $comment->content ?>
                                </p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <?php
                        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
                            $userInfo = $db->get_user($_SESSION['id']);
                            echo '
                            <form action="" method="POST">
                                <div class="d-flex flex-start w-100" style="column-gap: 10px;">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="' . $userInfo['image'] . '" alt="' . $userInfo['username'] . '"
                                        width="40" height="40" />
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" name="user_review" id="textAreaExample" rows="4" style="background: #fff;"
                                            placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            </form>
                            ';
                        } else {
                            echo '
                                <div class="comment container justify-content-center pb-2 mt-1 border-left border-right">
                                    <p>Bạn cần <a href="/login">Đăng Nhập</a> để bình luận!</p>
                                </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Related Products
            </h3>
        </div>
        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php foreach ($listRelated as $relatedProduct) : ?>
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="<?= $relatedProduct->image ?>" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="/product/<?= $relatedProduct->id ?>" class="block2-name dis-block s-text3 p-b-5">
                                <?= $relatedProduct->name ?>
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                <mark class="text-danger">
                                    <?php echo number_format($relatedProduct->price, 0, '', ','); ?>
                                </mark>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../views/partials/footer.php'; ?>
