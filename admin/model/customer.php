<?php
    require_once 'pdo.php';
    function customer_insert($name,$username,$password,$phone,$email){
        $sql = "INSERT INTO khach_hang(name,user_name,pass_word,sdt,email) VALUES('$name','$username','$password','$phone','$email')";
        pdo_execute($sql,$name,$username,$password,$phone,$email);
    }
    
    function customer_update($id, $name,$username,$password,$phone,$email){
        
        $sql = "UPDATE khach_hang SET name = '$name', user_name = '$username', pass_word ='$password',sdt='$phone',email='$email' WHERE id='$id'";
        
        pdo_execute($sql, $id, $name,$username,$password,$phone,$email);
       
    }
    
    function customer_delete($id){
        $sql = "DELETE FROM khach_hang WHERE id='$id'";
        if(is_array($id)){
            foreach ($id as $id) {
                pdo_execute($sql, $id);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    
    function customer_select_all(){
        $sql = "SELECT * FROM khach_hang ORDER BY id DESC";
        return pdo_query($sql);
    }
    
    function customer_select_by_id($id){
        $sql = "SELECT * FROM khach_hang WHERE id ='$id'";
        return pdo_query_one($sql, $id);
    }
?>