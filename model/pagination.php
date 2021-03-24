<?php
 function loadRoomsandPagination(){
    global $quantity;
    if(isset($_GET['act'])){
        if(isset($_POST['booking_submit'])){
            $listRooms = room_select_all();
            $where = $_POST['booking_where'];
            $people = $_POST['booking_people'];
            $listCitiesbySearch = scheduled_get_city(($where));
            if($where != ""){
                if(count($listCitiesbySearch)>0){
                    foreach($listCitiesbySearch as $lc){
                        $listRooms2 = []; 
                        foreach($listRooms as $lr){
                            if($where != "" && $people != 0){
                                if($lc['id'] == $lr['id_thanhpho'] && $lr['so_nguoi'] == $people){
                                    array_push($listRooms2,$lr);
                                }
                            }if($people == 0){
                                if($lc['id'] == $lr['id_thanhpho']){
                                    array_push($listRooms2,$lr);
                                }
                            }
                        }       
                    }
                }else{
                    $listRooms2 = [];
                }   
            }else{       
                foreach($listCitiesbySearch as $lc){
                    $listRooms2 = []; 
                    foreach($listRooms as $lr){
                        if($lr['so_nguoi'] == $people){
                            array_push($listRooms2,$lr);
                        }
                    }}
            }
            if(count($listRooms2)>0){
                $listRooms = $listRooms2;
            }else{
                $listRooms = $listRooms2;
            }
           
            $_SESSION['listRooms2'] = $listRooms;
        }
        if( isset($_GET['page']) && ($_GET['page']>0) ){
            $listRoomsSp = [];
            $page = $_GET['page'];
           for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
               if(isset($_SESSION['listRooms2'][$i])){
                array_push($listRoomsSp,$_SESSION['listRooms2'][$i]);
               }
           }
           $listRooms = $listRoomsSp;
        }
        else {
            $page = 1;
        }
        
    }else{ 
        if($_GET['ctrl'] == "styleofroom"){
            $id = $_GET['id'];
            $_SESSION['id'] = $id;
            $listRooms = room_select_by_id_styleofroom($id);
        }else if ($_GET['ctrl'] == "city"){
            $id = $_GET['id'];
            $_SESSION['id'] = $id;
            $listRooms = room_select_by_id_city($id);
        }
        else if ($_GET['ctrl'] == "catalog"){
            $id = $_GET['id'];
            $_SESSION['id'] = $id;
            $listRooms = room_select_by_id_catalog($id);
        } else {
            $id = $_SESSION['id'];
            $listRooms = room_select_all_by_hot();
        }
        // if(isset($_GET['id'])){
        //     $id = $_GET['id'];
        //     $_SESSION['id'] = $id;
        //     $listRooms = room_select_by_id($id);
        // }else{
        //     $id = $_SESSION['id'];
        //     $listRooms = room_select_all_by_hot();
        // }
        $_SESSION['listRooms2'] = $listRooms;
             if( isset($_GET['page']) && ($_GET['page']>0) ){
                $listRoomsSp = [];
                $page = $_GET['page'];
               for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
                   if(isset($_SESSION['listRooms2'][$i])){
                    array_push($listRoomsSp,$_SESSION['listRooms2'][$i]);
                   }
               }
               $listRooms = $listRoomsSp;
            }
            else {
                $page = 1;
            }
    }
    $total = count($_SESSION['listRooms2']);
    $pagination = pagination($page,$total);
    $_SESSION['getPagination'] = $pagination;
    return $listRooms;
};
    function pagination($page,$total){
        global $quantity;   
        $pagesNumber = ceil($total/$quantity);
        $pagination = "";  
        for ($i = 0; $i  < $pagesNumber; $i++) { 
            if($page == ($i+1)){
                $class =' class="active" ';
            }else{
                $class =' class="" ';
            }
            if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
                switch ($ctrl) {
                    case 'scheduled':
                        $link = "index.php?ctrl=scheduled&act=search&page=".($i+1);
                        break;
                    case 'styleofroom':
                            $link = "index.php?ctrl=styleofroom&act=search&page=".($i+1);
                        break;
                    case 'city':
                            $link = "index.php?ctrl=city&act=search&page=".($i+1);
                        break;
                    case 'catalog':
                            $link = "index.php?ctrl=catalog&act=search&page=".($i+1);
                        break;
                        case 'blog':
                            $link = "index.php?ctrl=blog&page=".($i+1);
                        break;
                    default:
                        $link = "index.php?ctrl=scheduled&act=search&page=".($i+1);
                        break;
                }
            }else{
                $link = "index.php?page=".($i+1);
            }
            $disabled = "";
            if(isset($_GET['page'])){
                if($_GET['page'] == $i+1){
                   $disabled = "style='pointer-events: none; font-weight:bold;background-color: #d3d3d382;'";
                }
            }
            if($pagesNumber == 1){
                $pagination = "";
            }else{
                $pagination.='<a href="'.$link.'" '.$class.' '.$disabled.'>
                '.($i+1).' 
            </a>';
            }

        }
        
        return $pagination;
       
    };
   
?>