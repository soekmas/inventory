<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<link rel="shortcut icon" href="assets/images/favicon.ico">
<title>Install | IT Now</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validation.min.js"></script>

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

<script src="assets/js/modernizr.min.js"></script>
</head>
<body>
<script type="text/javascript">
            var baseurl=<?php echo base_url();?>
        </script>
<div class="animationload">
  <div class="loader"></div>
</div>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="install-page">
  <div class=" card-box">
    <div class="text-center"> <a href="index-2.html" class="logo"> <img src="assets/images/logo-mini.png"  style="margin-top:25px;" class="icon-magnet icon-c-logo" alt="IT NOW"> <span><img src="assets/images/logo.png"  class="md md-album" alt="IT NOW"> </span> </a> </div>
    <br>
    <?php 
    if($msg!=''){
      echo "<div class='alert alert-danger'><strong>Opps!</strong> Database username or password not correct.Or your database is not exist.</div>";
    }
    ?>
    
      <h2 class="text-center">Welcome to IT NOW web installer</h2>
      <p class="text-center"> Install the application by providing database and admin information <br>
        and run the installer. It's easy ! </p>
      <?php
      // Checking whether db config file is writtable
      $is_writable_autoload   = is_writable('./application/config/autoload.php');
      $is_writable_database   = is_writable('./application/config/database.php');
      $is_writable_routes     = is_writable('./application/config/routes.php');
      $is_curl_enable         = in_array  ('curl', get_loaded_extensions());
      if ($is_writable_database   = true ):?>
      <i class="fa fa-check text-success" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;OK ! 'application/config/database.php' is <span style="color:#063;font-weight:bold;">writtable</span><br>
      <?php
  else:?>
      <i class="fa fa-check text-danger" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;Opps ! 'application/config/database.php' is not <span style="color:#063;font-weight:bold;">writtable</span><br>
      <?php endif;?>

      <?php
  if ($is_writable_autoload   = true ):?>

      <i class="fa fa-check text-success" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;OK ! 'application/config/autoload.php' is <span style="color:#063;font-weight:bold;">writtable</span><br>
      <?php
  else:?>
      <i class="fa fa-check text-danger" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;Opps ! 'application/config/autoload.php' is not <span style="color:#063;font-weight:bold;">writtable</span><br>
      <?php endif;?>


      <?php
      // Checking whether db config file is writtable
  if ($is_writable_routes =true ):?>
      <i class="fa fa-check text-success" aria-hidden="true" style="margin-left:20px;"></i> &nbsp; OK ! 'application/config/routes.php' is <span style="color:#063;font-weight:bold;">writtable</span><br>
      
      <?php
      else:?>
      <i class="fa fa-check text-danger" aria-hidden="true" style="margin-left:20px;"></i> &nbsp; Opps ! 'application/config/routes.php' is not <span style="color:#063;font-weight:bold;">writtable</span><br>
      <?php endif;?>
      <?php
      // Checking whether db config file is writtable
  if ($is_curl_enable =true ):?>
      <i class="fa fa-check text-success" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;OK ! php CURL function is <span style="color:#063;font-weight:bold;">enable</span><br>
      <?php
  else:?>
      <i class="fa fa-check text-danger" aria-hidden="true" style="margin-left:20px;"></i> &nbsp;Opps ! php CURL function is not <span style="color:#063;font-weight:bold;">enable</span><br>
      <?php endif;?>
      <?php if($is_writable_autoload!=false || $is_writable_database !=false || $is_writable_routes!=false || $is_curl_enable!=false): ?>
    
    
    
    <?php echo form_open(base_url().'index.php?install/run_install' , array('id' => 'install_form' , 'name' => 'formElem','class'=> 'form-horizontal m-t-20','role'=>'form'));?>
    


        <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Database setting</h3>
          </div>
          <div class="panel-body">
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="hostname" name="hostname" value="localhost" class="form-control" placeholder="Host name / Server IP" required>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="db_username" name="db_username" class="form-control" placeholder="Database Username" required>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="db_password" name="db_password"  class="form-control" placeholder="Database Password" >
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="db_name" name="db_name" class="form-control" placeholder="Database Name" required>
              </div>
            </div>
            <div id="error"></div>
            <a id="btn_check"  class="btn btn-icon waves-effect waves-light btn-success btn-sm">Check database coonection</a> </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Administration setting</h3>
          </div>
          <div class="panel-body">
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company name / Website name" required>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="text" id="login_username" name="login_username" class="form-control" placeholder="Login Username" required>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input type="password" id="login_password" name="login_password"  class="form-control" placeholder="Login Password" required>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group text-center m-t-40">
      <div class="col-xs-12">
        <button id="btn-login" class="btn btn-success waves-effect waves-light" type="submit">Start Installation</button>
      </div>
    </div>
    </form>
  <?php endif;?>
  </div>
</div>
</div>
<script>
  var resizefunc = [];
</script> 

<!-- jQuery  --> 
<!-- <script src="assets/js/jquery.min.js"></script> --> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/detect.js"></script> 
<script src="assets/js/fastclick.js"></script> 
<script src="assets/js/jquery.slimscroll.js"></script> 
<script src="assets/js/jquery.blockUI.js"></script> 
<script src="assets/js/waves.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/jquery.nicescroll.js"></script> 
<script src="assets/js/jquery.scrollTo.min.js"></script> 
<script src="assets/js/jquery.core.js"></script> 
<script src="assets/js/jquery.app.js"></script> 


<!-- ajax connection check-->
<script type="text/javascript">
$('#btn_check').click(function() { 
                                
          hostname=$("#hostname").val();       
          db_username=$("#db_username").val();
          db_password=$("#db_password").val();
          db_name=$("#db_name").val();

        $.ajax({
            type : 'POST',
            url  : 'index.php?install/check_installation_connection',
            data: "hostname="+hostname+"&db_username="+db_username+"&db_password="+db_password+"&db_name="+db_name,
            dataType: 'json',
            beforeSend: function()
            {   
                $("#error").fadeOut();
                $("#btn_check").html('<i class="fa-li fa fa-spinner fa-spin"></i> &nbsp; Checking!! &nbsp;Wait...');
                
            },
            success :  function(response)
               {             
                var connection_status = response.connection_status;    
                   
              if(connection_status =="success"){
                $("#error").fadeIn();
                $("#btn_check").html('<i class="fa fa-check" aria-hidden="true"></i> &nbsp; Connection OK');
                $("#error").html('<div class="alert alert-success"><strong>Well done!</strong> Your database connection is ready to install.</div>');
                }
              else{ 
                $("#error").fadeIn();
                $("#btn_check").html('Check  connection again');
                $("#error").html('<div class="alert alert-danger"><strong>Opps!</strong> Database username or password not correct.Or your database is not exist.</div>');
              }            
        }
     });
});

$('#btn_check_pc').click(function() { 
                                
          buyer=$("#buyer").val();       
          purchase_code=$("#purchase_code").val();

        $.ajax({
            type : 'POST',
            url  : 'index.php?install/ajax_check_purchase_code',
            data: "buyer="+buyer+"&purchase_code="+purchase_code,
            dataType: 'json',
            beforeSend: function()
            {   
                $("#error").fadeOut();
                $("#btn_check_pc").html('<i class="fa-li fa fa-spinner fa-spin"></i> &nbsp; Checking!! &nbsp;Wait...');
                
            },
            success :  function(response)
               {             
                var purchase_status = response.purchase_status;    
                   
              if(purchase_status =="valid"){
                $("#error").fadeIn();
                $("#btn_check_pc").html('<i class="fa fa-check" aria-hidden="true"></i> &nbsp; OK!! purchase code is valid');
                $("#btn_check_pc").addClass('disable');
                $("#error_pc").html('<div class="alert alert-success"><strong>Success!</strong> Your item purchase code is verified.</div>');
                }
              else{ 
                $("#error").fadeIn();
                $("#btn_check_pc").html('Check again');
                $("#error_pc").html('<div class="alert alert-danger"><strong>Oops!</strong> Item purchase code is not valid.Or Internet connection is not working.</div>');
              }            
        }
     });
});
</script>
<!-- ajax connection check end-->

<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script> 
<script type="text/javascript">
      $(document).ready(function() {
        $('form').parsley();
      });
    </script> 
</body>
</html>