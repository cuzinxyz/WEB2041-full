<?php

require_once '../../model/connect.php';
$db = new Database();

if (isset($_GET['product'])) {
    $product = $db->get_product($_GET['product']);
    if (empty($product)) {
        header('location: /admin/list-categories');
    }
    $id = $_GET['product'];
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
                $image = $fileName;
            } else {
                echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
                die();
            }
        } else {
            $image = $product['image'];
        }

        $db->update_product($id, $name, $image, $price, $sale, $description, $category);

        header('location: /admin/list-product');
    }
    $listCategories = $db->all_value('categories');
    require_once '../../views/edit-product.php';
}

if (isset($_GET['category'])) {
    $cate_id = $_GET['category'];

    $category = $db->get_value('categories', 'categoryID', $cate_id);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $category_name = $_POST['category_name'];
      $category_desc = $_POST['category_description'];

      $update = $db->update_category($category_name, $category_desc, $cate_id);

      header('location: /admin/list-category');
    }

    require_once '../../views/edit-category.php';
}

if (isset($_GET['user'])) {

    $user = $db->get_user($_GET['user']);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // var_dump($_FILES['image']);
        if (file_exists($_FILES['user_image']['tmp_name']) || is_uploaded_file($_FILES['user_image']['tmp_name'])) {
            $folder = "../../assets/uploads/users/";
            $fileName = $folder . basename($_FILES['user_image']['name']);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg') {
                echo '<script>alert("Sai định dạng file.");window.location.href="/admin/list-user";</script>';
                die();
            }
            if ($_FILES['user_image']['size'] > 20000000) {
                echo '<script>alert("File quá lớn.");window.location.href="/admin/list-user";</script>';
                die();
            }

            if (move_uploaded_file($_FILES['user_image']['tmp_name'], $fileName)) {
            } else {
                echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
                die();
            }
        } else {
            $fileName = $user['image'];
        }

        $id = (int) $user['id'];
        $phone = $_POST['user_tel'];
        $email = $_POST['user_email'];
        $sex = $_POST['gender'];
        $birthday = $_POST['user_birth'];
        $username = $user['username'];
        $password = $_POST['user_password'];
        $image = $fileName;

        if (!empty($_POST['newpassword']) && !empty($_POST['newrepassword']))
        {
            if ($_POST['newpassword'] != $_POST['newrepassword']) {
                $error = array();
                $error['newpass'] = "Password do not match!";
            } else {
                $password = $_POST['newpassword'];
            }
        }

        $update = $db->update_user($id, $email, $image, $password, $sex, $phone, $birthday);

        if ($update) {
            header('location: /admin/list-user');
        }
    }
    require_once '../views/edit-user.php';

}

if (isset($_GET['idR']))
{
  $idReview = $_GET['idR'];

  $get_comment = $db->get_value('reviews', 'idReview', $_GET['idR']);

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $content = $_POST['comment_content'];
    if (!empty($content)) {
      $db->update_comment($idReview, $content);
    }
  }

  require_once '../views/edit-comment.php';
}
