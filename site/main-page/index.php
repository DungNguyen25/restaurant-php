<?php
require "../../global.php";
extract($_REQUEST);
if (exist_param("about-us")) {
    $VIEW_NAME = "main-page/about-us.php";
} else if (exist_param("agent")) {
    $VIEW_NAME = "main-page/agent.php";
} else if (exist_param("news")) {
    $VIEW_NAME = "main-page/news.php";
} else if (exist_param("questions")) {
    $VIEW_NAME = "main-page/questions.php";
} else {
    $VIEW_NAME = "main-page/home.php";
}
require_once '../../dao/products.php';
require "../layout.php";
