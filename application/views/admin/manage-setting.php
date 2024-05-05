<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


<div class="content-page"> 
  <!-- Start content -->
  <div class="content">
    <div class="container"> 
      <!-- Page-Title --> 
      
      <?php echo form_open(base_url() . 'index.php?admin/setting/update/' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
      <!-- panel  -->
      <div class="col-md-6">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Setting Information</h3>
          </div>
          <div class="panel-body"> 
            <!-- panel  -->
            
            <div class="form-group">
              <label class="col-sm-3 control-label">Company Name</label>
              <div class="col-sm-6">
                <input type="text"  value="<?php echo $this->db->get_where('config' , array('title' =>'company_name'))->row()->value;?>" name="company_name" class="form-control" required placeholder="Enter company name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Address</label>
              <div class="col-sm-6">
                <input type="text"  value="<?php echo $this->db->get_where('config' , array('title' =>'address'))->row()->value;?>" name="address" class="form-control" required placeholder="Enter address" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Phone No</label>
              <div class="col-sm-6">
                <input type="number"  value="<?php echo $this->db->get_where('config' , array('title' =>'phone'))->row()->value;?>" name="phone" class="form-control" required placeholder="Enter phone" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-6">
                <input type="email"  value="<?php echo $this->db->get_where('config' , array('title' =>'system_email'))->row()->value;?>" name="system_email" class="form-control" required placeholder="Enter email" />
              </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
              <button type="submit" class="btn btn-success">Update </button>
            </div>
            </form>
          </div>
          <!--end panel body --> 
        </div>
        <!--end panel --> 
      </div>
      <!--end col-6 --> 
      
      <?php echo form_open(base_url() . 'index.php?admin/setting/change_logo' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>
      <div class="col-md-6">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Change Logo</h3>
          </div>
          <div class="panel-body"> <br>
            <br>
            <!-- panel  -->
            <div class="profile-info-name text-center"> <img id="logo_img" src="<?php echo base_url().'uploads/system_logo/logo.png'; ?>" class="thumb-lg img-circle img-thumbnail" alt="logo" > </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-3">Select Logo</label>
              <div class="col-sm-6">
                <input type="file" onchange="showImg(this);" name="logo" class="filestyle" data-input="false" accept="image/*">
              </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
              <button type="submit" class="btn btn-success">Save Now</button>
            </div>
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
                    $('#logo_img')
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
              $.Notification.autoHideNotify('error', 'right middle', 'Successed!', errors_message);
            }
          //end show error notification
            });
</script> 

<!-- end show flash  notification--> 

