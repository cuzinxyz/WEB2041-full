<?php
session_start();
ob_start();
require '../model/connect.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = $db->checkNull(array('login_email', 'login_password'));

    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    if (!empty($email)) { $_SESSION['email'] = $_POST['login_email']; }; 

    if (!empty($error)) {} else {
      $result = $db->LOGIN($email, $password);

      if ($result) {
          unset($_SESSION['email']);
          $_SESSION['username'] = $result->username;
          $_SESSION['id'] = $result->id;
          if (($result->role_id) == 1) {
              $_SESSION['idAdmin'] = 'Admin';
          }
          if ($result->role_id == 2) {
              $_SESSION['isStaff'] = 'Nhân Viên';
          }
          header('location: /');
      } else {
          $_SESSION['faild'] = 'Wrong email password';
      }
    }
}

require_once '../views/login.php';
