<?php
require "../../global.php";
require "../../dao/users.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $VIEW_NAME = "users/new.php";
} else if (exist_param("btn_update")) {
    $VIEW_NAME = "users/edit.php";
} else if (exist_param("btn_delete")) {
    $VIEW_NAME = "users/list.php";
} else if (exist_param("btn_edit")) {
    $id = $_GET['btn_edit'];
    $items = users_select_by_id($id);
    $VIEW_NAME = "users/edit.php";
} else if (exist_param("btn_list")) {
    $items = users_select_all();
    $VIEW_NAME = "users/list.php";
} else {
    $VIEW_NAME = "users/new.php";
}
require "../layout.php";
