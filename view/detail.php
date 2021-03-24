    <!-- Breadcrumb Section Begin -->
    <style>
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lora", serif;
}
.framecomment{
    border-top:solid 1px #d3d3d361;
    padding-top:10px;
    padding-bottom:10px;
}
    </style>
     <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="breadcrumb-section-dt w3-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Phòng của bạn</h2>
                        <div class="bt-option">
                            <a href="index.html">Home</a>
                            <span>Đặt phòng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details Section Begin -->
    <section style="padding-top: 0px;" class="room-details-section spad w3-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    $city = detail_select_city_by_id($roomDetail['id_thanhpho']);
                    $kindofRoom = detail_select_kindofroom_by_id($roomDetail['id_loaiphong']);
                    $image = explode('/',$roomDetail['hinh']);
                    $stars = stars_averaged($roomDetail['id']);
                    $quantity = quantity_comment($roomDetail['id']);
                        echo ' <div class="room-details-item">
                        <img src="'.$pathImg.''.$image[0].'" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>'.$roomDetail['name'].'</h3>
                                <div class="rdt-right">
                                    <div class="rating" style="margin-right:5px">
                                            '.$stars.'
                                
                                    </div>
                                    (<b style="font-weight: 100;color: #49c5d9;font-size: 13px;">'.$quantity.'</b>)
                                    <a href="#">Đặt vé ngay</a>
                                </div>
                            </div>
                            <h2>'.$roomDetail['gia_tien'].'k$<span>/Đêm</span></h2>
                            <table>
                                    <tbody>
                                            <tr>
                                                <td class="r-o">Địa điểm :</td>
                                                <td>'.$city['name'].'</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Gường :</td>
                                                <td>'.$roomDetail['giuong'].'</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Phòng :</td>
                                                <td>'.$kindofRoom['name'].'</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Dịch vụ:</td>
                                                <td>'.$roomDetail['dich_vu'].'</td>
                                            </tr>
                                        </tbody>
                            </table>
                            <p class="f-para">'.$roomDetail['mo_ta'].'</p>
                        </div>
                    </div>';
                    ?>

                    <div class="review-add">
                        <h4>Khách hàng nhận xét</h4>
                        <form action="" class="ra-form" method="POST">
                        <?php
                            foreach($listComments as $lc){
                                $quantity = 0;
                                $showStars = "";
                                    if($lc['stars']>0){
                                        for($i = 0; $i<$lc['stars'];$i++){
                                            $showStars.= '<i style="font-size:13px" class="icon_star"></i>';
                                        }
                                    }
                                echo '<div class="row" style="margin-bottom: 10px;">
                            <div class="col-lg-12"> 
                            <div class="framecomment">
                            <div class="rating">
                                '.$showStars.'
                            </div>
                            <p style="margin-bottom: 3px;margin-top: 0;">Bởi: <b>'.$lc['name'].'</b><span style="font-size: 13px;color: #808080;margin-left: 15px;">vào ngày '.$lc['ngay_gui'].'</span></p>
                            <p style="margin-top: 0;margin-bottom: 0; word-wrap: break-word"> '.$lc['nhan_xet'].'</p>
                            </div>
                            </div>
                        </div>';
                            }
                            
                        ?>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Tên*" name="comment_name" style="margin-bottom:5px"
                                        value="<?php if(isset($name)) echo $name?>">
                                        <span class='validate vlcomment_name'>Vui lòng nhập Tên!</span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*" name="comment_email" style="margin-bottom:5px"
                                        value="<?php if(isset($email)) echo $email ?>">
                                        <span class='validate vlcomment_email'>Vui lòng nhập và đúng định dạng email @gmail...!</span>
                                </div>
                                <input type="hidden" name="starsRated" value="" id="starsRated">
                                <div class="col-lg-12">
                                    <div>
                                        <h5>Số sao:</h5>
                                        <div class="card-rating">
                                        
                                            <ol id="star-rank" class="star-rank">
                                            <?php
                                                $totalStars = 5;
                                                $lowestStar = 1;
                                               for($i =1;$i <= $totalStars;$i++){
                                                echo '<li class="star" data-id="'.$i.'">★</li>';
                                            };
                                           
                                            ?>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                            <script>
                                            $(document).ready(function () {
                                                var btn=$(".star");
                                                var starsok = 0;
                                                for (let i = 0; i < btn.length; i++) {
                                                    $(btn[i]).click(function (e) { 
                                                        var starsRated = 0;
                                                        e.preventDefault();
                                                       for (let j = 0; j < btn.length; j++){
                                                          if($(this).data('id') <= $(btn[j]).data('id')){
                                                            $(btn[j]).addClass("star-selected");
                                                           starsRated = starsRated+1
                                                          }else{
                                                            $(btn[j]).removeClass("star-selected");
                                                          }
                                                       }
                                                       document.getElementsByName("starsRated").value = starsRated;
                                                       document.cookie ="starsok="+document.getElementsByName("starsRated").value;
                                                    });
                                                }
                                            });    
                                            </script>
                                            </ol>
                                            
                                        </div>
                                    </div>
                                    <textarea placeholder="Nhận xét của bạn" name="comment_content"></textarea>
                                    <span class='validate vlcomment_content'>Vui lòng nhập nội dung!</span>
                                    <button type="submit" name="btn_comment">Gửi ngay</button>
                                </div>
                            </div>
                      
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>
                            Đặt phòng của bạn</h3>
                        <form action="" method="POST">
                            <div class="check-date">
                                <label for="date-name">Họ và tên:</label>
                                <input type="text" class="date-input" id="date-name" name="booking_name"
                                    value="<?php if(isset($name)) echo $name ?>">
                                <span class="validate vlbooking_name">Vui lòng nhập tên!</span>
                            </div>
                            <div class="check-date">
                                <label for="date-phone">Số điện thoại:</label>
                                <input type="text" class="date-input" id="date-phone" name="booking_phone"
                                    value="<?php if(isset($phone)) echo $phone ?>">
                                    <span class="validate vlbooking_phone">Vui lòng nhập số điện thoại!</span>
                            </div>
                            <div class="check-date">
                                <label for="date-email">Email:</label>
                                <input type="text" class="date-input" id="date-email" name="booking_email"
                                    value="<?php if(isset($email)) echo $email ?>">
                                    <span class="validate vlbooking_email">Vui lòng nhập và đúng định dạng email @gmail...!</span>
                            </div>
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="date" class="date-input" id="date-in" name="booking_checkin">
                                <i class="icon_calendar"></i>
                                <span class="validate vlbooking_checkin">Vui lòng chọn ngày Checkin!</span>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="date" class="date-input" id="date-out" name="booking_checkout">
                                <i class="icon_calendar"></i>
                                <span class="validate vlbooking_checkout">Vui lòng chọn ngày Checkout!</span>
                            </div>
                            <div class="select-option">
                                <label for="guest">
                                    Khách:</label>
                                <select id="guest">
                                    <option value=""><?php echo $roomDetail['so_nguoi'] ?> Người</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Phòng:</label>
                                <select id="room">
                                    <option value=""><?php echo $roomDetail['giuong'] ?> Gường</option>
                                </select>
                            </div>
                            <button type="submit" name="btn_booking">Đặt phòng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg"
        style="background-image: url(../view/IMG/video-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>
                            Khám phá Khách sạn & Dịch vụ của chúng tôi.</h2>
                        <p>Đó là mùa bão nhưng chúng tôi đang đến thăm đảo Hilton Head</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="../view/IMG/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    <!-- footer -->