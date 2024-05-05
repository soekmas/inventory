<?php
    date_default_timezone_set("Asia/Dhaka");
    $system_name        =   $this->db->get_where('config' , array('title'=>'system_name'))->row()->value;
    $company_name        =   $this->db->get_where('config' , array('title'=>'company_name'))->row()->value;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="-IT Inventory Neohaus-">
<meta name="author" content="NeoHaus">
<meta name="copyright" content="Copyright (c) 2017 Neohaus">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
<title>Sistem Inventaris SD Kedung Waringin 5</title>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
<!--date picker -->
<link href="assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">


<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<script src="assets/js/modernizr.min.js"></script>
</head>
<body class="fixed-left">
<div class="animationload">
  <div class="loader"></div>
</div>
<!-- Begin page -->
<div id="wrapper"> 
  <!-- Top Bar Start -->
  <div class="topbar"> 
    <!-- LOGO -->
    <div class="topbar-left">
      <div class="text-center"> <a href="<?php echo base_url();?>" class="logo"> <img src="assets/images/logo-mini.png"  style="margin-top:25px;margin-left:10px;" class="icon-magnet icon-c-logo" alt="IT NOW"> <span><img src="assets/images/logo.png"  style="margin-top:15px;margin-left:-25px;" class="md md-album" alt="IT NOW"></span> </a> </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="">
          <div class="pull-left">
            <button class="button-menu-mobile open-left"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
            <span class="clearfix"></span> </div>
          <div class="navbar-left  pull-left hidden-xs">
            <h2 class="company-name"><?php echo $company_name;?></h2>
          </div>
          <ul class="nav navbar-nav navbar-right pull-right">
            <li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true"><img  src="<?php echo $this->common_model->get_image_url('user', $this->session->userdata('user_id'));?>" class="thumb-lg img-circle img-thumbnail" alt="photo" ></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>index.php?admin/manage_profile"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                <li><a href="<?php echo base_url();?>index.php?admin/manage_profile"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a></li>
                <li><a href="<?php echo base_url();?>index.php?login/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
  <!-- Top Bar End -->
  <?php  include'navigation.php';?>
  <?php  include $page_name.'.php';?>
  <?php include 'footer.php';?>
</div>

<!-- Dynamic content from here -->

</div>
<!-- END wrapper --> 
<!-- notify--> 
<script src="assets/plugins/notifyjs/dist/notify.min.js"></script> 
<script src="assets/plugins/notifications/notify-metro.js"></script> 
<!-- END notify-->
</body>
</html>
