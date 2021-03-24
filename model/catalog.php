<?php
require_once 'pdo.php';

function catalog_select_all(){
    $sql = "SELECT * FROM danh_muc ORDER BY id DESC";
    return pdo_query($sql);
}

