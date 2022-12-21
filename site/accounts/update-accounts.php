<?php
require '../../global.php';
require '../../dao/users.php';
if (exist_param("btn_update")) {
    $id_user = $_POST['id_user'];
    $id_user = filter_var($id_user, FILTER_SANITIZE_STRING);
    $user_name = $_POST['user_name'];
    $user_name = filter_var($user_name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $address = $_POST['address'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);
    $file_name = save_file("image", "$IMAGE_DIR/users/");
    $image = $file_name ? $file_name : $image;
    try {
        users_update($id_user, $user_name, $email, $number, $address, $image);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = users_select_by_id($id_user);
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "accounts/update-accounts-form.php";
require '../layout.php';
