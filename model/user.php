<?php
    function check_user($username){
        $sql = "select * FROM khach_hang where user_name='$username'";
        return pdo_query_one($sql);
    }
    function check_login($username,$password){
        $DBH = pdo_get_connection();
        $sql = "SELECT * FROM khach_hang where user_name = '$username' AND pass_word = '$password'";
        $STH = $DBH->query($sql);
        $rows_affected = $STH->rowCount();
        if ($rows_affected == 0){
            return false;
        }
        return true;
    }
    function user_insert($name,$username,$password,$phonenumber,$email){
            $sql = "INSERT INTO khach_hang(name,user_name,pass_word,sdt,email) VALUES('$name','$username','$password','$phonenumber','$email')";
            pdo_execute($sql,$name,$username,$password,$phonenumber,$email);
    }
    function user_select_all(){
            $sql = "SELECT * FROM khach_hang ORDER BY id DESC";
            return pdo_query($sql);
      
    }
      function user_update($name,$username,$password,$phone,$email){
        
        $sql = "UPDATE khach_hang SET name = '$name', pass_word ='$password',sdt='$phone',email='$email' WHERE user_name='$username'";
        
        pdo_execute($sql, $name,$username,$password,$phone,$email);
       
    }
    
?>