<!-- main content start-->

<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="card-box table-responsive">
          <?php
    
    foreach ( $itemes as $row):
?>
          <table class="table .table-responsive">
            <tr>
              <td>Asset Type</td>
              <td>:</td>
              <td><?php echo $row['type'];?></td>
            </tr>
            <tr>
              <td>Asset Name</td>
              <td>:</td>
              <td><?php echo $row['item_name'];?></td>
            </tr>
            <tr>
              <td>Description</td>
              <td>:</td>
              <td><?php echo $row['description'];?></td>
            </tr>
            <tr>
              <td>Serial No</td>
              <td>:</td>
              <td><?php echo $row['serial_no'];?></td>
            </tr>
            <tr>
              <td>Processor/CPU</td>
              <td>:</td>
              <td><?php echo $row['processor'];?></td>
            </tr>
            <tr>
              <td>RAM/Memory</td>
              <td>:</td>
              <td><?php echo $row['ram'];?></td>
            </tr>
            <tr>
              <td>Brand</td>
              <td>:</td>
              <td><?php echo $this->common_model->get_brand_name($row['brand_id']);?></td>
            </tr>
            <tr>
              <td>Model</td>
              <td>:</td>
              <td><?php echo $row['model'];?></td>
            </tr>
            <tr>
              <td>Operating System</td>
              <td>:</td>
              <td><?php echo $this->common_model->get_os_name($row['os_id']);?></td>
            </tr>
            <tr>
              <td>Supplier</td>
              <td>:</td>
              <td><?php echo $this->common_model->get_supplier_name($row['supplier_id']);?></td>
            </tr>
            <tr>
              <td>Purchase Date</td>
              <td>:</td>
              <td><?php echo $row['purchase_date'];?></td>
            </tr>
            <tr>
              <td>Warranty End Date</td>
              <td>:</td>
              <td><?php echo $row['warranty_end_date'];?></td>
            </tr>
            <tr>
              <td>User/Location</td>
              <td>:</td>
              <td><?php echo $row['issue_to'];?></td>
            </tr>
          </table>
          <?php endforeach; ?>
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
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script> 
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script> 
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script> 
<script src="assets/plugins/datatables/jszip.min.js"></script> 
<script src="assets/plugins/datatables/pdfmake.min.js"></script> 
<script src="assets/plugins/datatables/vfs_fonts.js"></script> 
<script src="assets/plugins/datatables/buttons.html5.min.js"></script> 
<script src="assets/plugins/datatables/buttons.print.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script> 
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script> 
<script src="assets/pages/datatables.init.js"></script> 
<script src="assets/js/jquery.core.js"></script> 
<script src="assets/js/jquery.app.js"></script> 
<script type="text/javascript">
$(document).ready(function() {  
  $('#datatable').dataTable();
  $('#datatable-keytable').DataTable( { keys: true } );
  $('#datatable-responsive').DataTable();
  $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
  var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
} );
TableManageButtons.init();
</script> 

<!-- Modal-Effect --> 
<script src="assets/plugins/custombox/dist/custombox.min.js"></script> 
<script src="assets/plugins/custombox/dist/legacy.min.js"></script> 

<!-- Ajax Delete --> 
<script type="text/javascript">
function delete_item(item_id) {
  var delID='#'+item_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/item/delete/'+item_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected Item information delete.");
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
          $(".select2").select2();    

          
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
      $(document).ready(function() {
        $('form').parsley();
      });
    </script> 
<!-- Date picker auto-close --> 
<script src="assets/plugins/moment/moment.js"></script> 
<!-- date picker--> 
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> 
<!-- date picker--> 
<!-- select2--> 
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script> 
<!-- select2--> 

