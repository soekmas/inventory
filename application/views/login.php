<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Login | IT Inventory Neohaus</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />


        <script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/validation.min.js"></script>
        <script type="text/javascript" src="assets/js/login-form.js"></script>


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
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <div class="text-center">
                        <a href="index-2.html" class="logo">
                            <img src="assets/images/logo-mini.png"  style="margin-top:25px;" class="icon-magnet icon-c-logo" alt="Lore"> 
                            <span><img src="assets/images/logo.png"  class="md md-album" alt="Lore">
                            </span>
                        </a>
                </div>

            </div> 
		                                   
            <div class="panel-body">
                <div id="error"></div>
            <form  id="login_form" class="form-horizontal m-t-20" role="form">
                
                <div class="form-group ">
                    <div class="col-xs-12">                        
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" id="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="Password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>       
       

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button id="btn-login" class="btn btn-success btn-block text-uppercase waves-effect waves-light" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Sign In</button>
                    </div>
                </div>
            </form> 
            
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


        <script src="assets/plugins/notifyjs/dist/notify.min.js"></script>
        <script src="assets/plugins/notifications/notify-metro.js"></script>


	
	</body>
</html>