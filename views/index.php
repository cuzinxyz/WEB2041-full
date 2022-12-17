<?php
require_once './views/partials/header.php'; ?>

<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <?php foreach ($listSlide as $slide) : ?>
            <div class="item-slick1 item1-slick1" style="background-image: url(<?= $slide['image'] ?>);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                        data-appear="fadeInDown">
                        <?= $slide['name'] ?>
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <?= $slide['description'] ?>
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="/category/<?= $slide['slug'] ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/dress-women.webp" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/chan-vay" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Dresses
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/long-pants.webp" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/quan-au" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Quần ÂU
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/short-pants.webp" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/quan-short" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Quần Short
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/somi-women.webp" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/ao-so-mi" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Sơ Mi
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/woman-shirt.webp" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/ao-khoac" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Áo Khoác
                        </a>
                    </div>
                </div>

                <!-- block2 -->
                <div class="block2 wrap-pic-w pos-relative m-b-30">
                    <img loading="lazy"  src="assets/images/icons/bg-01.jpg" alt="IMG">

                    <div class="block2-content sizefull ab-t-l flex-col-c-m">
                        <h4 class="m-text4 t-center w-size3 p-b-8">
                            Sign up & get 20% off
                        </h4>

                        <p class="t-center w-size4">
                            Be the frist to know about the latest fashion news and get exclu-sive offers
                        </p>

                        <div class="w-size2 p-t-25">
                            <!-- Button -->
                            <a href="/register" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105 mx-5">
    <div class="container-fluid">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Featured Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php foreach ($list as $product) : ?>
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img loading="lazy" height="auto" width="100%" src="<?= $product->image ?>" alt="<?= $product->name ?>">

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
                            <a href="/product/<?= $product->id ?>" title="<?= $product->name ?>"
                                class="block2-name dis-block s-text3 p-b-5">
                                <?= $product->name ?>
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                <?php if ($product->sale != 0) : $product->sale += $product->price; ?>
                                <del class="font-italic">
                                    <?php echo number_format($product->sale, 0, '', ','); ?>
                                </del>
                                <?php endif; ?>
                                <mark class="text-danger">
                                    <?php echo number_format($product->price, 0, '', ','); ?>
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

<!-- Men Product -->
<div class="bgwhite p-b-100">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Men Products
            </h3>
        </div>
        <div class="menproduct row">
            <?php foreach ($menProduct as $men) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <!-- Block 2-->
                <div class="block2">
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                        <img loading="lazy" height="auto" width="100%" src="<?= $men->image ?>" alt="<?= $men->name ?>">

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
                        <a href="/product/<?= $men->id ?>" class="block2-name dis-block s-text3 p-b-5">
                            <?= $men->name ?>
                        </a>

                        <span class="block2-price m-text6 p-r-5">
                            <mark class="text-danger">
                                <?= number_format($men->price, 0, '', ',') ?>
                            </mark>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Women Product -->
<div class="bgwhite p-b-100">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Women Products
            </h3>
        </div>
        <div class="menproduct row">
            <?php foreach ($womenProduct as $women) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <!-- Block 2-->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img loading="lazy" height="auto" width="100%" src="<?= $women->image ?>" alt="<?= $women->name ?>">

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
                            <a href="/product/<?= $women->id ?>" class="block2-name dis-block s-text3 p-b-5">
                                <?= $women->name ?>
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                <mark class="text-danger">
                                    <?= number_format($women->price, 0, '', ',') ?>
                                </mark>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Footer -->

<?php require_once './views/partials/footer.php'; ?>
