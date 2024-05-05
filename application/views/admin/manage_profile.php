<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page"> 
  <!-- Start content -->
  <div class="content">
    <div class="container"> 
      <!-- Page-Title -->
      <?php foreach($profile_info as $row):?>
      <?php echo form_open(base_url() . 'index.php?admin/profile/update/' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
      <!-- panel  -->
      <div class="col-md-6">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Profile Information</h3>
          </div>
          <div class="panel-body"> 
            <!-- panel  -->
            
            <div class="profile-info-name text-center"> <img id="profile_image" src="<?php echo $this->common_model->get_image_url('user', $row['user_id']); ?>" class="thumb-lg img-circle img-thumbnail" alt="<?php echo $row['name'];?>_photo" >
              <h4 class="m-b-5"><b><?php echo $row['name'];?></b></h4>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">Change Photo</label>
              <div class="col-sm-6">
                <input type="file" onchange="showImg(this);" name="photo" class="filestyle" data-input="false" accept="image/*">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Name</label>
              <div class="col-sm-6">
                <input type="text"  value="<?php echo $row['name'];?>" name="name" class="form-control" required placeholder="Enter Name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-6">
                <input type="email"  value="<?php echo $row['email'];?>" name="email" class="form-control" required placeholder="Enter email" />
              </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
              <button type="submit" class="btn btn-success"> Update </button>
            </div>
            </form>
          </div>
          <!--end panel body --> 
        </div>
        <!--end panel --> 
      </div>
      <!--end col-6 -->
      <?php endforeach;?>
      <?php echo form_open(base_url() . 'index.php?admin/profile/change_password/' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>
      <div class="col-md-6">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Change Password</h3>
          </div>
          <div class="panel-body"> <br>
            <br>
            <br>
            <!-- panel  -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Current Password</label>
              <div class="col-sm-6">
                <input type="password"  name="password" class="form-control" required placeholder="Enter current password" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">New Password</label>
              <div class="col-sm-6">
                <input type="password"  id="new_password" name="new_password" class="form-control" required placeholder="Enter new password" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Retype New Password</label>
              <div class="col-sm-6">
                <input type="password"  data-parsley-equalto="#new_password" name="retype_new_password" class="form-control" required placeholder="Enter new password" />
              </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
              <button type="submit" class="btn btn-success">Change Now</button>
            </div>
            <br>
            <br>
            </form>
          </div>
          <!--end panel body --> 
        </div>
        <!--end panel --> 
      </div>
      <!--end col-6 --> 
      
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

