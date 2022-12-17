<?php
require '../../model/connect.php';
$db = new Database();

$listUsers = $db->all_value('users');
if ( $_SERVER['REQUEST_METHOD'] == 'POST') 
{

}
require '../views/users.php';