<?php
require '../../model/connect.php';
$db = new Database();

$listCategories = $db->all_value('categories');
if ( $_SERVER['REQUEST_METHOD'] == 'POST') 
{
}
require '../views/categories.php';
?>