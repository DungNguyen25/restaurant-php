<?php
require_once "../../global.php";
require_once "../../dao/statistical.php";
//--------------------------------//
if (exist_param("chart")) {
    $VIEW_NAME = "statistical/chart.php";
} else {
    $VIEW_NAME = "statistical/list.php";
}
$items = statistical_products();
require "../layout.php";
