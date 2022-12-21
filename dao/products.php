<?php
require_once 'pdo.php';



function products_insert($name_product, $price, $name_category, $image)
{
    $sql = "INSERT INTO products(name_product, price, name_category, image) VALUES (?,?,?,?)";
    pdo_execute($sql, $name_product, $price, $name_category, $image);
}

function products_update($name_product, $price, $name_category, $image)
{
    $sql = "UPDATE products SET name_product=?,price=?,name_category=?,image=? WHERE name_product=?";
    pdo_execute($sql, $name_product, $price, $name_category, $image, $name_product);
}

function products_delete($id_product)
{
    $sql = "DELETE FROM products WHERE  id_product=?";
    if (is_array($id_product)) {
        foreach ($id_product as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_product);
    }
}

function products_select_all()
{
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}

function products_select_by_id($id_product)
{
    $sql = "SELECT * FROM products WHERE id_product=?";
    return pdo_query_one($sql, $id_product);
}

function products_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM products WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function products_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE products SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function products_select_top10()
{
    $sql = "SELECT * FROM products WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

// function products_select_dac_biet()
// {
//     $sql = "SELECT * FROM products WHERE dac_biet=1";
//     return pdo_query($sql);
// }

function products_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM products WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function products_select_by_name_category($name_category)
{
    $sql = "SELECT * FROM products WHERE name_category=?";
    return pdo_query($sql, $name_category);
}

function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}

function products_select_page()
{
    if (!isset($_SESSION['page_no'])) {
        $_SESSION['page_no'] = 0;
    }
    if (!isset($_SESSION['page_count'])) {
        $row_count = pdo_query_value("SELECT count(*) FROM products");
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
    $sql = "SELECT * FROM products ORDER BY id_product LIMIT " . $_SESSION['page_no'] . ", 3";
    return pdo_query($sql);
}
