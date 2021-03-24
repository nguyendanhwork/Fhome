
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
   
      <div class="logo"><a href="index.php" class="simple-text logo-normal">
          ADMINISTRATOR
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Menu</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?ctrl=catalog">
              <i class="material-icons">add_box</i>
              <p>Danh mục</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?ctrl=kindofroom">
              <i class="material-icons">add_box</i>
              <p>Loại Phòng</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?ctrl=styleofroom">
              <i class="material-icons">add_box</i>
              <p>Kiểu Phòng</p>
            </a>
          </li>
          
            <li class="nav-item ">
            <a class="nav-link" href="index.php?ctrl=city">
              <i class="material-icons">add_box</i>
              <p>Thành phố</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=agency">
              <i class="material-icons">add_box</i>
              <p>Chi nhánh</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=room">
              <i class="material-icons">add_box</i>
              <p>Phòng</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=scheduled">
              <i class="material-icons">add_box</i>
              <p>Đặt lịch</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=comment">
              <i class="material-icons">add_box</i>
              <p>Nhận xét</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=newscatalog">
              <i class="material-icons">add_box</i>
              <p>Danh mục Tin tức</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=news">
              <i class="material-icons">add_box</i>
              <p>Tin tức</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=banner">
              <i class="material-icons">add_box</i>
              <p>Quảng cáo</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php?ctrl=customer">
              <i class="material-icons">add_box</i>
              <p>Khách hàng</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="">Hello <?php echo $_SESSION['ad']?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">0</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div> -->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['ad'];  ?></a>

                  <a class="dropdown-item" href="index.php?ctrl=logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
     
     
  
  
  <!--   Core JS Files   -->

