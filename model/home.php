<?php
    function showroom(){
        $sql="SELECT * FROM phong where hot =1";
        return pdo_query($sql);
    }
    function select_address_by_id_agency($id){
        $sql="SELECT * FROM chi_nhanh where id = '$id'";
        return pdo_query_one($sql);
    }
    function city_select_all(){
        $sql="SELECT * FROM thanh_pho limit 4 ";
        return pdo_query($sql);
    }
    function banner_select_by_hot(){
        $sql="SELECT * FROM quang_cao where HOT = 1";
        return pdo_query_one($sql);
    }
            
    function banner_select_by_sort(){
        $sql="SELECT * FROM quang_cao where sort = 1 LIMIT 1";
        return pdo_query_one($sql);
    }
    function news_select_by_hot(){
        $sql="SELECT * FROM tintuc LIMIT 1";
        return pdo_query_one($sql);
    }
?> 