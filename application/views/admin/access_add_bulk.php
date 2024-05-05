<!-- main content start-->

<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box"> <?php echo form_open(base_url() . 'index.php?admin/access_bulk_add/add/' , array('class' => 'form-horizontal group-border-dashed form-inline', 'enctype' => 'multipart/form-data'));?>
          <h4 class="text-center">Add Bulk Access</h4>
          <hr>
          <div class="row">
          <div class="col-sm-6  col-sm-offset-3">
    <select  class="form-control select2 input-sm"  name="apps_id" required>
    <option value="">Select Apps/Platform</option>
      <?php
        $apps = $this->db->get('apps')->result_array();
        foreach ($apps  as $apps):
      ?>
      <option value="<?php echo $apps['apps_id']; ?>"> <?php echo $apps['apps_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-2 --> 
           

  

          </div>
          <div class="table-responsive">
          <table class="m-t-30 table" id="data_table" cellpadding="10px;">
            <thead>
              <tr>
              <th>Row (add/remove)</th>
                <th>Access Name<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_access_name" type="checkbox" class="same_access_name">
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Host Name<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_host_name" type="checkbox" class="same_host_name" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>IP Address
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_ip" type="checkbox" class="same_ip" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                
                <th>Username
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_username" type="checkbox" class="same_username" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Email<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_email" type="checkbox" class="same_email" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Password<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_password" type="checkbox" class="same_password" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>

                <th>API Key<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_api" type="checkbox" class="same_api" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>

                <th>Access Token<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_access_token" type="checkbox" class="same_access_token" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>

                <th>Secret Key<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_secret_key" type="checkbox" class="same_secret_key" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>                

                <th>Additional Key1<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_key1" type="checkbox" class="same_key1" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Additional Key2<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_key2" type="checkbox" class="same_key2" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Additional Key3<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_key3" type="checkbox" class="same_key3" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Additional Key4<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_key4" type="checkbox" class="same_key4" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>

                <th>Row (add/remove)</th>
              </tr>
            </thead>
            <tbody>

              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="access_name[]" class="access_name form-control input-sm" required placeholder="Enter access name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="host_name form-control input-sm"  placeholder="Enter host name" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="ip_address[]" class=" ip_address form-control input-sm"  placeholder="Enter IP address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="username[]" class="username form-control input-sm"  placeholder="Enter username" /></td>
                <td style="padding-right:5px;"><input type="text"  name="email[]" class="email form-control input-sm"  placeholder="Enter email" /></td>
                <td style="padding-right:5px;"><input type="text"  name="password[]" class="password form-control input-sm"  placeholder="Enter password" /></td>
                <td style="padding-right:5px;"><input type="text"  name="api_key[]" class="api_key form-control input-sm"  placeholder="Enter API key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="access_token[]" class="access_token form-control input-sm"  placeholder="Enter access token" /></td>
                <td style="padding-right:5px;"><input type="text"  name="secret_key[]" class="secret_key form-control input-sm"  placeholder="Enter secret key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key1[]" class="key1 form-control input-sm"  placeholder="Enter key1" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key2[]" class="key2 form-control input-sm"  placeholder="Enter key2" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key3[]" class="key3 form-control input-sm"  placeholder="Enter key3" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key4[]" class="key4 form-control input-sm"  placeholder="Enter key4" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="access_name[]" class="access_name form-control input-sm" required placeholder="Enter access name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="host_name form-control input-sm"  placeholder="Enter host name" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="ip_address[]" class=" ip_address form-control input-sm"  placeholder="Enter IP address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="username[]" class="username form-control input-sm"  placeholder="Enter username" /></td>
                <td style="padding-right:5px;"><input type="text"  name="email[]" class="email form-control input-sm"  placeholder="Enter email" /></td>
                <td style="padding-right:5px;"><input type="text"  name="password[]" class="password form-control input-sm"  placeholder="Enter password" /></td>
                <td style="padding-right:5px;"><input type="text"  name="api_key[]" class="api_key form-control input-sm"  placeholder="Enter API key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="access_token[]" class="access_token form-control input-sm"  placeholder="Enter access token" /></td>
                <td style="padding-right:5px;"><input type="text"  name="secret_key[]" class="secret_key form-control input-sm"  placeholder="Enter secret key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key1[]" class="key1 form-control input-sm"  placeholder="Enter key1" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key2[]" class="key2 form-control input-sm"  placeholder="Enter key2" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key3[]" class="key3 form-control input-sm"  placeholder="Enter key3" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key4[]" class="key4 form-control input-sm"  placeholder="Enter key4" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="access_name[]" class="access_name form-control input-sm" required placeholder="Enter access name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="host_name form-control input-sm"  placeholder="Enter host name" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="ip_address[]" class=" ip_address form-control input-sm"  placeholder="Enter IP address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="username[]" class="username form-control input-sm"  placeholder="Enter username" /></td>
                <td style="padding-right:5px;"><input type="text"  name="email[]" class="email form-control input-sm"  placeholder="Enter email" /></td>
                <td style="padding-right:5px;"><input type="text"  name="password[]" class="password form-control input-sm"  placeholder="Enter password" /></td>
                <td style="padding-right:5px;"><input type="text"  name="api_key[]" class="api_key form-control input-sm"  placeholder="Enter API key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="access_token[]" class="access_token form-control input-sm"  placeholder="Enter access token" /></td>
                <td style="padding-right:5px;"><input type="text"  name="secret_key[]" class="secret_key form-control input-sm"  placeholder="Enter secret key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key1[]" class="key1 form-control input-sm"  placeholder="Enter key1" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key2[]" class="key2 form-control input-sm"  placeholder="Enter key2" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key3[]" class="key3 form-control input-sm"  placeholder="Enter key3" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key4[]" class="key4 form-control input-sm"  placeholder="Enter key4" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="access_name[]" class="access_name form-control input-sm" required placeholder="Enter access name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="host_name form-control input-sm"  placeholder="Enter host name" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="ip_address[]" class=" ip_address form-control input-sm"  placeholder="Enter IP address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="username[]" class="username form-control input-sm"  placeholder="Enter username" /></td>
                <td style="padding-right:5px;"><input type="text"  name="email[]" class="email form-control input-sm"  placeholder="Enter email" /></td>
                <td style="padding-right:5px;"><input type="text"  name="password[]" class="password form-control input-sm"  placeholder="Enter password" /></td>
                <td style="padding-right:5px;"><input type="text"  name="api_key[]" class="api_key form-control input-sm"  placeholder="Enter API key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="access_token[]" class="access_token form-control input-sm"  placeholder="Enter access token" /></td>
                <td style="padding-right:5px;"><input type="text"  name="secret_key[]" class="secret_key form-control input-sm"  placeholder="Enter secret key" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key1[]" class="key1 form-control input-sm"  placeholder="Enter key1" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key2[]" class="key2 form-control input-sm"  placeholder="Enter key2" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key3[]" class="key3 form-control input-sm"  placeholder="Enter key3" /></td>
                <td style="padding-right:5px;"><input type="text"  name="key4[]" class="key4 form-control input-sm"  placeholder="Enter key4" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              
            </tbody>
          </table>
          </div>          
<br>
<button type="submit" class="btn btn-success col-sm-6 waves-effect"> Submit </button>
  <br><br><br>


</form>
        </div>
        <!-- end card-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- container --> 
</div>
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
<script type="text/javascript">
$(document).ready(function() {  
$('form').parsley();
$('#purchase_date').datepicker({
                  autoclose: true,
                  todayHighlight: true
                });

} );
</script> 

<!-- Modal-Effect --> 
<script src="assets/plugins/custombox/dist/custombox.min.js"></script> 
<script src="assets/plugins/custombox/dist/legacy.min.js"></script> 



<!-- Select-2 and date picker --> 
<script>
        jQuery(document).ready(function() {          
          //show update success notification
          var success_message='<?php echo $this->session->flashdata('success'); ?>';
          if(success_message!=''){
              $.Notification.autoHideNotify('success', 'right middle', 'Successed!', success_message);
            }
          //end show update success notification

          //show update error notification
          var error_message='<?php echo $this->session->flashdata('error'); ?>';
          if(error_message!=''){
              $.Notification.autoHideNotify('success', 'right middle', 'Successed!', error_message);
            }
          //end show update error notification
                       
              
            });
</script> 
<!-- End Select-2 and date picker --> 

<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script> 

    <script type="text/javascript">
    // access_name
      $(".access_name").keyup(function(){
        if($("#same_access_name").is(':checked'))
      {
        var cv=$(this).val();
        $(".access_name").val(cv);
      }
    });
  // host_name
      $(".host_name").keyup(function(){
        if($("#same_host_name").is(':checked'))
      {
        var cv=$(this).val();
        $(".host_name").val(cv);
      }
    });

    // ip_address
      $(".ip_address").keyup(function(){
        if($("#same_ip").is(':checked'))
      {
        var cv=$(this).val();
        $(".ip_address").val(cv);
      }
    });
// username
      $(".username").keyup(function(){
        if($("#same_username").is(':checked'))
      {
        var cv=$(this).val();
        $(".username").val(cv);
      }
    });
// email
      $(".email").keyup(function(){
        if($("#same_email").is(':checked'))
      {
        var cv=$(this).val();
        $(".email").val(cv);
      }
    });
// password
      $(".password").keyup(function(){
        if($("#same_password").is(':checked'))
      {
        var cv=$(this).val();
        $(".password").val(cv);
      }
    });
// api_key
      $(".api_key").keyup(function(){
        if($("#same_api").is(':checked'))
      {
        var cv=$(this).val();
        $(".api_key").val(cv);
      }
    });
// secret_key
      $(".secret_key").keyup(function(){
        if($("#same_secret_key").is(':checked'))
      {
        var cv=$(this).val();
        $(".secret_key").val(cv);
      }
    });
// access_token
      $(".access_token").keyup(function(){
        if($("#same_access_token").is(':checked'))
      {
        var cv=$(this).val();
        $(".access_token").val(cv);
      }
    });
// key1
      $(".key1").keyup(function(){
        if($("#same_key1").is(':checked'))
      {
        var cv=$(this).val();
        $(".key1").val(cv);
      }
    });
// key2
      $(".key2").keyup(function(){
        if($("#same_key2").is(':checked'))
      {
        var cv=$(this).val();
        $(".key2").val(cv);
      }
    });
// key3
      $(".key3").keyup(function(){
        if($("#same_key3").is(':checked'))
      {
        var cv=$(this).val();
        $(".key3").val(cv);
      }
    });

// key4
      $(".key4").keyup(function(){
        if($("#same_key4").is(':checked'))
      {
        var cv=$(this).val();
        $(".key4").val(cv);
      }
    });  
    </script>  
    </script>  
    </script>


<!-- date picker--> 
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> 
<!-- date picker--> 


