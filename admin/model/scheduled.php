<?php
require_once 'pdo.php';


function scheduled_insert($name,$phone,$email,$check_in,$check_out,$id_room){
    $sql = "INSERT INTO dat_phong(name,sdt,email,check_in,check_out,id_phong) VALUES('$name','$phone','$email','$check_in','$check_out','$id_room')";
    pdo_execute($sql,$name,$phone,$email,$check_in,$check_out,$id_room);
}

function scheduled_update($id,$name,$phone,$email,$check_in,$check_out,$id_room){
    
    $sql = "UPDATE dat_phong SET name = '$name', sdt = '$phone',email='$email',check_in='$check_in',check_out='$check_out',id_phong='$id_room' WHERE id='$id'";
    
    pdo_execute($sql,$name,$phone,$email,$check_in,$check_out,$id_room);
   
}

function scheduled_delete($id){
    $sql = "DELETE FROM dat_phong WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function scheduled_select_all(){
    $sql = "SELECT * FROM dat_phong ORDER BY id DESC";
    return pdo_query($sql);
}

function scheduled_select_by_id($id){
    $sql = "SELECT * FROM dat_phong WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

