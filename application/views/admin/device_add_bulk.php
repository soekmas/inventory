<!-- main content start-->

<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box"> <?php echo form_open(base_url() . 'index.php?admin/device_bulk_add/add/' , array('class' => 'form-horizontal group-border-dashed form-inline', 'enctype' => 'multipart/form-data'));?>
          <h4 class="text-center">Add Bulk Devices</h4>
          <hr>
          <div class="row">
          <div class="col-sm-2 ">
    <select  class="form-control select2 input-sm"  name="category_id" required>
    <option value="">Select Category</option>
      <?php
        $category = $this->db->get('category')->result_array();
        foreach ($category  as $category):
      ?>
      <option value="<?php echo $category['category_id']; ?>"> <?php echo $category['category_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-2 --> 
           

  <div class="col-sm-2 ">
    <select  class="form-control input-sm"  name="brand_id" required>
    <option value="">Select Brand</option>
      <?php
        $brands = $this->db->get('brand')->result_array();
        foreach ($brands  as $brand):
      ?>

      <option value="<?php echo $brand['brand_id']; ?>"> <?php echo $brand['brand_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 

  <div class="col-sm-2">
    <select  class="form-control input-sm"  name="supplier_id" >
      <option>Supplier</option>
      <?php
        $suppliers = $this->db->get('supplier')->result_array();
        foreach ($suppliers  as $supplier):
      ?>
      <option value="<?php echo $supplier['supplier_id']; ?>"> <?php echo $supplier['supplier_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 

  <div class="col-sm-2">
    <div class="input-group">
      <input type="text" name="purchase_date" id="purchase_date" type="date" class="form-control input-sm" placeholder="Enter purchase date" required>
      <span class="input-group-addon bg-custom b-0 text-white"><i class="fa fa-calendar" aria-hidden="true"></i></span> </div>
    <!-- input-group --> 
  </div>
  <!-- End col-6 --> 

  <div class="col-sm-2 ">
    <select  class="form-control input-sm"  name="warranty_duration" >

      <option value="30">1 Month</option>
      <option value="90">3 Month</option>
      <option value="180">6 Month</option>
      <option value="365" selected>1 Year</option>
      <option value="548">1.5 Year</option>
      <option value="730">2 Year</option>
      <option value="1095">3 Year</option>
      <option value="1460">4 Year</option>
      <option value="1825">5 Year</option>
      <option value="2920">8 Year</option>
      <option value="3650">10 Year</option>
    </select>
  </div>
  <!-- End col-6 --> 

          </div>
          <div class="table-responsive">
          <table class="m-t-30 table" id="data_table" cellpadding="10px;">
            <thead>
              <tr>
              <th>Row (add/remove)</th>
                <th>Device Name<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_device_name" type="checkbox" class="same_device_name">
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Device Description<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_desc" type="checkbox" class="same_desc" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Model
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_model" type="checkbox" class="same_model" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                
                <th>Tag/Serial No
                <br>
                  <div class="checkbox checkbox-success">
                    <input id="same_serial" type="checkbox" class="same_serial" checked>
                    <label for="checkbox-all">All Same</label>
                  </div>
                </th>
                <th>Issue To<br>
                  <div class="checkbox checkbox-success">
                    <input id="same_issue" type="checkbox" class="same_issue" checked>
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
                <td style="padding-right:5px;"><input type="text"  name="device_name[]" class="form-control input-sm device_name" required placeholder="Enter name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="description[]" class="form-control input-sm description"  placeholder="Enter asset description" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="model[]" class="form-control input-sm model"  placeholder="Enter model" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="serial_no[]" class="form-control input-sm serial_no" required placeholder="Enter serial number" /></td>
                <td style="padding-right:5px;"><input type="text"  name="issue_to[]" class="form-control input-sm issue_to"  placeholder="Enter location or user" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="device_name[]" class="form-control input-sm device_name" required placeholder="Enter name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="description[]" class="form-control input-sm description"  placeholder="Enter asset description" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="model[]" class="form-control input-sm model"  placeholder="Enter model" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="serial_no[]" class="form-control input-sm serial_no" required placeholder="Enter serial number" /></td>
                <td style="padding-right:5px;"><input type="text"  name="issue_to[]" class="form-control input-sm issue_to"  placeholder="Enter location or user" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="device_name[]" class="form-control input-sm device_name" required placeholder="Enter name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="description[]" class="form-control input-sm description"  placeholder="Enter asset description" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="model[]" class="form-control input-sm model"  placeholder="Enter model" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="serial_no[]" class="form-control input-sm serial_no" required placeholder="Enter serial number" /></td>
                <td style="padding-right:5px;"><input type="text"  name="issue_to[]" class="form-control input-sm issue_to"  placeholder="Enter location or user" /></td>
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
              </tr>
              <tr id="row_tr" style="height:40px;">
                <td><input type="button" id='add_row' class="btn btn-default btn-custom" value="+" onClick="$(this).closest('tr').clone(true).insertAfter($(this).closest('tr'));">
                  <input type="button" class="btn btn-white btn-custom" value="-" onClick="$(this).closest('tr').remove();"></td>
                <td style="padding-right:5px;"><input type="text"  name="device_name[]" class="form-control input-sm device_name" required placeholder="Enter name" /></td>
                <td style="padding-right:5px;"><input type="text"  name="description[]" class="form-control input-sm description"  placeholder="Enter asset description" /></td>
                <td style="padding-right:5px;"> <input type="text"  name="model[]" class="form-control input-sm model"  placeholder="Enter model" /></td>                
                <td style="padding-right:5px;"><input type="text"  name="serial_no[]" class="form-control input-sm serial_no" required placeholder="Enter serial number" /></td>
                <td style="padding-right:5px;"><input type="text"  name="issue_to[]" class="form-control input-sm issue_to"  placeholder="Enter location or user" /></td>
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
    // computer_name
      $(".device_name").keyup(function(){
        if($("#same_device_name").is(':checked'))
      {
        var cv=$(this).val();
        $(".device_name").val(cv);
      }
    });
  // description
      $(".description").keyup(function(){
        if($("#same_desc").is(':checked'))
      {
        var cv=$(this).val();
        $(".description").val(cv);
      }
    });
  // model
      $(".model").keyup(function(){
        if($("#same_model").is(':checked'))
      {
        var cv=$(this).val();
        $(".model").val(cv);
      }
    });
  
  // serial
      $(".serial_no").keyup(function(){
        if($("#same_serial").is(':checked'))
      {
        var cv=$(this).val();
        $(".serial_no").val(cv);
      }
    });
  // issue_to
      $(".issue_to").keyup(function(){
        if($("#same_issue").is(':checked'))
      {
        var cv=$(this).val();
        $(".issue_to").val(cv);
      }
    });
  
    </script>


<!-- date picker--> 
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> 
<!-- date picker--> 


