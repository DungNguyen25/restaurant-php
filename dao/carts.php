<?php
require_once 'pdo.php';

function carts_insert_by_user_name($user_name, $name_product, $price, $quantity, $image)
{
    $sql = "INSERT INTO carts(user_name, name_product, price, quantity, image) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $user_name, $name_product, $price, $quantity, $image);
}

function carts_update($id_cart, $quantity)
{
    $sql = "UPDATE carts SET quantity=? WHERE id_cart=?";
    pdo_execute($sql,  $quantity, $id_cart);
}

function carts_delete($id_cart)
{
    $sql = "DELETE FROM carts WHERE  id_cart=?";
    if (is_array($id_cart)) {
        foreach ($id_cart as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_cart);
    }
}

function carts_select_all()
{
    $sql = "SELECT * FROM carts";
    return pdo_query($sql);
}

function carts_select_by_id($id_product)
{
    $sql = "SELECT * FROM carts WHERE id_product=?";
    return pdo_query_one($sql, $id_product);
}

function carts_select_by_name_product_user_name($name_product, $user_name)
{
    $sql = "SELECT * FROM carts WHERE name_product=? OR user_name=?";
    return pdo_query($sql, $name_product, $user_name);
}

function carts_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM carts WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function carts_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE carts SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function carts_select_top10()
{
    $sql = "SELECT * FROM carts WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

// function carts_select_dac_biet()
// {
//     $sql = "SELECT * FROM carts WHERE dac_biet=1";
//     return pdo_query($sql);
// }

function carts_select_by_user_name($user_name)
{
    $sql = "SELECT * FROM carts WHERE user_name=?";
    return pdo_query($sql, $user_name);
}

function carts_select_keyword($keyword)
{
    $sql = "SELECT * FROM carts hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}

function carts_select_page()
{
    if (!isset($_SESSION['page_no'])) {
        $_SESSION['page_no'] = 0;
    }
    if (!isset($_SESSION['page_count'])) {
        $row_count = pdo_query_value("SELECT count(*) FROM carts");
        // $_SESSION['page_count'] = ceil($row_count / 10.0);
    }
    if (exist_param("page_no")) {
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if ($_SESSION['page_no'] < 0) {
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if ($_SESSION['page_no'] >= $_SESSION['page_count']) {
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM carts ORDER BY ma_hh LIMIT " . $_SESSION['page_no'] . ", 10";
    return pdo_query($sql);
}
function count_cart_items($id_user)
{
    $sql = "SELECT * FROM `carts` WHERE id_user = ?";
    return pdo_query($sql, $id_user);
}
