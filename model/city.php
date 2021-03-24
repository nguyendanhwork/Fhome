<?php
require_once 'pdo.php';
function select_city_by_id($id){
    $sql = "SELECT * FROM thanh_pho where id = '$id'";
    return pdo_query_one($sql);
}
?>