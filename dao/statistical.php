<?php
require_once 'pdo.php';

function statistical_products()
{
    $sql = "SELECT lo.name_category, lo.name_category,"
        . " COUNT(*) amount,"
        . " MIN(hh.price) low_price,"
        . " MAX(hh.price) high_price,"
        . " AVG(hh.price) avg_price"
        . " FROM products hh "
        . " JOIN categories lo ON lo.name_category=hh.name_category "
        . " GROUP BY lo.name_category, lo.name_category";
    return pdo_query($sql);
}

function statistical_comments()
{
    $sql = "SELECT hh.id_product, hh.name_product,"
        . " COUNT(*) amount,"
        . " MIN(bl.date_comment) latest ,"
        . " MAX(bl.date_comment)  newest"
        . " FROM comments bl "
        . " JOIN products hh ON hh.id_product=bl.id_product "
        . " GROUP BY hh.id_product, hh.name_product"
        . " HAVING amount > 0";
    return pdo_query($sql);
}
