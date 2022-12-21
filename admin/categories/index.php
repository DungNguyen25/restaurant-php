<?php
require "../../global.php";
require "../../dao/categories.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    try {
        categories_insert($name_category);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "categories/new.php";
} else if (exist_param("btn_update")) {
    try {
        categories_update($ma_loai, $category);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "categories/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        $id_category = $_GET['btn_delete'];
        categories_delete($id_category);
        $items = categories_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "categories/list.php";
} else if (exist_param("btn_edit")) {
    $item = categories_select_by_id($ma_loai);
    $VIEW_NAME = "categories/edit.php";
} else if (exist_param("btn_list")) {
    $items = categories_select_all();
    $VIEW_NAME = "categories/list.php";
} else {
    $VIEW_NAME = "categories/new.php";
}
require "../layout.php";
