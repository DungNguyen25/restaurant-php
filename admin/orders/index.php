<?php
require "../../global.php";
require "../../dao/orders.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    try {
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "orders/new.php";
} else if (exist_param("btn_update")) {
    try {
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "orders/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        $id_order = $_GET['btn_delete'];
        orders_delete($id_order);
        $items = orders_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "orders/list.php";
} else if (exist_param("btn_edit")) {
    $item = orders_select_by_id($ma_hh);
    $VIEW_NAME = "orders/edit.php";
} else if (exist_param("btn_list")) {
    $items = orders_select_all();
    $VIEW_NAME = "orders/list.php";
} else {
    $VIEW_NAME = "orders/new.php";
}
require "../layout.php";
