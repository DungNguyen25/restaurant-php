<?php
require "../../global.php";
require "../../dao/carts.php";
require "../../dao/users.php";
extract($_REQUEST);
$user_name = $_SESSION['user']['user_name'];
if (exist_param("btn_insert")) {
    // $check_cart_numbers = 0;
    // $check_cart_numbers = count(carts_select_by_name_product_user_name($name_product, $user_name));
    // if ($check_cart_numbers > 0) {
    //     $MESSAGE = "Thêm mới loose";
    //     if (isset($_SESSION['request_uri'])) {
    //         header("location: " . $_SESSION['request_uri']);
    //     }
    // } else {
    $quantity = "1";
    carts_insert_by_user_name($user_name, $name_product, $price, $quantity, $image);
    $MESSAGE = "Thêm mới thành công!";
    $VIEW_NAME = "carts/carts-ui.php";
    // }
} else if (exist_param("btn_update")) {
    try {
        carts_update($id_cart, $quantity);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "carts/carts-ui.php";
} else if (exist_param("btn_delete")) {
    try {
        carts_delete($id_cart);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = carts_select_by_user_name($user_name);
    $VIEW_NAME = "carts/carts-ui.php";
} else if (exist_param("btn_edit")) {
    $id = $_GET['btn_edit'];
    $items = carts_select_by_id($id);
    $VIEW_NAME = "carts/edit.php";
} else if (exist_param("btn_list")) {
    $items = carts_select_all();
    $categories = categories_select_all();
    $VIEW_NAME = "carts/list.php";
} else if (exist_param("btn_select_user")) {
    $user_name = $_SESSION['user']['user_name'];
    $items = carts_select_by_user_name($user_name);
    $VIEW_NAME = "carts/carts-ui.php";
} else if (exist_param("btn_checkout")) {
    $user_name = $_SESSION['user']['user_name'];
    $users = users_select_by_user_name($user_name);
    $items = carts_select_by_user_name($user_name);
    $VIEW_NAME = "carts/checkout.php";
} else {
    $VIEW_NAME = "carts/carts-ui.php";
}
$items = carts_select_by_user_name($user_name);
require '../layout.php';
