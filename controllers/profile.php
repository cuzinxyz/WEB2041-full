<?php
session_start();
ob_start();
require '../model/connect.php';
$db = new Database();

if (empty($_SESSION['id'])) header('location: /login');

$user = $db->get_user($_SESSION['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // var_dump($_FILES['image']);
    if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
        $folder = "../assets/uploads/users/";
        $fileName = $folder . basename($_FILES['image']['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg') {
            echo '<script>alert("Sai định dạng file.");window.location.href="/profile";</script>';
            die();
        }
        if ($_FILES['image']['size'] > 20000000) {
            echo '<script>alert("File quá lớn.");window.location.href="/profile";</script>';
            die();
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $fileName)) {
        } else {
            echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
            die();
        }
    } else {
        $fileName = $user['image'];
    }

    $id = (int) $user['id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sex = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $username = $user['username'];
    $password = $user['password'];
    $image = $fileName;

    if (!empty($_POST['newpassword']) && !empty($_POST['newrepassword'])) {
        if ($_POST['newpassword'] != $_POST['newrepassword']) {
            $error = array();
            $error['newpass'] = "Password do not match!";
        } else {
            $password = $_POST['newpassword'];
        }
    }

    $update = $db->update_user($id, $email, $image, $password, $sex, $phone, $birthday);

    if ($update) {
        header('location: /profile?success');
    }
}

require_once '../views/profile.php';
