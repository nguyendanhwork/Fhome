<?php
require_once 'pdo.php';

function scheduled_get_city($where){
    $sql = "SELECT * FROM thanh_pho where name LIKE '%$where%'";
    return pdo_query($sql);
}


?>