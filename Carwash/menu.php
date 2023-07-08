<!-- sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu">

<!-- logo start -->
<div class="logo">
  <h1><a href="index.php">Collective</a></h1>
</div>

<!-- if logo is image enable this -->
<!-- image logo -- -->
<!-- <div class="logo">
  <a href="index.html">
    <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
  </a>
</div> -->
 <!-- //image logo -->

<div class="logo-icon text-center">
  <a href="index.php" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
</div>
<!-- //logo end -->

<div class="sidebar-menu-inner">

  <!-- sidebar nav start -->
 <ul class="nav nav-pills nav-stacked custom-nav">
    <li class="active"><a href="index.php"><i class="fa fa-tachometer" title="Dashboard"></a></i>
    <!-- <li><a href="users.php"><i class="fa fa-users" title="Usuários"></i></a></li> -->
    <li><a href="register.php"><i class="fa fa-clipboard" title="Cadastro" class="id"></i></a></li>
    <li><a href="search.php"><i class="fa fa-search" title="Consultas" class="id"></i></a></li>
    <!-- <li><a href="#"><i class="fa fa-file-text-o" title="Registro de actividades"></i></a></li> -->
  </ul>
  <!-- //sidebar nav end -->
  <!-- toggle button start -->
 <!--  <a class="toggle-btn">
    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
  </a> -->
  <!-- //toggle button end -->
</div>
</div>
<!-- //sidebar menu end -->
<!-- header-starts -->
<div class="header sticky-header">

<!-- notification menu start -->
<div class="menu-right">
  <div class="navbar user-panel-top">
    <!-- <div class="search-box">
      <form action="#search-results.html" method="get">
        <input class="search-input" placeholder="Search Here..." type="search" id="search">
        <button class="search-submit" value=""><span class="fa fa-search"></span></button>
      </form></div> -->
    <div class="user-dropdown-details d-flex">
     <!--  <div class="profile_details_left">
        <ul class="nofitications-dropdown">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
            <ul class="dropdown-menu">

              <li>
                <div class="notification_header">
                  <h3>You have 3 new notifications</h3>
                </div> -->
             <!--  </li>
              <li><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>Johnson purchased template</p>
                    <span>Just Now</span>
                  </div>
                </a></li>
              <li class="odd"><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>New customer registered </p>
                    <span>1 hour ago</span>
                  </div>
                </a></li>
              <li><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>Lorem ipsum dolor sit amet </p>
                    <span>2 hours ago</span>
                  </div>
                </a></li>
              <li> -->
                <!-- <div class="notification_bottom">
                  <a href="#all" class="bg-primary">See all notifications</a>
                </div>
              </li>
            </ul>
          </li> -->
         <!--  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="notification_header">
                  <h3>You have 4 new messages</h3>
                </div>
              </li>
              <li><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>Johnson purchased template</p>
                    <span>Just Now</span>
                  </div>
                </a></li>
              <li class="odd"><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>New customer registered </p>
                    <span>1 hour ago</span>
                  </div>
                </a></li>
              <li><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>Lorem ipsum dolor sit amet </p>
                    <span>2 hours ago</span>
                  </div>
                </a></li>
              <li><a href="#" class="grid">
                  <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                  <div class="notification_desc">
                    <p>Johnson purchased template</p>
                    <span>Just Now</span>
                  </div>
                </a></li>
              <li> -->
                <!-- <div class="notification_bottom">
                  <a href="#all" class="bg-primary">See all messages</a>
                </div> -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="profile_details">
        <ul>
          <li class="dropdown profile_details_drop">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
              aria-expanded="false">
              <div class="profile_img">
                <i class="fa fa-user-circle" id="user"></i>
               <!--  <div class="user-active">
                  <span></span>
                </div> -->
              </div>
            </a>
            <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
              <li class="user-info">
                <h5 class="user-name"><?php echo $_SESSION['nome']; ?></h5>
                <span class="status ml-2">Arroz</span><br>
                <span class="status ml-2">Activo</span>
              </li>
              <li class="logout"> <a href="../logout.php"><i class="fa fa-power-off"></i>Sair</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--notification menu end -->
</div>
<!-- //header-ends -->