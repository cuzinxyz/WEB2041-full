<?php
require '../../model/connect.php';
$db = new Database();

$countProduct = $db->count('products');
$countCategory = $db->count('categories');
$countUser = $db->count('users');
$countComment = $db->count('reviews');

$percentageProduct = $db->querySelect("SELECT products.categoryID, categories.categoryName, COUNT(*) AS total FROM products JOIN categories ON products.categoryID=categories.categoryID GROUP BY products.categoryID");

$array = json_decode(json_encode($percentageProduct), true);

$percentageCustomer = $db->querySelect("
    SELECT sex, COUNT(*) AS total, 
    COUNT(*) * 100 / (SELECT COUNT(sex) FROM users) AS 'percent'
    FROM users GROUP BY sex
");
$customer = json_decode(json_encode($percentageCustomer), true);

// print_r($customer);

$hightlightProduct = $db->querySelect("SELECT id, name, image FROM products");
require '../views/index.php';
