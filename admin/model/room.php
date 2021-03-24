<?php
require_once 'pdo.php';


function room_insert($name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency){
    $sql = "INSERT INTO phong(name,so_phong,hinh,dich_vu,giuong,so_nguoi,gia_tien,hot,mo_ta,id_danhmuc,id_loaiphong,id_kieuphong,id_thanhpho,id_chinhanh) 
    VALUES('$name','$roomNumber','$img','$service','$bed','$people','$price','$hot','$description','$catalog','$kindofRoom','$roomStyle','$city','$agency')";
    pdo_execute($sql,$name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency);
}

function room_update($id,$name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency){
    
    $sql = "UPDATE phong SET name='$name',so_phong='$roomNumber',hinh='$img',dich_vu='$service',giuong='$bed',so_nguoi='$people',gia_tien='$price',hot='$hot',mo_ta='$description',id_danhmuc='$catalog',id_loaiphong='$kindofRoom',id_kieuphong='$roomStyle',id_thanhpho='$city',id_chinhanh='$agency'
    WHERE id='$id'";
    
    pdo_execute($sql, $id, $name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency);
   
}

function room_delete($id){
    $sql = "DELETE FROM phong WHERE id='$id'";
    if(is_array($id)){
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function room_select_all(){
    $sql = "SELECT * FROM phong ORDER BY id DESC";
    return pdo_query($sql);
}

function room_select_by_id($id){
    $sql = "SELECT * FROM phong WHERE id ='$id'";
    return pdo_query_one($sql, $id);
}
function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}