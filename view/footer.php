<footer class="w3-white ">
        <div class="footer-box container">
            <div class="ft-t">
                <div class="w3-row-padding">
                    <div class="w3-quarter">
                        <div class="ft-t-w-t">
                            <img src="../view/img/logo.jpg" alt="">
                        </div>
                        <div style="padding: 0 30px 0px 0;">fHome là một nền tảng đặt phòng mạnh mẽ cho phép bạn điều hành một doanh nghiệp cho thuê nhà ở hoặc thương mại trực tuyến mà không gặp rắc rối.
                        </div>
                        <div class="ft-t-w-b">
                            <p class="read"><a href="#">Read more <i class="fa fa-caret-right"></i></a></p>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="ft-t-w-t">
                            <h3>Khám phá</h3>
                        </div>
                        <div class="ft-t-w-b">
                            <ul class="ft-t-ul">
                            <?php
                                foreach($listCatalogs as $lc){
                                    echo '<li><a href="index.php?ctrl=catalog&id='.$lc['id'].'">'.$lc['name'].'</a></li>';
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="ft-t-w-t">
                            <h3>
                                Company
                            </h3>
                        </div>
                        <div class="ft-t-w-b">
                            <ul class="ft-t-ul">
                                <li><a href="index.php">Trang Chủ</a></li>
                                <li><a href="">Khoảng</a></li>
                                <li><a href="index.php?ctrl=blog">Blog và báo chí</a></li>
                                <li><a href="">Danh sách</a></li>
                                <li><a href="">Giúp đỡ</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w3-quarter">
                        <div class="ft-t-w-t">
                            <h3>
                                Contact Us
                            </h3>
                        </div>
                        <div class="ft-t-w-b widget-contact">
                            <ul>
                                <li><i class="fa fa-map-marker"></i> <span>14, Đinh Tiên Hoàng, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh.</span></li>
                                <li><i class="fa fa-phone-square"></i> <span>800 987 6543</span></li>
                                <li><i class="fa fa-fax"></i> <span>876 654 2362</span></li>
                                <li><i class="fa fa-envelope-o"></i><a href="#">fhome@email.com</a></li>
                                <li><i class="fa fa-arrow-circle-o-right"></i><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-b">
                <div class="w3-row-padding">
                    <div style="line-height: 50px;" class="w3-half">
                        fHomey - All rights reserved - Designed and Developed by Fap Team
                    </div>
                    <div class="w3-half w3-right-align social-icons">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Login -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    
          <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
          </div>
          
          <form class="w3-container" action="/action_page.php">
            <h2>ĐĂNG NHẬP</h2>
          <p>Đăng nhập để theo dõi, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
            <div class="w3-section">
              <label><b>Tài khoản</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nhập tài khoản" name="usrname" required>
              <label><b>Password</b></label>
              <input class="w3-input w3-border" type="password" placeholder="Nhập Password" name="psw" required>
              <button class="w3-button w3-block btn-pink w3-section w3-padding" type="submit">Đăng nhập</button>
              <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
            </div>
          </form>
    
          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            <span class="w3-right w3-padding w3-hide-small">Quên <a href="#">password?</a></span>
          </div>
    
        </div>
      </div>
      <!-- To Top -->
      <div class=" w3-hide-small" style="position: fixed; bottom: 30px; right: 30px; width:60px; height: 60px;background: #ff506b;border-radius: 60px;">
        <a href="#totop"><svg id="rocket-icon" viewBox="0 0 75 75"><polygon fill="#68D4F8" points="18 21 35 21 44 30 27 30"/><polygon fill="#68D4F8" points="27 45 44 45 35 54 18 54"/><path fill="#68D4F8" d="M30.94 47.7c-3.79-.93-6.98-2.35-9.25-4.07a14.88 14.88 0 0 0 0-12.26c2.27-1.72 5.46-3.14 9.25-4.08A14.72 14.72 0 0 1 35 37.5c0 3.98-1.55 7.59-4.06 10.2z"/><path fill="#8DDEF9" d="M30.94 27.3c-3.79.93-6.98 2.35-9.25 4.07.84 1.86 1.31 3.94 1.31 6.13h12c0-3.98-1.55-7.59-4.06-10.2z"/><path fill="#68D4F8" d="M57.06 30.13C62.5 33.1 66 36.73 66 37.5c0 .77-3.49 4.4-8.94 7.37A14.83 14.83 0 0 0 59 37.5c0-2.7-.7-5.21-1.94-7.37z"/><path fill="#8DDEF9" d="M57.06 30.13C62.5 33.1 66 36.73 66 37.5h-7c0-2.7-.7-5.21-1.94-7.37z"/><path fill="#ECFAFF" d="M57.06 44.87C52.94 47.12 47.7 49 42 49c-3.99 0-7.75-.47-11.06-1.3A14.72 14.72 0 0 0 35 37.5c0-3.98-1.55-7.59-4.06-10.2C34.25 26.46 38.01 26 42 26c5.7 0 10.94 1.88 15.06 4.13A14.83 14.83 0 0 1 59 37.5c0 2.7-.7 5.21-1.94 7.37z"/><path fill="#FCFEFF" d="M57.06 30.13C52.94 27.88 47.7 26 42 26c-3.99 0-7.75.47-11.06 1.3A14.72 14.72 0 0 1 35 37.5h24c0-2.7-.7-5.21-1.94-7.37z"/><circle cx="49.5" cy="37.5" r="3.5" fill="#68D4F8"/><path fill="#8DDEF9" d="M46 37.5h7a3.5 3.5 0 0 0-7 0z"/><path fill="#68D4F8" d="M21 37.5c0-10.04-11 0-12 0 1 0 12 10.04 12 0z" class="flame"/></svg></a>
      </div>
</body>

</html>
