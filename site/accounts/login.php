<?php
require '../../global.php';
require '../../dao/users.php';
extract($_REQUEST);
if (exist_param("btn_login")) {
    $user = users_select_by_user_name_email_number($login);
    if ($user) {
        $pass = sha1($_POST['pass']);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        if ($user['password'] == $pass) {
            $MESSAGE = "Đăng nhập thành công!";
            $_SESSION["user"] = $user;
            if (exist_param("ghi_nho")) {
                header("location: " . $ROOT_URL);
                add_cookie("email", $email, 30);
                add_cookie("user_name)", $user_name, 30);
                add_cookie("number", $number, 30);
                add_cookie("pass", $pass, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            // Quay trở lại trang được yêu cầu
            if (isset($_SESSION['request_uri'])) {
                header("location: " . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai mã đăng nhập!";
    }
} else {
    if (exist_param("btn_logoff")) {
        session_unset();
    }
    $email = get_cookie("email");
    $user_name = get_cookie("user_name");
    $number = get_cookie("number");
    $pass = get_cookie("pass");
}
$VIEW_NAME = "accounts/login-form.php";
require '../layout.php';
