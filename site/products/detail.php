<?php
require '../../global.php';
require '../../dao/products.php';
//-------------------------------//
extract($_REQUEST);
// Truy vấn mặt hàng theo mã
$id_product = $_GET['id_product'];
$products = products_select_by_id($id_product);
// Tăng số l`ượt xem lên 1
$VIEW_NAME = "products/detail-ui.php";
require '../layout.php';
