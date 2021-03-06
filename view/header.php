<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FHOME</title>
    <link rel="icon" href="../view/img/iconn.ico" type="image" sizes="16x16">
    <link rel="stylesheet" href="../view/CSS/W3.css">
    <link rel="stylesheet" href="../view/CSS/Style.css">
    <link rel="stylesheet" href="../view/CSS/elegant-icons.css" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../view/img/logodiachi.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../view/js/js.js"></script>
</head>
<style>
#infomartion-form table {
    border: solid 1px lightgray;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#infomartion-form td, th {
    font-weight: 100;
    font-size: 13px;
    border-top: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>

<body id="totop">
<?php
    if(isset($_GET['ctrl'])){
        $ctrl = $_GET['ctrl'];
    }else{
        $ctrl = 'home';
    }
    switch($ctrl){
        case 'about':
            echo '<style>.about{border-bottom: 1px solid #f15e75!important;} </style>';
        break;
        case 'scheduled':
            echo '<style>.scheduled{border-bottom: 1px solid #f15e75!important;} </style>';
        break;
        case 'blog':
            echo '<style>.blog{border-bottom: 1px solid #f15e75!important;} </style>';
        break;
        case 'home':
            echo '<style>.home{border-bottom: 1px solid #f15e75!important;} </style>';
        default:
        break;
    }
?>
    <!-- header -->
    <header>
        <!-- Navbar (sit on top) -->
        <nav class="w3-top w3-card-4" style="z-index: 99;">
            <div style="padding: 10px 10px;" class="w3-bar w3-white">
                <a class="w3-bar-item  w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
                    onclick="myFunction()" title="Toggle Navigation Menu">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="index.php" class="w3-bar-item logo"><img src="../view/img/logo.jpg" alt=""></a>
                <a href="index.php" class="w3-bar-item home w3-hide-small"><i class="fa fa-home" aria-hidden="true"></i>Trang ch???</a>
                <a href="index.php?ctrl=about" class="w3-bar-item w3-hide-small about"><i class="fa fa-user"></i> Gi???i
                    thi???u</a>
                <a href="index.php?ctrl=scheduled&page=1" class="w3-bar-item w3-hide-small scheduled"><i class="fa fa-th"></i> ?????t
                    l???ch</a>
                <a href="index.php?ctrl=blog" class="w3-bar-item w3-hide-small blog"><i class="fa fa-book" aria-hidden="true"></i>
                    T???p ch??</a>
                <div class="w3-right  w3-hide-small">
                    <form action="" method="POST">
                        <ul>
                            <?php
                            if(isset($_SESSION['account'])){
                                $account = check_user($_SESSION['account']);
                                echo '<li><a href="javascript:void(0)" onclick="information_open()" class="w3-bar-item">'.$account['name'].'</a></li>';
                                echo '<li><i style="padding: 14px;" class="fa fa-circle-o w3-bar-item"></i></li>';
                   
                                echo ' <li> <input type="submit" name="btn_logout" class="w3-bar-item" value="????ng xu???t"></li>';
                            }else echo '<li><a href="javascript:void(0)" onclick="w3_open()" class="w3-bar-item">????ng nh???p</a></li>';
                        ?>
                        </ul>
                    </form>

                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                <a href="about.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Gi???i thi???u</a>
                <a href="product2.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> ?????t l???ch</a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>
                    Li??n h???</a>
                <a href="blog.html" class="w3-bar-item w3-button" id="search">
                    T???p ch??</a>
            </div>

        </nav>

        <!-- First Parallax Image with Logo Text -->
        <?php
        if(isset($_GET['ctrl'])){
            if($_GET['ctrl'] == 'scheduled'){
                echo '<style> #home{display:none}  .w3-card-4{box-shadow:none !important}; </style>';
               }else if($_GET['ctrl'] == 'blog'){
                echo '<style> #home{display:none}</style>';
               }
               else if($_GET['ctrl'] == 'styleofroom'){
                echo '<style> #home{display:none}  .w3-card-4{box-shadow:none !important}; </style>';
               }
               else if($_GET['ctrl'] == 'city'){
                echo '<style> #home{display:none}  .w3-card-4{box-shadow:none !important}; </style>';
               }
               else if($_GET['ctrl'] == 'catalog'){
                echo '<style> #home{display:none}  .w3-card-4{box-shadow:none !important}; </style>';
               }
               else if($_GET['ctrl'] == 'detail'){
                echo '<style> #home{display:none} </style>';
               }
        }
        ?>
        <?php
            $bannerHot = banner_select_by_hot();
            echo '<style>.bgimg-1 {
                background-image: url('.$pathImg.$bannerHot['hinh'].');
            }</style>'
        ?>
        <div class="bgimg-1 w3-display-container" id="home">
            <div id="ttk"
                class="w3-display-middle w3-center w3-text-white w3-padding-large w3-xlarge w3-wide w3-animate-opacity" style="margin-top:40px">
                <h2 class="w3-text-white"><?php echo '<a href="'.$bannerHot['url'].'" target="_blank" style="color:white">'.$bannerHot['name'].'</a>'; ?></h2>
                <h6 class=""><a href="index.php?ctrl=scheduled&page=1" style="color:white"><?php echo $bannerHot['mo_ta'] ?></a></h6>
                <div class="dl-s">
                    <div class="where">

                    </div>
                    <div class="arive"></div>
                    <div class="depart"></div>
                    <div class="guests"></div>
                    <div class="search"></div>
                </div>
            </div>
        </div>
        <!-- Login -->
        <nav class="form-modal w3-sidebar w3-bar-block w3-animate-right w3-top w3-text-light-grey w3-large"
            style="z-index: 3;top:65px;width: 450px; font-weight: bold; display: none; right: 0px;" id="mySidebar">
            <a style="BACKGROUND: #d0d0d038;color: black;" href="javascript:void()" onclick="w3_close()"
                class="w3-bar-item w3-button w3-center w3-padding-16">Tho??t</a>
            <div class="form-toggle">
                <button id="login-toggle" onclick="toggleLogin()">????ng nh???p</button>
                <button id="signup-toggle" onclick="toggleSignup()">????ng k??</button>
            </div>

            <div id="login-form">
                <form action="" method="POST">
                    <input type="text" name="user_name" placeholder="Nh???p t??i kho???n" />
                    <input type="password" name="pass_word" placeholder="Nh???p m???t kh???u" />
                    <button type="submit" name="btn_login" class="btn login">????ng nh???p</button>
                    <p><a href="javascript:void(0)">Qu??n t??i kho???n</a></p>
                    <hr />
                   
                </form>
            </div>
            <div id="signup-form">
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Nh???p h??? v?? t??n" />
                    <input type="text" name="user_name" placeholder="Nh???p t??n t??i kho???n" />
                    <input type="password" name="pass_word" placeholder="Nh???p m???t kh???u" />
                    <input type="text" name="phone_number" placeholder="Nh???p s??? ??i???n tho???i" />
                    <input type="email" name="email" placeholder="Nh???p email" />


                    <button type="submit" class="btn signup" name="btn_register">T???o t??i kho???n</button>
                    <p>Nh???p v??o <b>t???o t??i kho???n</b> c?? ngh??a l?? b???n ?????ng ?? v???i <a href="javascript:void(0)">??i???u kho???n
                            d???ch v??? c???a ch??ng t??i</a>.</p>
                    <hr />
                </form>
            </div>
        </nav>
        <nav class=" w3-sidebar w3-bar-block w3-animate-right w3-top w3-text-light-grey w3-large"
            style="z-index: 3;top:65px;width: 450px; font-weight: bold; display: none; right: 0px;" id="mySideinfo">
            <a style="BACKGROUND: #d0d0d038;color: black;" href="javascript:void()" onclick="information_close()"
                class="w3-bar-item w3-button w3-center w3-padding-16">Tho??t</a>
            <div id="infomartion-form">
         
                <form action="" method="POST" style="margin: 10px;">
                <?php
                    echo '<table>
                    <tr>
                        <th colspan="3" style="background: rgba(226, 235, 242, 0.3);">
                            <h5 style="font-weight:400;margin-bottom:0px">
                                TH??NG TIN C?? NH??N
                            </h5>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            H??? v?? t??n:
                        </td>
                        <td>
                        <input type="text" name="info_name" disabled value="'.$account['name'].'"/>
                        </td>
                        <td>
                            <input type="button" class="change" value="Thay ?????i"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            T??n T??i kho???n:
                        </td>
                        <td>
                        <input type="text" name="info_username" disabled value="'.$account['user_name'].'"/>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                        M???t kh???u:
                        </td>
                        <td>
                        <input type="password"  name="info_password" disabled value=" '.$account['pass_word'].'"/>
                       
                        </td>

                        <td>
                        <input type="button" class="change" value="Thay ?????i"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            S??? ??i???n tho???i:
                        </td>
                        <td>
                        <input type="text"  name="info_phone" disabled value=" '.$account['sdt'].'"/>
                        </td>

                        <td>
                        <input type="button" class="change" value="Thay ?????i"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                        <input type="email"  name="info_email" disabled value=" '.$account['email'].'"/>
                        </td>

                        <td>
                        <input type="button" class="change" value="Thay ?????i"/>
                        </td>
                    </tr>
                    <tr>
              
                    <td colspan="3">
                    <input type="submit" style="padding: 2px 10px;font-weight: 500; font-size: 14px;" name="change_info" value="C???p nh???t">
                    </td>
                </tr>
                </table>';
                ?>
                
             
             
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script>
                        $(".change").click(function(){
                            $(this).parent().siblings().find(':input').prop("disabled", false).focus();
                        });
                    </script>        
                </form>
            </div>

        </nav>