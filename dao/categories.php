<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_categories là tên loại
 * @throws PDOException lỗi thêm mới
 */
function categories_insert($name_category)
{
    $sql = "INSERT INTO categories(name_category) VALUES(?)";
    pdo_execute($sql, $name_category);
}
/**
 * Cập nhật tên loại
 * @param int $ma_categories là mã loại cần cập nhật
 * @param String $ten_categories là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function categories_update($ma_categories, $ten_categories)
{
    $sql = "UPDATE categories SET ten_categories=? WHERE ma_categories=?";
    pdo_execute($sql, $ten_categories, $ma_categories);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_categories là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function categories_delete($id_category)
{
    $sql = "DELETE FROM categories WHERE id_category=?";
    if (is_array($id_category)) {
        foreach ($id_category as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_category);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function categories_select_all()
{
    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_categories là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function categories_select_by_id($ma_categories)
{
    $sql = "SELECT * FROM categories WHERE ma_categories=?";
    return pdo_query_one($sql, $ma_categories);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_categories là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function categories_exist($ma_categories)
{
    $sql = "SELECT count(*) FROM categories WHERE ma_categories=?";
    return pdo_query_value($sql, $ma_categories) > 0;
}
