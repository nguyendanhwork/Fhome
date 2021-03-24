<?php
require_once 'pdo.php';


function city_insert($name,$image){
    $sql = "INSERT INTO thanh_pho(name,hinh) VALUES('$name','$image')";
    pdo_execute($sql,$name,$image);
}

function city_update($id, $name,$image){
    
    $sql = "UPDATE thanh_pho SET name = '$name', hinh = '$image' WHERE id='$id'";
    
    pdo_execute($sql, $id, $name,$image);
   
}

function city_delete($id){
    $sql = "DELETE FROM thanh_pho WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function city_select_all(){
    $sql = "SELECT * FROM thanh_pho ORDER BY id DESC";
    return pdo_query($sql);
}

function city_select_by_id($id){
    $sql = "SELECT * FROM thanh_pho WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

