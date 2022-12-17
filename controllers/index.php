<?php
session_start();
ob_start();

require './model/connect.php';
$db = new Database();

//$allProduct = $db->all_value('products');
$list = $db->querySelect("SELECT * FROM products ORDER BY RAND() LIMIT 8");
$listSlide = $db->all_value('slider');
$menProduct = $db->querySelect("SELECT * FROM products WHERE categoryID IN (4,9,3,13,6,12) LIMIT 8");
$womenProduct = $db->querySelect("SELECT * FROM products WHERE categoryID IN (8, 10) LIMIT 8");

require './views/index.php'; 