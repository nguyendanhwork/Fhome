<?php
    require_once 'pdo.php';

    function br_banner(){
        $sql = "SELECT * FROM quang_cao where hot = 1";
        return pdo_query($sql);
    };
    function voucher_banner(){
        $sql = "SELECT * FROM quang_cao where sort = 1";
        return pdo_query($sql);
    };
    function banner_insert($name,$des,$hot,$sort,$url,$img){
        $sql = "INSERT INTO quang_cao(name,mo_ta,hot,sort,url,hinh) VALUES('$name','$des','$hot','$sort','$url','$img')";
        pdo_execute($sql,$name,$hot,$sort,$url,$img);
    };
    function banner_update($id,$name,$des,$hot,$sort,$url,$img){
    
        $sql = "UPDATE quang_cao SET name = '$name', mo_ta='$des', hot = '$hot', sort = '$sort', url = '$url', hinh = '$img' WHERE id='$id'";
        
        pdo_execute($sql, $id, $name,$des, $hot, $sort, $url, $img);
       
    }
    
    function banner_delete($id){
        $sql = "DELETE FROM quang_cao WHERE id='$id'";
        if(is_array($id)){
            foreach ($id as $id) {
                pdo_execute($sql, $id);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    
    function banner_select_all(){
        $sql = "SELECT * FROM quang_cao ORDER BY id DESC";
        return pdo_query($sql);
    }
    
    function banner_select_by_id($id){
        $sql = "SELECT * FROM quang_cao WHERE id ='$id'";
        return pdo_query_one($sql, $id);
    }
?>