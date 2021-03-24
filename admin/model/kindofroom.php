<?php
    require_once 'pdo.php';
    
    function kindofroom_insert($name,$price,$des){
        $sql = "INSERT INTO loai_phong(name,gia_tien,mo_ta) VALUES('$name','$price','$des')";
        pdo_execute($sql,$name,$price,$des);
    }
    
    function kindofroom_update($id,$name,$price,$des){
        
        $sql = "UPDATE loai_phong SET name = '$name',gia_tien = '$price', mo_ta = '$des' WHERE id='$id'";
        
        pdo_execute($sql, $id, $name,$price, $des);
       
    }
    
    function kindofroom_delete($id){
        $sql = "DELETE FROM loai_phong WHERE id='$id'";
        if(is_array($id)){
            foreach ($id as $id) {
                pdo_execute($sql, $id);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    
    function kindofroom_select_all(){
        $sql = "SELECT * FROM loai_phong ORDER BY id DESC";
        return pdo_query($sql);
    }
    
    function kindofroom_select_by_id($id){
        $sql = "SELECT * FROM loai_phong WHERE id ='$id'";
        return pdo_query_one($sql, $id);
    }
?>