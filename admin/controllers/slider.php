<?php

require_once '../../model/connect.php';
$db = new Database();

$listCategories = $db->all_value('categories');
$listSlide = $db->all_value('slider');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $category = $_POST['category'];

    if (file_exists($_FILES['background']['tmp_name']) || is_uploaded_file($_FILES['background']['tmp_name'])) {
        $folder = "../../assets/uploads/slider/";
        $fileName = $folder . basename($_FILES['background']['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
            echo '<script>alert("Sai định dạng file.");window.location.href="/admin/add-product";</script>';
            die();
        }
        if ($_FILES['background']['size'] > 20000000) {
            echo '<script>alert("File quá lớn.");window.location.href="/admin/add-product";</script>';
            die();
        }

        if (move_uploaded_file($_FILES['background']['tmp_name'], $fileName)) {
        } else {
            echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
            die();
        }
    }

    $image = $fileName;

    $db->add_slide($image, $title, $desc, $category);
}

require '../views/slider.php';