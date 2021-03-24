<?php
 function insert_user($user,$pass){
    $sql = "INSERT INTO admin(user_name,pass_word) VALUES('$user','$pass')";
    return pdo_execute($sql,$user,$pass);
}
    function checkuser($user,$pass){
        $sql = "select * FROM admin where user_name='".$user."' and pass_word='".$pass."'";
        return pdo_query_one($sql);
    }
    function checkLogin($user,$pass){
        $DBH = pdo_get_connection();
        $sql = "SELECT * FROM admin where user_name = '$user' AND pass_word = '$pass'";
        $STH = $DBH->query($sql);
        $rows_affected = $STH->rowCount();
        if ($rows_affected == 0){
            return false;
        }
        return true;
    }
?>