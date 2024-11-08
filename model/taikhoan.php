<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $list_tk = pdo_query($sql);
    return $list_tk;
}