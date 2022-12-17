<?php

require_once '../../model/connect.php';
$db = new Database();

if (isset($_GET['product'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $sale = $_POST['product_sale'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        if (file_exists($_FILES['product_image']['tmp_name']) || is_uploaded_file($_FILES['product_image']['tmp_name'])) {
            $folder = "../../assets/uploads/products/";
            $fileName = $folder . basename($_FILES['product_image']['name']);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
                echo '<script>alert("Sai định dạng file.");window.location.href="/admin/add-product";</script>';
                die();
            }
            if ($_FILES['product_image']['size'] > 20000000) {
                echo '<script>alert("File quá lớn.");window.location.href="/admin/add-product";</script>';
                die();
            }

            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $fileName)) {
            } else {
                echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
                die();
            }
        } else {
            $image = "https://source.unsplash.com/random";
        }

        $image = $fileName;

        $db->add_product($name, $image, $price, $sale, $description, $category);

        header('location: /admin/list-product');
    }
    $listCategories = $db->all_value('categories');
    require_once '../views/add-product.php';
}

if (isset($_GET['category'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['caegory_name'];
        $desc = $_POST['category_description'];
        $db->add_category($name, $desc);
        header('location: /admin/list-categories');
    }
    require_once '../views/add-category.php';
}

if (isset($_GET['user'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];
        $gender = $_POST['gender'];
        $phone = $_POST['user_tel'];
        $birthday = $_POST['user_birth'];

        if (file_exists($_FILES['user_image']['tmp_name']) || is_uploaded_file($_FILES['user_image']['tmp_name'])) {
            $folder = "../../assets/uploads/users/";
            $fileName = $folder . basename($_FILES['user_image']['name']);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
                echo '<script>alert("Sai định dạng file.");window.location.href="/admin/add-product";</script>';
                die();
            }
            if ($_FILES['user_image']['size'] > 20000000) {
                echo '<script>alert("File quá lớn.");window.location.href="/admin/add-product";</script>';
                die();
            }

            if (move_uploaded_file($_FILES['user_image']['tmp_name'], $fileName)) {
            } else {
                echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
                die();
            }
        } else {
            $image = "https://i.pravatar.cc/300";
        }

        $image = $fileName;

        $db->add_user($username, $password, $email, $gender, $image, $phone, $birthday);
        header('location: /admin/list-user');
    }
    require_once '../views/add-user.php';
}