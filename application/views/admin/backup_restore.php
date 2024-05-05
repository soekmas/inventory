<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page"> 
  <!-- Start content -->
  <div class="content">
    <div class="container"> 
      <!-- Page-Title -->
      
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-border panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Create Backup</h3>
            </div>
            <div class="panel-body"> 
              <!-- panel  --> 
              <br>
              <br>
              <div class="col-sm-offset-3 col-sm-6 m-t-15"> <a href="<?php echo base_url().'index.php?admin/backup_restore/create'?>" class="btn btn-md btn-block btn-success">Download Backup </a> <br>
                <br>
              </div>
              <br>
              <br>
            </div>
            <!--end panel body --> 
          </div>
          <!--end panel --> 
        </div>
        <!--end col-6 --> 
        
      </div>
    </div>
  </div>
</div>
<!-- container --> 
<!-- content --> 
<script>
            var resizefunc = [];
        </script> 
<!-- jQuery  --> 
<script src="assets/js/jquery.min.js"></script> 
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
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script> 
<script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script> 

<!-- file select--> 
<script src="assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script> 
<!-- file select--> 

<!--instant image dispaly--> 
<script type="text/javascript">
   function showImg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profile_image')
                        .attr('src', e.target.result)                        
                };
                reader.readAsDataURL(input.files[0]);
              }
        }
</script> 
<!--end instant image dispaly--> 

<!-- show flash  notification--> 
<script>
        jQuery(document).ready(function() {                   
          //show update success notification
          var success_message='<?php echo $this->session->flashdata('success'); ?>';
          var errors_message='<?php echo $this->session->flashdata('error'); ?>';
          //show success notification
          if(success_message!=''){
              $.Notification.autoHideNotify('success', 'right middle', 'Successed!', success_message);
            }
          //end show success notification

          //show error notification
          if(errors_message!=''){
              $.Notification.autoHideNotify('error', 'right middle', 'Opps error occurs!', errors_message);
            }
          //end show error notification
            });
</script> 

<!-- end show flash  notification--> 

