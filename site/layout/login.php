<?php
if (isset($_SESSION['email'])) {
    require 'dang-nhap-info.php';
} else {
    $email = get_cookie("email");
};
