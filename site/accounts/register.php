<?php
require '../../global.php';
require '../../dao/users.php';
extract($_REQUEST);
if (exist_param("btn_register")) {
    if ($pass != $cpass) {
        $MESSAGE = 'confirm password not matched!';
    } else {
        $pass = sha1($_POST['pass']);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $cpass = sha1($_POST['cpass']);
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
        try {
            users_insert($user_name, $email, $number, $cpass, $part, $activating);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
    // if (!khach_hang_exist($ma_kh)) {
    //     $MESSAGE = "Mã này đã được sử dụng!";
    // } else {
    //     $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
    //     $hinh = $file_name ? $file_name : "user.png";
    //     try {
    //         khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
    //         $MESSAGE = "Đăng ký thành viên thành công!";
    //     } catch (Exception $exc) {
    //         $MESSAGE = "Đăng ký thành viên thất bại!";
    //     }
    // }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $part, $activating, $mat_khau2;
}
$VIEW_NAME = "accounts/register-form.php";
require '../layout.php';
