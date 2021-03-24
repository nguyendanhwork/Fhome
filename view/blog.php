
<style>
h1 , h2 , h3 , h4 , h5 , h6{
    font-family: "Lora", serif;
}

</style>
<div id="preloder">
        <div class="loader"></div>
    </div>
</head>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section-dt w3-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Trải nghiệm muôn nơi</h2>
                            <div class="bt-option">
                                <a href="index.php">Home</a>
                                <span>Tạp chí</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->
    
        <!-- Blog Section Begin -->
        <section class="blog-section blog-page spad w3-white">
            <div class="container">
                <div class="row">
                    <?php
                        foreach($pblog as $listb){
                            $id = $listb['id_dmtt'];
                            $namedd = select_name_by_id_catalog($id);
                            $image = explode('/',$listb['hinh']);
                            $time = date_format(new DateTime($listb['ngay_tao']),'jS l Y');
                            echo'
                            <div class="col-lg-4 col-md-6">
                        <div class="blog-item set-bg" style="background-image: url('.$pathImg.''.$image[0].');">
                            <div class="bi-text">
                                <span class="b-tag">'.$namedd['name'].'</span>
                                <h4><a href="index.php?ctrl=journey&id='.$listb['id'].'" >'.$listb['name'].'</a></h4>
                                <div class="b-time"><i class="icon_clock_alt"></i>'.$time.'</div>
                            </div>
                        </div>
                    </div>
                            ';
                        }
                        echo '
                        <div class="col-lg-12">
                        <div class="room-pagination">
                               '.$pagination.'
                        </div>
                    </div>';
                    ?>
                    <div class="col-lg-12">
                        <div class="load-more">
                            <a href="#" class="primary-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
    <section class="video-section set-bg"  data-setbg="../view/img/video-bg.jpg" style="background-image: url(./../view/img/video-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>
                                Khám phá Khách sạn & Dịch vụ của chúng tôi.</h2>
                        <p>Đó là mùa bão nhưng chúng tôi đang đến thăm đảo Hilton Head</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="../view/img/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
