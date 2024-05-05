<!-- main content start-->

<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box"> <?php echo form_open(base_url() . 'index.php?admin/ip_bulk_add/add/' , array('class' => 'form-horizontal group-border-dashed form-inline', 'enctype' => 'multipart/form-data'));?>
          <h4 class="text-center">Add Bulk IP details</h4>
          <hr>
          <div class="table-responsive">
          <table class="m-t-30 table" id="data_table" cellpadding="10px;">
            <thead>
              <tr>
              <th>Row (add/remove)</th>
                <th>Host Name<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_host_name" type="checkbox" class="same_host_name">
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Mac<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_mac" type="checkbox" class="same_mac" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>IPV4
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_ipv4" type="checkbox" class="same_ipv4" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>IPV6
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_ipv6" type="checkbox" class="same_ipv6" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>                
                <th>Subnet Mask
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_subnet" type="checkbox" class="same_subnet" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Gateway
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_gateway" type="checkbox" class="same_gateway" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>DNS1<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_dns1" type="checkbox" class="same_dns1" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>DNS2<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_dns2" type="checkbox" class="same_dns2" checked>
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
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="form-control input-sm host_name" placeholder="Enter host or location or user name" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="mac[]" data-mask="**.**.**.**.**.**.**.**" class="form-control input-sm mac"  placeholder="Enter mac Address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv4[]"  class="form-control input-sm ipv4"  placeholder="Enter IPv4 address" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv6[]" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control input-sm ipv6"  placeholder="Enter IPv6 Address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="subnet[]" class="form-control input-sm subnet"  placeholder="Enter subnet mask" /></td>
                <td style="padding-right:5px;"><input type="text"  name="gateway[]"  class="form-control input-sm gateway"  placeholder="Enter gateway ip address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns1[]"  class="form-control input-sm dns1"  placeholder="Enter dns server address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns2[]"  class="form-control input-sm dns2"  placeholder="Enter alternative dns server address" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>

              <tr id="row_tr" style="height:40px;">
              <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="form-control input-sm host_name" placeholder="Enter host or location or user name" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="mac[]" data-mask="**.**.**.**.**.**.**.**" class="form-control input-sm mac"  placeholder="Enter mac Address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv4[]"  class="form-control input-sm ipv4"  placeholder="Enter IPv4 address" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv6[]" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control input-sm ipv6"  placeholder="Enter IPv6 Address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="subnet[]" class="form-control input-sm subnet"  placeholder="Enter subnet mask" /></td>
                <td style="padding-right:5px;"><input type="text"  name="gateway[]"  class="form-control input-sm gateway"  placeholder="Enter gateway ip address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns1[]"  class="form-control input-sm dns1"  placeholder="Enter dns server address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns2[]"  class="form-control input-sm dns2"  placeholder="Enter alternative dns server address" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>

              <tr id="row_tr" style="height:40px;">
              <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="form-control input-sm host_name" placeholder="Enter host or location or user name" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="mac[]" data-mask="**.**.**.**.**.**.**.**" class="form-control input-sm mac"  placeholder="Enter mac Address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv4[]"  class="form-control input-sm ipv4"  placeholder="Enter IPv4 address" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv6[]" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control input-sm ipv6"  placeholder="Enter IPv6 Address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="subnet[]" class="form-control input-sm subnet"  placeholder="Enter subnet mask" /></td>
                <td style="padding-right:5px;"><input type="text"  name="gateway[]"  class="form-control input-sm gateway"  placeholder="Enter gateway ip address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns1[]"  class="form-control input-sm dns1"  placeholder="Enter dns server address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns2[]"  class="form-control input-sm dns2"  placeholder="Enter alternative dns server address" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>

              <tr id="row_tr" style="height:40px;">
              <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="host_name[]" class="form-control input-sm host_name" placeholder="Enter host or location or user name" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="mac[]" data-mask="**.**.**.**.**.**.**.**" class="form-control input-sm mac"  placeholder="Enter mac Address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv4[]"  class="form-control input-sm ipv4"  placeholder="Enter IPv4 address" required /></td>
                <td style="padding-right:5px;"><input type="text"  name="ipv6[]" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control input-sm ipv6"  placeholder="Enter IPv6 Address" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="subnet[]" class="form-control input-sm subnet"  placeholder="Enter subnet mask" /></td>
                <td style="padding-right:5px;"><input type="text"  name="gateway[]"  class="form-control input-sm gateway"  placeholder="Enter gateway ip address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns1[]"  class="form-control input-sm dns1"  placeholder="Enter dns server address" /></td>
                <td style="padding-right:5px;"><input type="text"  name="dns2[]"  class="form-control input-sm dns2"  placeholder="Enter alternative dns server address" /></td>
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
} );
</script> 

<!-- Modal-Effect --> 
<script src="assets/plugins/custombox/dist/custombox.min.js"></script> 
<script src="assets/plugins/custombox/dist/legacy.min.js"></script> 

<!-- Ajax Delete --> 
<script type="text/javascript">
function delete_computer(computer_id) {
  var delID='#'+computer_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/computer/delete/'+computer_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected computer information delete.");
      }
    });
  }

}
</script> 
<!-- End Ajax Delete --> 

<!-- show Ajax Modal content --> 
<script type="text/javascript">
function show_modal(url)
{    
  jQuery('#popup_modal .panel-body').html('<div style="text-align:center;margin-top:200px;"><img src="assets/images/preloader.gif" /></div>');
  jQuery('#popup_modal').modal('show', {backdrop: 'true'});
  $.ajax({
    url: url,
    success: function(response)
    {
      jQuery('#popup_modal .panel-body').html(response);
    }
  });
}
</script> 

<!-- End Ajax Modal content --> 

<!-- modal-->
<div id="popup_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content p-0 b-0">
      <div class="panel panel-color panel-success">
        <div class="panel-heading">
          <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="panel-title">Asset Information</h3>
        </div>
        <div class="panel-body"> </div>
        <div class="modal-footer"> </div>
      </div>
    </div>
  </div>
</div>
<!-- End  Modal --> 

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
    // host name
      $(".host_name").keyup(function(){
        if($("#same_host_name").is(':checked'))
      {
        var cv=$(this).val();
        $(".host_name").val(cv);
      }
    });
  // mac
      $(".mac").keyup(function(){
        if($("#same_mac").is(':checked'))
      {
        var cv=$(this).val();
        $(".mac").val(cv);
      }
    });
  // ipv4
      $(".ipv4").keyup(function(){
        if($("#same_ipv4").is(':checked'))
      {
        var cv=$(this).val();
        $(".ipv4").val(cv);
      }
    });
  // ipv4
      $(".ipv6").keyup(function(){
        if($("#same_ipv6").is(':checked'))
      {
        var cv=$(this).val();
        $(".ipv6").val(cv);
      }
    });
  // subnet
      $(".subnet").keyup(function(){
        if($("#same_subnet").is(':checked'))
      {
        var cv=$(this).val();
        $(".subnet").val(cv);
      }
    });
  // gateway
      $(".gateway").keyup(function(){
        if($("#same_gateway").is(':checked'))
      {
        var cv=$(this).val();
        $(".gateway").val(cv);
      }
    });
  // ipv4
      $(".dns1").keyup(function(){
        if($("#same_dns1").is(':checked'))
      {
        var cv=$(this).val();
        $(".dns1").val(cv);
      }
    });
  // ipv4
      $(".dns2").keyup(function(){
        if($("#same_dns2").is(':checked'))
      {
        var cv=$(this).val();
        $(".dns2").val(cv);
      }
    });
    </script>


<!-- date picker--> 
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> 
<!-- date picker--> 


