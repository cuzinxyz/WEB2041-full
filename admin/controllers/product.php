<?php
require '../../model/connect.php';
$db = new Database();

$listProduct = $db->all_value('products');
$listCategories = $db->all_value('categories');

if ( $_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST['name'];
    if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) 
    {
        $folder = "../../assets/uploads/";
        $fileName = $folder . basename($_FILES['image']['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
            echo '<script>alert("Sai định dạng file.");window.location.href="/profile";</script>';
            die();
        }
        if($_FILES['image']['size'] > 20000000) {
            echo '<script>alert("File quá lớn.");window.location.href="/profile";</script>';
            die();
        }

        if(move_uploaded_file($_FILES['image']['tmp_name'], $fileName)) {
            
        } else {
            echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
            die();
        }
    }
    $image = $fileName;
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $db->add_product($name, $image, $price, $sale, $description, $category);
    // print_r("<pre>");
    // var_dump($_POST);
    // echo $image;
    // print_r("</pre>");
}

require '../views/product.php';
?>