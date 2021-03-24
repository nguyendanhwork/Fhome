<?php
require_once 'pdo.php';

function comment_insert($name,$idRoom,$stars,$content,$email,$created){
    $sql = "INSERT into nhan_xet(name,id_phong,stars,nhan_xet,email,ngay_gui) VALUES ('$name','$idRoom','$stars','$content','$email','$created')";
    return pdo_execute($sql,$name,$idRoom,$stars,$content,$email,$created);
}
function comment_select_by_id($id){
    $sql = "SELECT * FROM nhan_xet where id_phong = '$id'";
    return pdo_query($sql);
}
