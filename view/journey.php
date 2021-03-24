
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lora", serif;
        }
        
        .journey {
            padding: 7rem 0;
        }
        
        .journey-heading {
            position: relative;
        }
        
        .mb-5 {
            margin-bottom: 3rem!important;
        }
        
        .mb-10 {
            margin-bottom: 6rem!important;
        }
        
        .journey-heading .backdrop.w3-center {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        
        .journey-heading .backdrop {
            line-height: 1;
            top: -100%;
            position: absolute;
            text-transform: uppercase;
            z-index: -1;
            font-weight: 900 !important;
            font-size: 5rem;
            color: #efefef;
        }
        
        .subtitle-39191 {
            color: #efba6c;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
        }
        
        .j-time {
            font-size: 15px;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
    </style>

    <!-- First Parallax Image with Logo Text -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="journey container">
        <div class="mb-10 w3-row w3-center">
            <div class="w3-col s12">
                <div class="journey-heading mb-5">
                    <span class="backdrop w3-center">Journey Bengi</span>
                    <span class="subtitle-39191"><?php $nameCatalog = journey_get_name_catalog($journey['id_dmtt']);echo $nameCatalog['name']; ?></span>
                    <h3><?php echo $journey['name'] ?></h3>
                </div>
            </div>
        </div>
        <div class="w3-row-padding mt-5">
            <div class="w3-col m6 s6">
                <div class="j-time"><i class="icon_clock_alt"></i><?php echo date_format(new DateTime($journey['ngay_tao']),'jS l Y'); ?></div>
            
                    <?php
                        echo $journey['noi_dung'];
                    ?>
                </div>
            <div class="w3-col m6 s6">
                <img src="<?php echo $pathImg.$journey['hinh'] ?>" alt="">
            </div>
        </div>

        </div>
    </section>
    <!-- Blog Section End -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg" style="background-image: url(../view/IMG/video-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>
                            Khám phá Khách sạn & Dịch vụ của chúng tôi.</h2>
                        <p>Đó là mùa bão nhưng chúng tôi đang đến thăm đảo Hilton Head</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img src="../view/IMG/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    