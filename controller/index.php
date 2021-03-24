<?php
    session_start();
    include_once '../model/pdo.php';
    include_once '../model/global.php';
    include_once '../model/user.php';
    include_once '../model/catalog.php';
    include_once '../model/scheduled.php';
    include_once '../model/room.php';
    include_once '../model/home.php';
    include_once '../model/city.php';
    include_once '../model/detail.php';
    include_once '../model/styleofroom.php';
    include_once '../model/pagination.php';
    include_once '../model/comment.php';
    include_once '../model/stars.php';
    include_once '../model/blog.php';
    include_once '../model/journey.php';
    include_once '../view/header.php';
    $listStyleofRooms = styleofroom_select_all();
    $action = 'home'; 
    if(isset($_POST['forget_account'])){
     
    }
    if(isset($_GET['ctrl'])){
        $action = $_GET['ctrl'];
    }
    if(isset($_POST['btn_register'])){
        $check = true;
        $name = $_POST['name'];
        $username = $_POST['user_name'];
        $password = $_POST['pass_word'];
        $phonenumber = $_POST['phone_number'];
        $email = $_POST['email'];
        $listAccounts = user_select_all();
        foreach($listAccounts as $ac){
            if($ac['user_name'] == $username ){
                $check = false;
            }
        }
        if($check == true){
            user_insert($name,$username,$password,$phonenumber,$email);
            if(check_login($username,$password)){
                $_SESSION['account'] = $username;
            };
            echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Tên tài khoản đã tồn tại');</script>";
        }
        echo "<script>window.top.location='index.php'</script>";
        
    }else if(isset($_POST['btn_login'])){
        if(empty($_POST['user_name']) || empty($_POST['pass_word'])){
            echo "<script type='text/javascript'>alert('Vui lòng nhập tài khoản và mật khẩu!');</script>";
        }else{
            $username = $_POST['user_name'];
            $password = $_POST['pass_word'];
            if(check_login($username,$password)){
                $_SESSION['account'] = $username;
            }else{
                echo "<script type='text/javascript'>alert('Tải khoản hoặc mật khẩu không chính xác!');</script>";
            }
        }
        echo "<script>window.top.location='index.php'</script>";
    }else if(isset($_POST['btn_logout'])){
        unset($_SESSION['account']);
        echo "<script>window.top.location='index.php'</script>";
    }
    if(isset($_POST['change_info'])){
        $currentAccount = check_user($_SESSION['account']);
        $username = $currentAccount['user_name'];
        if(isset($_POST['info_name'])){
            $name = $_POST['info_name'];
        }else{
            $name = $currentAccount['name'];
        }if(isset($_POST['info_password'])){
            $password = $_POST['info_password'];
        }else{
            $password = $currentAccount['pass_word'];
        }if(isset($_POST['info_phone'])){
            $phone = $_POST['info_phone'];
        }else{
            $phone = $currentAccount['sdt'];
        }if(isset($_POST['info_email'])){
            $email = $_POST['info_email'];
        }else{
            $email = $currentAccount['email'];
        }
        user_update($name,$username,$password,$phone,$email);
        echo "<script>window.top.location='index.php'</script>";
    }
    switch ($action){
        // Tri  làm trang HOme
        case 'home':
            $banner = banner_select_by_sort();
            $news = news_select_by_hot();
            $listRooms = showroom();
            $total = count($listRooms);
            if(isset($_GET['page']) && ($_GET['page']>0) ){
              $listRoomsSp = [];
              $page = $_GET['page'];
             for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
                 if(isset($listRooms[$i])){
                   array_push($listRoomsSp,$listRooms[$i]);
                 }        
             }
             $listRooms = $listRoomsSp; 
          }
          else {
              $page = 1;
              $listRoomsSp = [];
              for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
               array_push($listRoomsSp,$listRooms[$i]);
          }
          $listRooms = $listRoomsSp; 
          }
          $pagination = pagination($page,$total);
            $listCities = city_select_all();
            include '../view/home.php';
        break;
        // Hạnh làm Login, Register
        case 'about':
            include '../view/about.php';
        break;
        // Sơn làm  
        case 'scheduled':
            $listRooms = loadRoomsandPagination();   
            $pagination = $_SESSION['getPagination'];
            include '../view/scheduled.php';
            
        break;
        case 'styleofroom':
            $listRooms = loadRoomsandPagination();   
            $pagination = $_SESSION['getPagination'];
            include '../view/scheduled.php';
        break;
        case 'city':
            $listRooms = loadRoomsandPagination();   
            $pagination = $_SESSION['getPagination'];
            include '../view/scheduled.php';
        break;
        case 'catalog':
            $listRooms = loadRoomsandPagination();   
            $pagination = $_SESSION['getPagination'];
            include '../view/scheduled.php';
        break;
        case 'detail':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $roomDetail = detail_select_room_by_id($id);
            }
            $check = true;
            $listComments = comment_select_by_id($_GET['id']);
            if(isset($_SESSION['account'])){
                $customer = check_user($_SESSION['account']);
                $name = $customer['name'];
                $phone = $customer['sdt'];
                $email = $customer['email'];
            }
            if(isset($_POST['btn_booking'])){
                $listBookings = room_booking_select_all();
                $name = $_POST['booking_name'];
                $phone = $_POST['booking_phone'];
                $email = $_POST['booking_email'];
                $checkIn = $_POST['booking_checkin'];
                $checkOut = $_POST['booking_checkout'];
                $room = $roomDetail['id'];
                for($i = 0; $i < count($listBookings);$i++){
                    if($room == $listBookings[$i]['id_phong']){
                        $check = false;
                    }else{
                        $check = true;
                    }
                }
                echo preg_match('/^[0-9]{10}+$/', $phone);
                if(empty($name)){
                    echo '<style> .vlbooking_name{display:block;} </style>';
                }else if(empty($phone) || preg_match('/^[0-9]{10}+$/', $phone) == 0) {
                    echo '<style> .vlbooking_phone{display:block;} </style>';
                }else if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo '<style> .vlbooking_email{display:block;} </style>';
                }else if(empty($checkIn)){
                    echo '<style> .vlbooking_checkin{display:block;} </style>';
                }else if(empty($checkOut)){
                    echo '<style> .vlbooking_checkout{display:block;} </style>';
                }else{
                    if($check == true){
                        booking_room($room,$name,$phone,$email,$checkIn,$checkOut);
                        echo "<script type='text/javascript'>alert('Đặt phòng thành công!');</script>";
                        echo "<script>window.top.location='index.php'</script>";
                    }else{
                        echo "<script type='text/javascript'>alert('Không còn phòng, vui lòng chọn phòng khác!');</script>";
                        echo "<script>window.top.location='index.php?ctrl=scheduled'</script>";
                    }     
                }
               
            }
            if(isset($_POST['btn_comment'])){
                if(isset($_COOKIE["starsok"])){
                    $stars = $_COOKIE["starsok"];
                }else{
                    $stars = 0;
                }
                $name = $_POST['comment_name'];
                $idRoom = $_GET['id'];
                $email = $_POST['comment_email'];    
                $content = $_POST['comment_content'];
                $created = date('Y-m-d H:i:s');
                if(empty($name)){
                    echo '<style> .vlcomment_name{display:block;} </style>';
                }else if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo '<style> .vlcomment_email{display:block;} </style>';
                }
                else if(empty($content)){
                    echo '<style> .vlcomment_content{display:block;} </style>';
                }else{
                    comment_insert($name,$idRoom,$stars,$content,$email,$created);
                    echo "<script type='text/javascript'>alert('Gửi nhận xét thành công!');</script>";
                    echo "<script> document.cookie = 'starsok=; expires=Thu, 01 Jan 1970 00:00:00 UTC';</script>";
                    echo "<script>window.top.location='index.php?ctrl=detail&id=$idRoom'</script>";
                }
            }
           
            include '../view/detail.php';
        break;
        // Khánh làm Blog
        case 'blog':
            $pblog= showblog();
            $total = count($pblog);
            if(isset($_GET['page']) && ($_GET['page']>0) ){
              $listBlogsSp = [];
              $page = $_GET['page'];
             for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
                 if(isset($pblog[$i])){
                   array_push($listBlogsSp,$pblog[$i]);
                 }        
             }
             $pblog = $listBlogsSp; 
          }
          else {
              $page = 1;
              $listBlogsSp = [];
              for($i=($page-1)*$quantity; $i >=(($page-1)*$quantity) && $i < ($quantity*$page);$i++){
               array_push($listBlogsSp,$pblog[$i]);
          }
          $pblog = $listBlogsSp; 
          }
          $pagination = pagination($page,$total);
            include '../view/blog.php';
        break;
        case 'journey':
            $journey= journey_select_by_id($_GET['id']);
            include '../view/journey.php';
        break;
}
    $listCatalogs = catalog_select_all();
    include '../view/footer.php';
?>