<?php
require '../../model/connect.php';
$db = new Database();

if (isset($_GET['idP'])) {
    $id = $_GET['idP'];
    $db->delete('products', 'id', $id);
    header("Location: /admin/list-product");
}

if (isset($_GET['idU'])) {
    $id = $_GET['idU'];
    $db->delete('users', 'id', $id);
    header("Location: /admin/list-user");
}

if (isset($_GET['idC'])) {
    $id = $_GET['idC'];
    $db->delete('categories', 'categoryID', $id);
    header("Location: /admin/list-categories");
}

if (isset($_GET['idR'])) {
    $id = $_GET['idR'];
    $db->delete('reviews', 'idReview', $id);
    header("Location: /admin/reviews");
}

if (isset($_GET['idS'])) {
    $id = $_GET['idS'];
    $db->delete('slider', 'id', $id);
    header("Location: /admin/slider");
}