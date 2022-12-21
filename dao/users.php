<?php
require_once 'pdo.php';

function users_insert($user_name, $email, $number, $cpass, $part, $activating)
{
    $sql = "INSERT INTO users(user_name, email, number, password, part, activating) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $email, $number, $cpass, $part, $activating);
}
function users_update($id_user, $user_name, $email, $number, $address, $image)
{
    $sql = "UPDATE users SET user_name=?,email=?,number=?, address=?, image=? WHERE id_user=?";
    pdo_execute($sql, $user_name, $email, $number, $address, $image, $id_user);
}

function users_delete($ma_kh)
{
    $sql = "DELETE FROM users  WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}

function users_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}

function users_select_by_id($id)
{
    $sql = "SELECT * FROM users WHERE id_user=?";
    return pdo_query_one($sql, $id);
}
function users_select_by_user_name($user_name)
{
    $sql = "SELECT * FROM users WHERE user_name=?";
    return pdo_query_one($sql, $user_name);
}
function users_select_by_email($email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query_one($sql, $email);
}
function users_select_by_user_name_email_number($login)
{
    $sql = "SELECT * FROM users WHERE user_name =? OR email = ? OR number=?";
    return pdo_query_one($sql, $login, $login, $login);
}
function users_select_by_email_pass($email, $pass)
{
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    return pdo_query_one($sql, $email, $pass);
}
function users_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM users WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function users_select_by_role($vai_tro)
{
    $sql = "SELECT * FROM users WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}

function users_change_password($user_name, $password2)
{
    $sql = "UPDATE users SET password=? WHERE user_name=?";
    pdo_execute($sql, $password2, $user_name);
}
