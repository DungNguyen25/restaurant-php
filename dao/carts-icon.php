<?php
require_once 'pdo.php';

function carts_icon_select_by_user_name($user_name)
{
    $sql = "SELECT * FROM carts WHERE user_name=?";
    return pdo_query($sql, $user_name);
}
