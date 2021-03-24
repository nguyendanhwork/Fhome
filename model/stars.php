<?php
function stars_averaged($id){
    $listComments = comment_select_by_id($id);
    $totalStars = 0;
    $stars = "";
    $total = 0;
    if((count($listComments)) == 0){
        $stars = "<i style='color:#f1fd33;opacity:0.3' class='icon_star'></i>
        <i style='color:#f1fd33;opacity:0.3' class='icon_star'></i>
        <i style='color:#f1fd33;opacity:0.3' class='icon_star'></i>
        <i style='color:#f1fd33;opacity:0.3' class='icon_star'></i>
        <i style='color:#f1fd33;opacity:0.3' class='icon_star'></i>"; 
        
    }else{
        for($i = 0;$i < count($listComments); $i++){
            if($listComments[$i]['stars'] > 0){
                $total += 1;
                $totalStars += $listComments[$i]['stars'];
            }
        }
        $totalStars /= $total;
        for($i = 0;$i < (floor($totalStars));$i++){
        $stars .= "<i style='color: #f1fd33;margin-right: 4px;' class='icon_star'></i>";
        }
        if(isset(explode(".",(string)$totalStars)[1])){
            $stars .= "<i style='color: #f1fd33;' class='icon_star-half_alt'></i>";
        }
    }
   return $stars;
}
function quantity_comment($id){
    $listComments = comment_select_by_id($id);
    $quantity = count($listComments);

   return $quantity;
    
}
?>