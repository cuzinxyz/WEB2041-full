<?php
session_start();
ob_start();
require '../model/connect.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    # check rỗng các thẻ input.
    $error = $db->checkNull(array('register_username', 'register_email', 'register_password', 'register_repassword'));

    # nếu ko thỏa mãn thì sẽ gán các giá trị từ input vào các biến username, email, password, repassword.
    $username = $_POST['register_username'];
    $email = $_POST['register_email'];
    $password = $_POST['register_password'];
    $repassword = $_POST['register_repassword'];

    # kiểm tra xem 2 ô input mật khẩu có nhập trùng nhau hay không?
    if ($password != $repassword) {
        # nếu nhập pass trùng nhau sẽ tạo ra 1 biến notMatch để thông báo mật khẩu ko trùng khớp
        $notMatch = 'password do not match';
    }

    if (!empty($error)) {
        # nếu ko còn lỗi rỗng nữa thì else sẽ thực thi.
    } else {
        if (isset($notMatch)) {
            # nếu password ko trùng nhau password sẽ thực thi.
        } else {
            # validate thành công sẽ add tài khoản vào cơ sở dữ liệu.
            $result = $db->add_user($username, $password, $email);
            if ($result) {
                # nếu add thành công sẽ tạo 1 SESSION để thông báo.
                $_SESSION['successRegister'] = '';
                # chuyển hướng sang trang login
                header('location: /login');
            } else {
                echo 'Loi roi nhe';
            }
        }
    }
}
require_once '../views/register.php';