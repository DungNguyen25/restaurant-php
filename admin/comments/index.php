<?php
require "../../global.php";
require "../../dao/comments.php";
require "../../dao/statistical.php";
//--------------------------------//
extract($_REQUEST);
if (exist_param("id_product")) {

    $id_product = $_GET['id_product'];
    $items = comments_select_by_products($id_product);
    if (count($items) == 0) {
        $items = statistical_comments();
        $VIEW_NAME = "comments/list.php";
    } else {
        $VIEW_NAME = "comments/detail.php";
    }
} else if (exist_param("btn_delete")) {
    try {
        $id_comment = $_GET['btn_delete'];
        comments_delete($id_comment);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $id_product = $_GET['id_product'];
    $items = comments_select_by_products($id_product);
    if (count($items) == 0) {
        $items = statistical_comments();
        $VIEW_NAME = "comments/list.php";
    } else {
        $VIEW_NAME = "comments/detail.php";
    }
} else {
    $items = statistical_comments();
    $VIEW_NAME = "comments/list.php";
}
require "../layout.php";
