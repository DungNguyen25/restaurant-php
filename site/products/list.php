<?php
require "../../global.php";
require '../../dao/products.php';
//-------------------------------//
extract($_REQUEST);
if (exist_param("name_category")) {
    $name_category = $_GET['name_category'];
    $items = products_select_by_name_category($name_category);
} else if (exist_param("keyword")) {
} else if (exist_param("btn_list")) {
    $items = products_select_page();
} else {
    $items = products_select_all();
}
$VIEW_NAME = "products/list-ui.php";
require '../layout.php';
