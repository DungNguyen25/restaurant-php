<?php
require "../../global.php";
require "../../dao/orders.php";
require "../../dao/users.php";
extract($_REQUEST);
$user_name = $_SESSION['user']['user_name'];
$number = $_SESSION['user']['number'];
$email = $_SESSION['user']['email'];
$address = $_SESSION['user']['address'];
if (exist_param("btn_insert")) {
    orders_insert_by_user_name($user_name, $number, $email, $method, $address, $total_products, $total_price);
    $MESSAGE = "Thêm mới thành công!";
    $VIEW_NAME = "../../main-page/index.php";
} else if (exist_param("btn_update")) {
    try {
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "orders/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        orders_delete($id_cart);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = orders_select_by_user_name($user_name);
    $VIEW_NAME = "orders/orders-ui.php";
} else if (exist_param("btn_edit")) {
    $id = $_GET['btn_edit'];
    $items = orders_select_by_id($id);
    $VIEW_NAME = "orders/edit.php";
} else if (exist_param("btn_list")) {
    $items = orders_select_all();
    $categories = categories_select_all();
    $VIEW_NAME = "orders/list.php";
} else if (exist_param("btn_select_user")) {
    $user_name = $_SESSION['user']['user_name'];
    $items = orders_select_by_user_name($user_name);
    $VIEW_NAME = "orders/orders-ui.php";
} else if (exist_param("btn_checkout")) {
    $user_name = $_SESSION['user']['user_name'];
    $users = users_select_by_user_name($user_name);
    $items = orders_select_by_user_name($user_name);
    $VIEW_NAME = "orders/checkout.php";
} else {
    $VIEW_NAME = "orders/orders-ui.php";
}
require '../layout.php';
