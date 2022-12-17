<?php
class Database
{

    private $conn;
    public function __construct()
    {
        $this->connect("web2041", "root", "");
    }
    private function connect($dbname, $user, $pass)
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function count($table)
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM $table");
        $stmt->execute();
        return $result = $stmt->fetchColumn();
    }
    public function all_value($table)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table ORDER BY RAND()");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // phân trang sản phảm.
    public function pagination($table,$item)
    {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $start = ( $page - 1 ) * $item;
        $result = $this->querySelect("SELECT * FROM $table LIMIT $start, $item");
        return $result;
    }
    public function countPages($item)
    {
        $getItem = $this->all_value('products');
        $totalPages = sizeof($getItem);
        $result = round($totalPages / $item);
        return $result;
    }
    public function querySelect($sql)
    {
        $sqlQuery = $this->conn->prepare($sql);
        $sqlQuery->execute();
        $data = $sqlQuery->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function add_product($name, $image, $price, $sale, $description, $category)
    {
        $sql = "
        INSERT INTO `products`(`name`, `image`, `price`, `sale`, `ngay_nhap`, `description`, `categoryID`)
        VALUES (?,?,?,?,NOW(),?,?);
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $image, $price, $sale, $description, $category]);
    }
    public function get_value($table, $column, $where)
    {
        $query = $this->conn->prepare("SELECT * FROM `$table` WHERE `$column`=$where");
        $query->execute();
        if ($query) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $result;
    }
    public function add_category($name, $desc)
    {
        $stmt = $this->conn->prepare("INSERT INTO categories(categoryName, category_desc) VALUES (?, ?)");
        $stmt->execute([$name, $desc]);
    }
    public function delete($table, $column, $id)
    {
        $table = addslashes($table);
        $column = addslashes($column);
        $id = addslashes($id);
        $stmt = $this->conn->prepare("
        DELETE FROM $table WHERE $column=$id;
        ");
        $stmt->execute();
    }
    public function add_user($username, $password, $email, $sex = null, $image = null, $phone = null, $birthday = null)
    {
        $sql = '
        INSERT INTO `users`(`email`, `username`, `password`, `sex`, `image`, `phone`, `birthday`)
        VALUES (?, ?, ?, ?, ?, ?, ?);
        ';
        $stmt = $this->conn->prepare($sql);
        return $result = $stmt->execute([$email, $username, $password, $sex, $image, $phone, $birthday]);
    }

    // VALIDATE
    public function checkNull($names)
    {
        $empty = array();
        foreach ($names as $key => $name) {
            if (empty($_POST[$name])) {
                $empty[$name] = 'Empty '.$name;
            }
        }
        return $empty;
    }

    // CHECK IMAGE
    function uploadImage($nameUpload, $folderSave)
    {
        if (file_exists($_FILES[$nameUpload]['tmp_name']) || is_uploaded_file($_FILES[$nameUpload]['tmp_name'])) {

            $folder = $folderSave;
            $fileName = $folder . basename($_FILES[$nameUpload]['name']);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg') {
                echo '<script>alert("Sai định dạng file.");window.location.href="/profile";</script>';
                die();
            }
            if ($_FILES[$nameUpload]['size'] > 2000000) {
                echo '<script>alert("File quá lớn.");window.location.href="/profile";</script>';
                die();
            }

            if (move_uploaded_file($_FILES[$nameUpload]['tmp_name'], $fileName)) {
            } else {
                echo '<script>alert("Có lỗi xảy trong quá trình upload.");</script>';
                die();
            }
        }
    }

    // MODEL USER
    public function LOGIN($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM `users` WHERE `email`=? AND `password`=?");
        $stmt->execute([$email, $password]);
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    public function get_user($user_id)
    {
        $query = $this->conn->prepare("SELECT * FROM `users` WHERE `id`=$user_id");
        $query->execute();
        if ($query) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $result;
    }
    public function update_user($id = null, $email = null, $image = null, $password = null, $sex = null, $phone = null, $birthday = null)
    {
        $sql = "
        UPDATE users
        SET email=?,
        password=?,
        sex=?,
        image=?,
        phone=?,
        birthday=?
        WHERE id=?;
        ";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $password, $sex, $image, $phone, $birthday, $id]);
        return $query;
    }
    public function update_comment($idReview, $content)
    {
      $sql = "
      UPDATE reviews
      SET content = ?
      WHERE idReview = ?
      ";
      $stmt = $this->conn->prepare($sql);
      $result = $stmt->execute([$content, $idReview]);
      if($result) {
        header('location: /admin/reviews');
      }
    }
    public function update_category($name, $desc, $where)
    {
      $sql = "
      UPDATE categories
      SET categoryName=?,
      category_desc=?
      WHERE categoryID=?
      ";
      $query = $this->conn->prepare($sql);
      $query->execute([$name, $desc, $where]);
      return $query;
    }
    public function get_comment($idProduct)
    {
        $result = array();
        $sql = "
            SELECT idReview, reviews.id, users.username, users.image, content, reviews.idProduct, time
            FROM `reviews`
            JOIN `users` ON reviews.id=users.id
            JOIN `products` ON reviews.idProduct=products.id
            WHERE reviews.idProduct=$idProduct
            ORDER BY idReview ASC
        ";
        $query = $this->conn->prepare($sql);
        $query->execute();
        if ($query) {
            $result = $query->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
    public function add_comment($isUser, $content, $idProduct)
    {
        $isUser = addslashes($isUser);
        $idProduct = addslashes($idProduct);
        $query = $this->conn->prepare("INSERT INTO `reviews`(`id`, `content`, `idProduct`, `time`) VALUES ( :isUser, :content, :idProduct, NOW() )");
        $query->bindParam(":isUser", $isUser, PDO::PARAM_INT);
        $query->bindParam(":content", $content, PDO::PARAM_STR);
        $query->bindParam(":idProduct", $idProduct, PDO::PARAM_INT);
        if ($query->execute()) {
            header("location: /product/$idProduct#review");
        }
    }
    public function search_product($search)
    {
        $sql = "SELECT * FROM products WHERE (name LIKE '%{$search}%')";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    // MODEL PRODUCT
    public function get_product($id)
    {
        $result = array();
        $query = $this->conn->prepare("SELECT * FROM `products` JOIN categories ON products.categoryID=categories.categoryID WHERE `id`=$id");
        $query->execute();

        if ($query) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
        }

        return $result;
    }
    public function update_product($id = null, $name = null, $image = null, $price = null, $sale = null, $description = null, $category = null)
    {
        $sql = '
        UPDATE `products`
        SET `name`=?,
        `image`=?,
        `price`=?,
        `sale`=?,
        `description`=?,
        `categoryID`=?
        WHERE `id`=?
        ';
        $query = $this->conn->prepare($sql);
        $query->execute([$name, $image, $price, $sale, $description, $category, $id]);
        return $query;
    }

    // MODEL SLIDER
    public function add_slide($image = null, $title = null, $desc = null, $category = null)
    {
        $stmt = $this->conn->prepare("INSERT INTO slider(image, name, description, slug) VALUES (?, ?, ?, ?)");
        $stmt->execute([$image, $title, $desc, $category]);
        header('location: /admin/slider');
    }

    // MODEL CATEGORY
    public function get_category($id)
    {
        $result = array();
        $query = $this->conn->prepare("SELECT * FROM `categories` WHERE `categoryID`=$id");
        $query->execute();
        if ($query) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $result;
    }

}
