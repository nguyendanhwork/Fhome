<?php
require_once 'pdo.php';



function comment_update($id, $name,$id_customer,$id_room,$stars,$nhan_xet,$email){
    
    $sql = "UPDATE nhan_xet SET name = '$name',id_khachhang='$id_customer',id_phong='$id_room',stars='$stars',nhan_xet='$nhan_xet',email='$email' WHERE id='$id'";
    
    
    pdo_execute($sql, $id, $name,$id_customer,$id_room,$stars,$nhan_xet,$email);
   
}

function comment_delete($id){
    $sql = "DELETE FROM nhan_xet WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
function comment_select_all(){
    $sql = "SELECT * FROM nhan_xet ORDER BY id DESC";
    return pdo_query($sql);
}

function comment_select_by_id($id){
    $sql = "SELECT * FROM nhan_xet WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}



