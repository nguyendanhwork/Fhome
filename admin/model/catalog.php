<?php
require_once 'pdo.php';


function catalog_insert($name,$describe){
    $sql = "INSERT INTO danh_muc(name,mo_ta) VALUES('$name','$describe')";
    pdo_execute($sql,$name,$describe);
}

function catalog_update($id, $name, $describe){
    
    $sql = "UPDATE danh_muc SET name = '$name', mo_ta = '$describe' WHERE id='$id'";
    
    pdo_execute($sql, $id, $name, $describe);
   
}

function catalog_delete($id){
    $sql = "DELETE FROM danh_muc WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function catalog_select_all(){
    $sql = "SELECT * FROM danh_muc ORDER BY id DESC";
    return pdo_query($sql);
}

function catalog_select_by_id($id){
    $sql = "SELECT * FROM danh_muc WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

