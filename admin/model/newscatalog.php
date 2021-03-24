<?php
require_once 'pdo.php';


function newscatalog_insert($name){
    $sql = "INSERT INTO danhmuc_tintuc(name) VALUES('$name')";
    pdo_execute($sql,$name);
}

function newscatalog_update($id, $name){
    
    $sql = "UPDATE danhmuc_tintuc SET name = '$name' WHERE id='$id'";
    
    pdo_execute($sql, $id, $name);
   
}

function newscatalog_delete($id){
    $sql = "DELETE FROM danhmuc_tintuc WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function newscatalog_select_all(){
    $sql = "SELECT * FROM danhmuc_tintuc ORDER BY id DESC";
    return pdo_query($sql);
}

function newscatalog_select_by_id($id){
    $sql = "SELECT * FROM danhmuc_tintuc WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

