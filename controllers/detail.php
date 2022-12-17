<?php
session_start();
ob_start();
require '../model/connect.php';
$db = new Database();

if (isset($_GET['id']) && $_GET['id'] != null) {

    $id = $_GET['id'];
    $product = $db->get_product($id);
    $title = $product['name'];
    $category_ID = $product['categoryID'];
    $listRelated = $db->querySelect("SELECT id, name, image, price, sale, description FROM products JOIN categories ON products.categoryID=categories.categoryID WHERE categories.categoryID=$category_ID AND products.id!=$id ORDER BY products.id DESC");
    $comments = $db->get_comment($id);
    // print_r($comments);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userComment = $_SESSION['id'];
        $content = $_POST['user_review'];
        if (!empty($userComment) && !empty($content)) {
            $db->add_comment($userComment, $content, $id);
        } else {
            header('location: /product/' . $id . '#review');
        }
    }

    require_once '../views/detail.php';
} else {
    header('location: /');
}