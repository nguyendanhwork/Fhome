<?php
    require_once 'pdo.php';
    function journey_select_by_id($id){
        $sql = "SELECT * FROM tintuc where id = '$id'";
        return pdo_query_one($sql);
    }
    function journey_get_name_catalog($id){
        $sql = "SELECT * FROM danhmuc_tintuc where id = '$id'";
        return pdo_query_one($sql);
    }
?>