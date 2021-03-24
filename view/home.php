    <!-- section1 -->
    <section class="section1">
<!-- Page Preloder -->
   <!-- Page Preloder -->
   <div id="preloder">
        <div class="loader"></div>
    </div>
        <div class="container pdtb">
            <div class="pdlr w3-padding-16  ">
                <h2>Những căn phòng nổi bật</h2>
                <p class="sub-heading">Lựa chọn những nơi chất lượng</p>
            </div>
            <div class="w3-row">
                <div class="w3-col m9">
                    <div class="w3-row-padding mrb15">
                        <?php
                        foreach ($listRooms as $listR) {
                        $id = $listR['id_chinhanh'];
                        $address = select_address_by_id_agency($id);
                        $image = explode('/',$listR['hinh']);
                        $stars = stars_averaged($listR['id']);
                        $quantity = quantity_comment($listR['id']);
                        
                    echo '<div class="w3-third item-title">
                    <div class="ofh THT">
                        <a class="ovlh" href="index.php?ctrl=detail&id='.$listR['id'].'">
                            <img src="'.$pathImg.''.$image[0].'" alt="">
                        </a>

                        <span class="label-wrap-top-left" style="">
                            <span class="label">Nổi bật</span>
                        </span>
                        <div class="item-media-price">
                            <span class="item-price">
                                <sup>$</sup>'.$listR['gia_tien'].'<sub>k/Đêm</sub>
                            </span>
                        </div>
                       
                    </div>
                    <div class="w3-panel w3-white">
                             
                              
                                <div class="item-title-head">
                                <h6 class="title"><a href="index.php?ctrl=detail&id='.$listR['id'].'"
                                        tabindex="-1">'.$listR['name'].'
                                        </a></h6>
                                <address class="item-address">'.$address['dia_chi'].'
                                </address>
                            </div>
                            <ul>
    
                                <li>
                                    <i class="fa fa-user"></i> <span class="total-guests">2</span> <span
                                        class="item-label">'.$listR['so_nguoi'].' Người</span>
                                </li>
    
                                <li>
                                <i class="fa fa-bed"></i> <span class="total-beds">'.$listR['giuong'].'</span> <span
                                    class="item-label"> Giường</span>
                            </li>
                            </ul>
                       
                        <!-- Start Rating -->
                        <div class="card-rating">
                            <div class="rating" style="margin-right:5px">
                                '.$stars.'   (<b style="font-weight: 100;color: #49c5d9;font-size: 13px;">'.$quantity.'</b>)
                            </div>
                         
                        </div>
                    </div>
                </div>';
            }
                echo '
                <div class="w3-row">
                <div class="room-pagination">
                       '.$pagination.'
                </div>
            </div>';
                ?>
                    </div>
                </div>
                <div class="w3-col m3 offers">
                    <div class="offers-box">
                    <?php
                        echo '<a href="'.$banner['url'].'"><img src="'.$pathImg.$banner['hinh'].'" alt=""></a>';
                    ?>
                       
                    </div>
                </div>
                <div class="w3-col m3 hnews">
                    <div class="hnews-box">
                    <?php
                        echo '
                        <div class="blog-item set-bg" style="background-image: url('.$pathImg.$news['hinh'].');"
                        data-setbg="'.$pathImg.$news['hinh'].'">
                        <div class="bi-text">
                            <span class="b-tag">Chuyến du lịch</span>
                            <h4><a href="index.php?ctrl=journey&id='.$news['id'].'">'.$news['name'].'</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>'.date_format(new DateTime($news['ngay_tao']),'jS l Y').'</div>
                        </div>
                    </div>';
                    ?>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- section2 -->
    <section class="section2">
        <div class="container pdtb">
            <div class="pdlr w3-padding-16  ">
                <h2>Điểm đến ưa thích</h2>
                <p class="sub-heading">Khám phá lựa chọn của chúng tôi về những nơi tươi đẹp</p>
            </div>
            <div class="w3-row w3-padding-16">
                <?php
            foreach($listCities as $city){
                echo '<div class="w3-half pdlr w3-padding-16">
                <div class=" ofh w3-round-xlarge ">
                    <a class="ovlh " href="index.php?ctrl=city&id='.$city['id'].'">
                        <img src="'.$pathImg.''.$city['hinh'].'" alt="">
                        <div class="taxonomy-title">'.$city['name'].'</div>
                    </a>
                </div>
            </div>';
            }       
            ?>

            </div>
    </section>

    <!-- section3 -->
    <?php
        include '../view/styleofroom.php';
    ?>
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("page");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}
    </script>