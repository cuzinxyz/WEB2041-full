<?php
session_start();
ob_start();
require './model/connect.php';
$db = new Database();

if ( !empty($_GET) )
{

  $search = addslashes($_GET['search']);

  $listProduct = $db->search_product($search);
  $listCategories = $db->all_value('categories');

  $title = 'Search: ' . $search;
  $desc = '';

}

require_once './views/partials/header.php';
?>

<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
    style="background-image: url(/assets/images/banner-filter.jpg);">
    <h2 class="l-text2 t-center">
        <?= $title ?>
    </h2>
    <p class="m-text13 t-center">
        <?= $desc ?>
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Danh mục
                    </h4>

                    <ul class="p-b-54">
                        <?php foreach ($listCategories as $category) : ?>
                        <li class="p-t-4">
                            <a href="/category/<?= $category['categoryID'] ?>" class="s-text13 <?php if ($category['categoryID'] == $cate_id) {
                                                                                                        echo ' active1';
                                                                                                    } ?>">
                                <?= $category['categoryName'] ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="search-product pos-relative bo4 of-hidden">
                        <form action="/search.php" method="GET">

                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search"
                                placeholder="Search Products...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                <div class="row">
                    <?php foreach ($listProduct as $product) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">

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
                                <a href="/product/<?= $product['id'] ?>" class="block2-name dis-block s-text3 p-b-5">
                                    <?= $product['name'] ?>
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    <?php echo number_format($product['price'], 0, '', ','); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- end row  -->
            </div>
        </div>
    </div>
</section>

<?php
require_once './views/partials/footer.php';
?>
