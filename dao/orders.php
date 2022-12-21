<?php
require_once 'pdo.php';

function orders_insert($user_name, $number, $email, $method, $address, $total_products, $total_price)
{
    $sql = "INSERT INTO orders(user_name, number, email, method, address, total_products, total_price) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $number, $email, $method, $address, $total_products, $total_price);
}


function orders_insert_by_user_name($user_name, $number, $email, $method, $address, $total_products, $total_price)
{
    $sql = "INSERT INTO orders(user_name, number, email, method, address, total_products, total_price) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $number, $email, $method, $address, $total_products, $total_price);
}

function orders_update($id_order, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "UPDATE orders SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $id_order);
}

function orders_delete($id_order)
{
    $sql = "DELETE FROM orders WHERE  id_order=?";
    if (is_array($id_order)) {
        foreach ($id_order as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_order);
    }
}

function orders_select_all()
{
    $sql = "SELECT * FROM orders";
    return pdo_query($sql);
}

function orders_select_by_id($id_order)
{
    $sql = "SELECT * FROM orders WHERE ma_hh=?";
    return pdo_query_one($sql, $id_order);
}
function orders_select_by_email($email)
{
    $sql = "SELECT * FROM cart WHERE email=?";
    pdo_execute($sql, $email);
}

function orders_select_by_user_name($user_name)
{
    $sql = "SELECT * FROM cart WHERE email=?";
    pdo_execute($sql, $user_name);
}

function orders_exist($id_order)
{
    $sql = "SELECT count(*) FROM orders WHERE ma_hh=?";
    return pdo_query_value($sql, $id_order) > 0;
}


function orders_select_top10()
{
    $sql = "SELECT * FROM orders WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

// function orders_select_dac_biet()
// {
//     $sql = "SELECT * FROM orders WHERE dac_biet=1";
//     return pdo_query($sql);
// }

function orders_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM orders WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function orders_select_keyword($keyword)
{
    $sql = "SELECT * FROM orders hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}

function orders_select_page()
{
    if (!isset($_SESSION['page_no'])) {
        $_SESSION['page_no'] = 0;
    }
    if (!isset($_SESSION['page_count'])) {
        $row_count = pdo_query_value("SELECT count(*) FROM orders");
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
    $sql = "SELECT * FROM orders ORDER BY ma_hh LIMIT " . $_SESSION['page_no'] . ", 10";
    return pdo_query($sql);
}
