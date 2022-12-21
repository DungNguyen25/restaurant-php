<?php
require '../../global.php';
require '../../dao/users.php';
if (exist_param("btn_change")) {
    $password2 = $_POST['password2'];
    $password3 = $_POST['password3'];
    if ($password2 != $password3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    } else {
        $user_name = $_SESSION['user']['user_name'];
        $user = users_select_by_user_name($user_name);
        if ($user) {
            $password = sha1($_POST['password']);
            $password = filter_var($password, FILTER_SANITIZE_STRING);
            if ($user['password'] == $password) {
                try {
                    $password2 = sha1($_POST['password2']);
                    $password2 = filter_var($password2, FILTER_SANITIZE_STRING);
                    users_change_password($user_name, $password2);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                }
            } else {
                $MESSAGE = "Sai mật khẩu!";
            }
        } else {
            $MESSAGE = "Sai mã đăng nhập!";
        }
    }
}
$VIEW_NAME = "accounts/change-pass-form.php";
require '../layout.php';
