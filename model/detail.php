<?php
require_once 'pdo.php';
function detail_select_room_by_id($id){
    $sql = "SELECT * FROM phong where id = '$id'";
    return pdo_query_one($sql);
}
function detail_select_city_by_id($id){
    $sql = "SELECT * FROM thanh_pho where id = '$id'";
    return pdo_query_one($sql);
}
function detail_select_kindofroom_by_id($id){
    $sql = "SELECT * FROM loai_phong where id = '$id'";
    return pdo_query_one($sql);
}
function booking_room($room,$name,$phone,$email,$checkIn,$checkOut){
    $sql = "INSERT INTO dat_phong(id_phong,name,sdt,email,check_in,check_out) VALUES('$room','$name','$phone','$email','$checkIn','$checkOut')";
    pdo_execute($sql,$room,$name,$phone,$email,$checkIn,$checkOut);
}
function room_booking_select_all(){
    $sql = "SELECT * FROM dat_phong";
    return pdo_query($sql);
}
?>