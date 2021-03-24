<?php
require_once 'pdo.php';

function styleofroom_select_all(){
    $sql = "SELECT * FROM kieu_phong ORDER BY id ASC";
    return pdo_query($sql);
}

function styleofroom_select_by_id($id){
    $sql = "SELECT * FROM kieu_phong WHERE id ='$id'";
    return pdo_query($sql, $id);
}

