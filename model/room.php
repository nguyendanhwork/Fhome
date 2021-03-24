<?php
require_once 'pdo.php';
function room_select_all_by_hot(){
    $sql = "SELECT * FROM phong where hot=1 ORDER BY id DESC";
    return pdo_query($sql);
}
function room_select_all(){
    $sql = "SELECT * FROM phong ORDER BY id DESC";
    return pdo_query($sql);
}
function room_select_by_id_styleofroom($id){
    $sql = "SELECT * FROM phong where id_kieuphong = '$id' ORDER BY id DESC";
    return pdo_query($sql);
}
function room_select_by_id_city($id){
    $sql = "SELECT * FROM phong where id_thanhpho = '$id' ORDER BY id DESC";
    return pdo_query($sql);
}
function room_select_by_id_catalog($id){
    $sql = "SELECT * FROM phong where id_danhmuc = '$id' ORDER BY id DESC";
    return pdo_query($sql);
}
?>