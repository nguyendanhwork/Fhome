<?php
require_once 'pdo.php';


function news_insert($name,$description,$image,$newscata,$content,$created){
    $sql = "INSERT INTO tintuc(name,mo_ta,hinh,id_dmtt,noi_dung,ngay_tao) VALUES('$name','$description','$image','$newscata','$content','$created')";
    pdo_execute($sql,$name,$description,$image,$newscata,$content);
}

function news_update($id, $name,$description,$image,$newscata,$content,$created){
    
    $sql = "UPDATE tintuc SET name = '$name', mo_ta='$description', hinh='$image',id_dmtt='$newscata',noi_dung='$content', ngay_tao='$created' WHERE id='$id'";
    
    pdo_execute($sql, $id, $name,$description,$image,$newscata,$content,$created);
   
}

function news_delete($id){
    $sql = "DELETE FROM tintuc WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function news_select_all(){
    $sql = "SELECT * FROM tintuc ORDER BY id DESC";
    return pdo_query($sql);
}

function news_select_by_id($id){
    $sql = "SELECT * FROM tintuc WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}

