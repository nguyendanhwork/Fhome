<?php
require_once 'pdo.php';


function agency_insert($name, $address,$phone,$email){
    $sql = "INSERT INTO chi_nhanh(name,dia_chi,sdt,email ) VALUES('$name','$address','$phone','$email')";
    pdo_execute($sql,$name,$dia_chi,$sdt,$email);
}

function agency_update($id, $name , $address,$phone,$email){
    
    $sql = "UPDATE chi_nhanh SET name = '$name', dia_chi='$address', sdt='$phone', email='$email' WHERE id='$id'";
    
    pdo_execute($sql,$id,$name,$address,$phone,$email);
   
}

function agency_delete($id){
    $sql = "DELETE FROM chi_nhanh WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function agency_select_all(){
    $sql = "SELECT * FROM chi_nhanh ORDER BY id DESC";
    return pdo_query($sql);
}

function agency_select_by_id($id){
    $sql = "SELECT * FROM chi_nhanh WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

