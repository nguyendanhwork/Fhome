<?php
if(isset($_GET['ctrl'])=='scheduled'){
    echo '<style> .ripMrg{margin-top:66px} .breadcrumb-section{margin-top:0px !important} .ripMrg{border-top:solid 1px lightgray}</style>';
}
?>
  <div id="preloder">
        <div class="loader"></div>
    </div>
        <header class="w3-white ripMrg" style="padding:10px 0">
        <form method="POST" action="index.php?ctrl=scheduled&act=search&page=1" style="text-align:center"> 
            <div class="w3-row-padding">
                <div class="w3-third">
                    <div class="togo">
                        <input class="w3-input w3-border"  name="booking_where" type="text" placeholder="Where to go?" value="<?php if(isset($where)){echo $where;}  ?>">
                    </div>
                </div>      
                <div class="w3-third">
                    <div class="w3-row-padding inout">
                        <div class="w3-half inout-in">
                            <input class="w3-input w3-border" type="date" placeholder="Check in?">
                        </div>
                        <div class="w3-half inout-out">
                            <input class="w3-input w3-border" type="date" placeholder="Check out?">
                        </div>
                    </div>
                </div>
                <div class="w3-third">
                    <div class="w3-row-padding">
                        <div class="w3-half manypp"><input class="w3-input w3-border" type="number" id="quantity"
                                name="booking_people" min="0" max="99" value="<?php if(isset($people)){echo $people;}else echo '0';?>"></div>
                        <div class="w3-half">
                            <input class="btnsr" type="submit" name="booking_submit" value="Tìm phòng">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </header>
    </header>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section w3-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Những phòng bạn quan tâm</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <span>Đặt phòng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Section Begin -->
    <section class="rooms-section spad w3-white">
        <div class="container">
            <div class="row">
            <?php 
            if(!isset($listRooms) || count($listRooms)==0){
                    echo '<p style="margin:0 auto">Địa điểm này không có phòng, vui lòng chọn lại!</p>';
                }else{
                    foreach($listRooms as $lr){
                        $id = $lr['id_thanhpho'];
                        $city = select_city_by_id($id);
                        $image = explode('/',$lr['hinh']);
                        echo ' <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <a href="index.php?ctrl=detail&id='.$lr['id'].'"> <img src="'.$pathImg.''.$image[0].'" alt=""> </a>
                            <div class="ri-text">
                                <h4>'.$lr['name'].'</h4>
                                <h3>'.$lr['gia_tien'].'$<span>/Đêm</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Địa điểm :</td>
                                            <td>'.$city['name'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Gường :</td>
                                            <td>'.$lr['giuong'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Người :</td>
                                            <td>'.$lr['so_nguoi'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Dịch vụ:</td>
                                            <td>'.$lr['dich_vu'].'</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="index.php?ctrl=detail&id='.$lr['id'].'" class="primary-btn">Chi tiết</a>
                            </div>
                        </div>
                    </div>';
                    }
                }
               
              
            ?>
               
                
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <?php 
                            echo $pagination;
                        ?>
                        <!-- <a href="#">Next <i class="fa fa-long-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include '../view/styleofroom.php';
?>