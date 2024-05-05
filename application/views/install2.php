<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<link rel="shortcut icon" href="assets/images/favicon.ico">
<title>Install | IT Now</title>
<link rel="stylesheet" type="text/css" href="assets/css/step.css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/core.css" rel="stylesheet" type="text/css">
<link href="assets/css/components.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/pages.css" rel="stylesheet" type="text/css">
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>

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
  <div class="card-box">

    <br>
  <?php echo form_open(base_url().'index.php?install/run_install' , array('id' => 'install_form' , 'name' => 'formElem','class'=> 'form-horizontal m-t-20','role'=>'form'));?>

    <div role="application" class="wizard clearfix" id="steps-uid-1">
      <div class="steps clearfix">
        <ul role="tablist">
          <li role="tab" class="first current error" aria-disabled="false" aria-selected="true"><a id="steps-uid-1-t-0" href="#steps-uid-1-h-0" aria-controls="steps-uid-1-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Step 1</a></li>
          <li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-1" href="#steps-uid-1-h-1" aria-controls="steps-uid-1-p-1"><span class="number">2.</span> Step 2</a></li>
          <li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-2" href="#steps-uid-1-h-2" aria-controls="steps-uid-1-p-2"><span class="number">3.</span> Step 3</a></li>
          <li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-1-t-3" href="#steps-uid-1-h-3" aria-controls="steps-uid-1-p-3"><span class="number">4.</span> Step Final</a></li>
        </ul>
      </div>
      <div class="content clearfix">
        <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current">Step 1</h3>
        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">

    
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
    
    
    

           


    </section>
        <h3 id="steps-uid-1-h-1" tabindex="-1" class="title">Step 2</h3>
        <section id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;">

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


    </section>
        <h3 id="steps-uid-1-h-2" tabindex="-1" class="title">Step 3</h3>
        <section id="steps-uid-1-p-2" role="tabpanel" aria-labelledby="steps-uid-1-h-2" class="body" aria-hidden="true" style="display: none;">


    <div class="form-group text-center m-t-40">
      <div class="col-xs-12">
        <button id="btn-login" class="btn btn-success waves-effect waves-light" type="submit">Start Installation</button>
      </div>
    </div>
    </form>

          <div class="actions clearfix">
        <ul role="menu" aria-label="Pagination">
          <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
          <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
          <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
        </ul>
      </div>


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
</script>
<!-- ajax connection check end-->

<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script> 
<script type="text/javascript">
      $(document).ready(function() {
        $('form').parsley();
      });
    </script>

<script src="assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

</body>
</html>