<?php
require_once '../model/connect.php';
$db = new Database();


if (isset($_GET['name'])) {
    if ($_GET['name'] == 'dress') {
        $title = "Chân Váy";
        $desc = "Sở Hữu Ngay Chân Váy Chính Hãng Giá Tốt Nhất Thị Trường";
        $listCategories = $db->all_value('categories');
        $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN (10)");
        $cate_id = 10;
    }
    if ($_GET['name'] == 'short') {
        $title = "Quần Short";
        $desc = "Quần Short - 100+ Mẫu Quần Sooc Lửng Thể Thao";
        $listCategories = $db->all_value('categories');
        $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN (9)");
        $cate_id = 9;
    }
    if ($_GET['name'] == 'coat') {
        $title = "Áo Khoác";
        $desc = "Áo Khoác Nam Nữ - Áo Phao Thương Hiệu Việt Chất Lượng";
        $listCategories = $db->all_value('categories');
        $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN (11)");
        $cate_id = 11;
    }
    if ($_GET['name'] == 'trousers') {
        $title = "Quần Âu";
        $desc = "Quần Tây Nam Ống Đứng - Quần Âu Công Sở Co Giãn";
        $listCategories = $db->all_value('categories');
        $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN (12)");
        $cate_id = 12;
    }
    if ($_GET['name'] == 'shirt') {
        $title = "Sơ Mi";
        $desc = "Áo Sơ Mi - Sơ Mi Công Sở Lịch Lãm Quyến Rũ";
        $listCategories = $db->all_value('categories');
        $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN (13)");
        $cate_id = 13;
    }
    if ($_GET['name'] == 'all') {
        $title = "X-SHOP";
        $desc = "Look Good, Feel Good";
        $listCategories = $db->all_value('categories');
        // $listProduct = $db->querySelect("SELECT * FROM products ORDER BY RAND()");
        $cate_id = 0;

        $totalPages = $db->countPages(9);
        $listProduct = $db->pagination('products', 8);
    }
    require_once '../views/filter.php';
}

if (isset($_GET['category'])) {
    $cate_id = $_GET['category'];
    $infoCate = $db->get_category($cate_id);
    $listCategories = $db->all_value('categories');
    $title = $infoCate['categoryName'];
    $desc = $infoCate['category_desc'];

    $listProduct = $db->querySelect("SELECT * FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE products.categoryID IN ($cate_id)");

    require_once '../views/filter.php';
}