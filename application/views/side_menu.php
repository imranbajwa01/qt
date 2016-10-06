<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?php if(isset( $title)){echo $title;} else{ echo "Quotations";} ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url(); ?>images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo  (isset($user) )? $user : "Imran";?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-home"></i> Home <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/quotation"><i class="fa fa-rupee"></i> Quotations <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/cities"><i class="fa fa-map-marker"></i> Cities <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/cities/areas"><i class="fa fa-send-o"></i> City Areas <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/hotels"><i class="fa fa-suitcase"></i> Hotels <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/services"><i class="fa fa-truck"></i> Services <span class="fa fa-caret-right"></span></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/transfers"><i class="fa fa-automobile"></i> Transferrs <span class="fa fa-caret-right"></span></a></li>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->
<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
<nav class="" role="navigation">
  <div class="nav toggle">
    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
  </div>

  <ul class="nav navbar-nav navbar-right">
    <li class="">
      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo base_url(); ?>images/img.jpg" alt=""><?php echo  (isset($user) )? $user : "Imran";?>
        <span class=" fa fa-angle-down"></span>
      </a>
      <ul class="dropdown-menu dropdown-usermenu pull-right">
        <li><a href="javascript:;"> Profile</a></li>
        <li>
          <a href="javascript:;">
            <span class="badge bg-red pull-right">50%</span>
            <span>Settings</span>
          </a>
        </li>
        <li><a href="javascript:;">Help</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/user/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
      </ul>
    </li>

    <li role="presentation" class="dropdown">
      <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-envelope-o"></i>
        <span class="badge bg-green">6</span>
      </a>
      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        <li>
          <a>
            <span class="image"><img src="<?php echo base_url(); ?>images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="<?php echo base_url(); ?>images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="<?php echo base_url(); ?>images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="<?php echo base_url(); ?>images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <div class="text-center">
            <a>
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</div>
</div>
<!-- /top navigation -->
