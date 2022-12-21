<?php
require_once 'pdo.php';

function comments_insert($user_name, $id_product, $content, $date_comment, $image)
{
    $sql = "INSERT INTO comments(user_name, id_product, content, date_comment, image) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $user_name, $id_product, $content, $date_comment, $image);
}

function comments_update($ma_bl, $id_user, $id, $content, $date_comment)
{
    $sql = "UPDATE comments SET user_id=?,id=?,content=?,date_comment=? WHERE ma_bl=?";
    pdo_execute($sql, $id_user, $id, $content, $date_comment, $ma_bl);
}

function comments_delete($id_comment)
{
    $sql = "DELETE FROM comments WHERE id_comment=?";
    if (is_array($id_comment)) {
        foreach ($id_comment as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_comment);
    }
}

function comments_select_all()
{
    $sql = "SELECT * FROM comments bl ORDER BY date_comment DESC";
    return pdo_query($sql);
}

function comments_select_by_id($ma_bl)
{
    $sql = "SELECT * FROM comments WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}

function comments_exist($ma_bl)
{
    $sql = "SELECT count(*) FROM comments WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
//-------------------------------//
function comments_select_by_products($id_product)
{
    $sql = "SELECT b.*, h.name_product FROM comments b JOIN products h ON h.id_product=b.id_product WHERE b.id_product=? ORDER BY date_comment DESC";
    return pdo_query($sql, $id_product);
}
