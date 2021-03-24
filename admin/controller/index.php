<?php
    session_start();
    include_once '../model/pdo.php';
    include_once '../model/connect.php';
    include_once '../model/admin.php';
    include_once '../model/catalog.php';
    include_once '../model/room.php';
    include_once '../model/kindofroom.php';
    include_once '../model/styleofroom.php';
    include_once '../model/city.php';
    include_once '../model/agency.php';
    include_once '../model/scheduled.php';
    include_once '../model/comment.php';
    include_once '../model/banner.php';
    include_once '../model/newscatalog.php';
    include_once '../model/news.php';
    include_once '../model/customer.php';
    include_once '../model/global.php';
    include_once '../view/header.php';
   
    $action = 'home';
    if(isset($_SESSION['ad'])){
        include '../view/menu.php';
        if(isset($_GET['ctrl'])){
            $action=$_GET['ctrl'];
        };
    }else if(isset($_GET['ctrl']) && $_GET['ctrl'] == 'register'){
        $action ='register';
    }else{
       $action ='login';
    }
    
    switch ($action){
        case 'home':
            include '../view/home.php';
        break;
        case 'login':
            if(isset($_POST['btn_submit'])){
                $user=$_POST['username'];
                $pass=$_POST['password'];
                if(checkLogin($user,$pass)){
                    $_SESSION['ad'] = $user;
                }
                echo "<script>window.top.location='index.php'</script>";
            }else{
                include '../view/login.php';
            }
        break;
        case 'register':
            if(isset($_POST['btn_submit'])){
                $user=$_POST['username'];
                $pass=$_POST['password'];
                $pass2=$_POST['password2'];
                if($pass == $pass2){
                    insert_user($user,$pass);
                    if(checkLogin($user,$pass)){
                        $_SESSION['ad'] = $user;
                }
            }else{
                echo "<script>alert('Nhập lại mật khẩu không đúng!')</script>";
                echo "<script>window.top.location='index.php?ctrl=register'</script>";
            }
            echo "<script>window.top.location='index.php'</script>";
            }else{
                include '../view/register.php';
            }
           
        break;
        case 'logout':
            unset($_SESSION['ad']);
            echo "<script>window.top.location='index.php'</script>";
            break;
        case 'catalog':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['cata_name'];
                    $describe=$_POST['cata_des'];
              
                        if(empty($_POST['cata_id'])){
                            catalog_insert($name,$describe);
                        }else{
                            $id=$_POST['cata_id'];
                            $name=$_POST['cata_name'];
                            $mota=$_POST['cata_des'];
                            catalog_update($id,$name,$describe);
                     
                    }
                    echo "<script>window.top.location='index.php?ctrl=catalog'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                catalog_delete($id);
                echo "<script>window.top.location='index.php?ctrl=catalog'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $catalog=catalog_select_by_id($id);
            }    
            }
            $listCatalogs = catalog_select_all();
            include '../view/catalog.php';
        break;
        // Ngô Trí làm KindOfRoom of StyleOfRoom
        case 'kindofroom':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['kindof_name'];
                    $price=$_POST['kindof_price'];
                    $des=$_POST['kindof_des'];
                    if(empty($_POST['kindof_id'])){
                        kindofroom_insert($name,$price,$des);
                    }else{
                        $id=$_POST['kindof_id'];
                        $name=$_POST['kindof_name'];
                        $price=$_POST['kindof_price'];
                        $des=$_POST['kindof_des'];
                        kindofroom_update($id,$name,$price,$des);
                    }
                    echo "<script>window.top.location='index.php?ctrl=kindofroom'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                var_dump($id);
                kindofroom_delete($id);
                echo "<script>window.top.location='index.php?ctrl=kindofroom'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $kindofroom=kindofroom_select_by_id($id);
            }    
            }
            $listkindofroom = kindofroom_select_all();
            include '../view/kindofroom.php';
        break;
        case 'styleofroom':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['style_name'];
                    $des=$_POST['style_des'];
                    $image=$_FILES['style_image']['name'];
                    if(empty($_POST['style_id'])){
                        styleofroom_insert($name,$des,$image);
                        move_uploaded_file($_FILES['style_image']['tmp_name'],$pathImg.$image);
                    }else{
                        $id=$_POST['style_id'];
                        $name=$_POST['style_name'];
                        $image=$_FILES['style_image']['name'];;
                        $des=$_POST['style_des'];
                        styleofroom_update($id,$name,$des,$image);
                        move_uploaded_file($_FILES['style_image']['tmp_name'],$pathImg.$image);
                    }
                    echo "<script>window.top.location='index.php?ctrl=styleofroom'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                styleofroom_delete($id);
                echo "<script>window.top.location='index.php?ctrl=styleofroom'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $styleofroom=styleofroom_select_by_id($id);
            }    
            }
            $liststyleofroom = styleofroom_select_all();
            include '../view/styleofroom.php';
        break;
        // Hạnh Bùi làm City vs Agency
        case 'city':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['city_name'];
                    $image=$_FILES['city_image']['name'];
                    if(empty($_POST['city_id'])){
                        city_insert($name,$image);
                        move_uploaded_file($_FILES['city_image']['tmp_name'],$pathImg.$image);
                    }else{
                        $id=$_POST['city_id'];
                        $name=$_POST['city_name'];
                        $image=$_FILES['city_image']['name'];
                        city_update($id,$name,$image);
                        move_uploaded_file($_FILES['city_image']['tmp_name'],$pathImg.$image);
                    }
                    echo "<script>window.top.location='index.php?ctrl=city'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                city_delete($id);
                echo "<script>window.top.location='index.php?ctrl=city'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $city=city_select_by_id($id);
            }    
            }
            $listCity = city_select_all();
            include '../view/city.php';
        break; 
        case 'agency':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['agency_name'];
                    $address = $_POST['agency_address'];
                    $phone = $_POST['agency_phone'];
                    $email = $_POST['agency_email'];

                    if(empty($_POST['agency_id'])){
                        agency_insert($name , $address , $phone , $email);
                    }else{
                        $id=$_POST['agency_id'];
                        $name=$_POST['agency_name'];

                        agency_update($id, $name, $address , $phone , $email);
                    }
                    echo "<script>window.top.location='index.php?ctrl=agency'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                agency_delete($id);
                echo "<script>window.top.location='index.php?ctrl=agency'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $agency=agency_select_by_id($id);
            }    
            }
            $listAgencies = agency_select_all();
            include '../view/agency.php';
        break;
        case 'room':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['room_name'];
                    $roomNumber = $_POST['room_number'];
                    $listImages = $_FILES['room_images'];
                    $img ="";
                    $service = $_POST['room_service'];
                    $bed = $_POST['room_bed'];
                    $people = $_POST['room_people'];
                    $price = $_POST['room_price'];
                    $hot = $_POST['room_hot'];
                    $description=$_POST['room_des'];
                    $catalog = $_POST['room_catalog'];
                    $kindofRoom = $_POST['room_kindof'];
                    $roomStyle = $_POST['room_style'];
                    $city = $_POST['room_city'];
                    $agency = $_POST['room_agency'];
                    if(empty($_POST['room_id'])){
                        $img_desc = reArrayFiles($listImages);
                        foreach($img_desc as $val){
                            move_uploaded_file($val['tmp_name'],$pathImg.$val['name']);
                        }
                        for($i = 0; $i < count($img_desc); $i++){
                            $img.= $img_desc[$i]['name'].'/';
                        }
                        room_insert($name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency);
                    }else{
                        $img_desc = reArrayFiles($listImages);
                        foreach($img_desc as $val){
                            move_uploaded_file($val['tmp_name'],$pathImg.$val['name']);
                        }
                        for($i = 0; $i < count($img_desc); $i++){
                            $img.= $img_desc[$i]['name'].'/';
                        }
                        $id = $_POST['room_id'];
                        room_update($id,$name,$roomNumber,$img,$service,$bed,$people,$price,$hot,$description,$catalog,$kindofRoom,$roomStyle,$city,$agency);
                    }
                    echo "<script>window.top.location='index.php?ctrl=room'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                room_delete($id);
                echo "<script>window.top.location='index.php?ctrl=room'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $room=room_select_by_id($id);
            }    
            }
            $listCatalogs = catalog_select_all();
            $listKindofRooms = kindofroom_select_all();
            $listStyleofRooms = styleofroom_select_all();
            $listCities = city_select_all();
            $listAgencies = agency_select_all();
            $listRooms = room_select_all();
            include '../view/room.php';
        break;
        // Sơn Nguyễn làm Scheduled vs COmment
        case 'scheduled':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['scheduled_name'];
                    $id_room=$_POST['scheduled_id_room'];
                    $phone=$_POST['scheduled_phone'];
                    $email=$_POST['email'];
                    $check_in=$_POST['check_in'];
                    $check_out=$_POST['check_out'];
                    if(empty($_POST['scheduled_id'])){
                        scheduled_insert($name,$phone,$email,$check_in,$check_out,$id_room);
                    }else{
                        $id=$_POST['scheduled_id'];
                        $name=$_POST['scheduled_name'];
                        $id_room=$_POST['scheduled_id_room'];
                        $phone=$_POST['scheduled_phone'];
                        $email=$_POST['email'];
                        $check_in=$_POST['check_in'];
                        $check_out=$_POST['check_out'];
                        scheduled_update($id,$name,$phone,$email,$check_in,$check_out,$id_room);
                    }
                    echo "<script>window.top.location='index.php?ctrl=scheduled'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                scheduled_delete($id);
                echo "<script>window.top.location='index.php?ctrl=scheduled'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $scheduled=scheduled_select_by_id($id);
            }    
            }
            $listScheduled = scheduled_select_all();
            $listRooms = room_select_all();
            include '../view/scheduled.php';
        break;
        case 'comment':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['name'];
                    $id_room=$_POST['comment_id_room'];
                    $id_customer=$_POST['comment_id_customer'];
                    $phone=$_POST['comment_phone'];
                    $stars=$_POST['strars'];
                    $nhan_xet=$_POST['nhan_xet'];
                    $email=$_POST['email'];
                    
                    if(empty($_POST['comment_id'])){
                        scheduled_insert($name,$id_customer,$id_room,$stars,$nhan_xet,$email);
                    }else{
                        $id=$_POST['comment_id'];
                        $name=$_POST['name'];
                        $id_room=$_POST['comment_id_room'];
                        $id_customer=$_POST['comment_id_customer'];
                        $phone=$_POST['comment_phone'];
                        $stars=$_POST['strars'];
                        $nhan_xet=$_POST['nhan_xet'];
                        $email=$_POST['email'];
                        scheduled_update($id,$name,$id_customer,$id_room,$stars,$nhan_xet,$email);
                    }
                    echo "<script>window.top.location='index.php?ctrl=comment'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                comment_delete($id);
                echo "<script>window.top.location='index.php?ctrl=comment'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $comment=comment_select_by_id($id);
            }    
            }
           
            $listComments= comment_select_all();
            $listRooms = room_select_all();
            include '../view/comment.php';
        break;
        // Khánh Ngu làm newscatalog vs news
        case 'newscatalog':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['newscatalog_name'];
                    if(empty($_POST['newscatalog_id'])){
                        newscatalog_insert($name);
                    }else{
                        $id= $_POST['newscatalog_id'];
                        $name=$_POST['newscatalog_name'];
                        newscatalog_update($id,$name);
                    }
                    echo "<script>window.top.location='index.php?ctrl=newscatalog'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                newscatalog_delete($id);
                echo "<script>window.top.location='index.php?ctrl=newscatalog'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $newscatalog= newscatalog_select_by_id($id);
            }    
            }
            $listNewscatalogs =newscatalog_select_all();
            include '../view/newscatalog.php';
        break;
        case 'news':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['news_name'];
                    $description=$_POST['news_description'];
                    $image=$_FILES['news_image']['name'];
                    $newscata=$_POST['news_newscatalog'];
                    $content =$_POST['news_content'];
                    $created = date('Y-m-d');
        
                    if(empty($_POST['news_id'])){
                        news_insert($name,$description,$image,$newscata,$content,$created);
                        move_uploaded_file($_FILES['news_image']['tmp_name'],$pathImg.$image);
                    }else{
                        $id= $_POST['news_id'];
                        $name=$_POST['news_name'];
                        $description=$_POST['news_description'];
                        $image=$_FILES['news_image']['name'];
                        $newscata=$_POST['news_newscatalog'];
                        $content =$_POST['news_content'];
                        move_uploaded_file($_FILES['news_image']['tmp_name'],$pathImg.$image);
                        news_update($id,$name,$description,$image,$newscata,$content,$created);
                    }
                  
                    // echo "<script>window.top.location='index.php?ctrl=news'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                news_delete($id);
                echo "<script>window.top.location='index.php?ctrl=news'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $news= news_select_by_id($id);
            }    
            }
            $listNews = news_select_all();
            $listNewscatalogs = newscatalog_select_all();
            include '../view/news.php';
        break;
        case 'customer':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['customer_name'];
                    $username=$_POST['customer_username'];
                    $password=$_POST['customer_password'];
                    $phone=$_POST['customer_sdt'];
                    $email=$_POST['customer_email'];
                    if(empty($_POST['customer_id'])){
                        customer_insert($name,$username,$password,$phone,$email);
                    }else{
                        $id= $_POST['customer_id'];
                        customer_update($id,$name,$username,$password,$phone,$email);
                    }
                    echo "<script>window.top.location='index.php?ctrl=customer'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                customer_delete($id);
                echo "<script>window.top.location='index.php?ctrl=customer'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $customer= customer_select_by_id($id);
            }    
            }
            $listCustomers = customer_select_all();
            include '../view/customer.php';
        break;
        case 'banner':
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                if($act=='add'){
                    $name=$_POST['banner_name'];
                    $des=$_POST['banner_des'];
                    $hot=$_POST['banner_hot'];
                    $sort=$_POST['banner_sort'];
                    $url=$_POST['banner_url'];
                    $img=$_FILES['banner_image']['name'];
                    if(empty($_POST['banner_id'])){
                        // echo $name;
                        banner_insert($name,$des,$hot,$sort,$url,$img);
                        move_uploaded_file($_FILES['banner_image']['tmp_name'],$pathImg.$img);
                    }else{
                        $id=$_POST['banner_id'];
                        banner_update($id,$name,$des,$hot,$sort,$url,$img);
                        move_uploaded_file($_FILES['banner_image']['tmp_name'],$pathImg.$img);
                    }
                    echo "<script>window.top.location='index.php?ctrl=banner'</script>";
                }
            else if($act=='delete'){
                $id=$_GET['id'];
                banner_delete($id);
                echo "<script>window.top.location='index.php?ctrl=banner'</script>";
            }
            else if($act=='edit'){
                $id=$_GET['id'];
                $banner=banner_select_by_id($id);
            }    
            }
            $listBanner = banner_select_all();
            include '../view/banner.php';
        break;
        default:
        include '../view/home.php';
        break;  
   
     
}
    include '../view/footer.php';
?>