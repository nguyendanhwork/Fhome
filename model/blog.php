<?php
    function showblog(){
        $sql="SELECT * FROM tintuc where id>=0";
        return pdo_query($sql);
    }
    function select_name_by_id_catalog($id){
        $sql="SELECT * FROM danhmuc_tintuc where id = '$id'";
        return pdo_query_one($sql);
    }
?>