<?php
require "../../global.php";
require "../../dao/products.php";
require "../../dao/categories.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    try {
        $file_name = save_file("image", "$IMAGE_DIR/products/");
        $image = $file_name ? $file_name : "product.png";
        products_insert($name_product, $price, $name_category, $image);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "products/list.php";
} else if (exist_param("btn_update")) {
    try {
        $file_name = save_file("image", "$IMAGE_DIR/products/");
        $image = $file_name ? $file_name : "product.png";
        products_update($name_product, $price, $name_category, $image);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "products/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        $id_product = $_GET['btn_delete'];
        products_delete($id_product);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = products_select_all();
    $VIEW_NAME = "products/list.php";
} else if (exist_param("btn_edit")) {
    $id_product = $_GET['btn_edit'];
    $items = products_select_by_id($id_product);
    $categories = categories_select_all();
    $VIEW_NAME = "products/edit.php";
} else if (exist_param("btn_list")) {
    $items = products_select_all();
    $categories = categories_select_all();
    $VIEW_NAME = "products/list.php";
} else {
    $items =  categories_select_all();
    $VIEW_NAME = "products/new.php";
}
require "../layout.php";
