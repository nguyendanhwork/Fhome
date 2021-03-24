<?php
require_once 'pdo.php';


function styleofroom_insert($name,$des,$image){
    $sql = "INSERT INTO kieu_phong(name,mo_ta,hinh) VALUES('$name','$des','$image')";
    pdo_execute($sql,$name,$des,$image);
}

function styleofroom_update($id, $name, $des,$image){
    
    $sql = "UPDATE kieu_phong SET name = '$name', mo_ta = '$des', hinh='$image' WHERE id='$id'";
    
    pdo_execute($sql, $id, $name, $des,$image);
   
}

function styleofroom_delete($id){
    $sql = "DELETE FROM kieu_phong WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function styleofroom_select_all(){
    $sql = "SELECT * FROM kieu_phong ORDER BY id DESC";
    return pdo_query($sql);
}

function styleofroom_select_by_id($id){
    $sql = "SELECT * FROM kieu_phong WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

