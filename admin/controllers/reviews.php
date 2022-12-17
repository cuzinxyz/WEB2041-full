<?php
require '../../model/connect.php';
$db = new Database();

// $listReviews = $db->querySelect("SELECT idReview, users.username, users.image, content, products.id, reviews.idProduct, products.name, time FROM reviews JOIN users ON reviews.id=users.id JOIN products ON reviews.idProduct=products.id");
//$listReviews = $db->querySelect("SELECT products.id, name, idReview FROM products JOIN reviews ON products.id=reviews.idProduct WHERE (products.id IN (SELECT idProduct FROM reviews)) GROUP BY products.id;");
$listReviews = $db->querySelect("SELECT reviews.id, content, products.id, products.name FROM reviews JOIN products ON reviews.idProduct=products.id GROUP BY products.id");

// print_r($listReviews);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
}
require '../views/reviews.php';