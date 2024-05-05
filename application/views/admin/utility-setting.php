<!-- main content start-->
<?php $today=date_create(date('Y-m-d')); ?>

<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <button onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/brand_add' . "'";?>)" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus"></i> Add New Brand</button>
          <button onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/supplier_add' . "'";?>)" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus"></i> Add New Supplier</button>
          <br>
          <br>
          <ul class="nav nav-tabs tabs tabs-top">
            <li class="active tab"> <a href="#brand" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-server" aria-hidden="true"></i></span> <span class="hidden-xs">Brand</span> </a> </li>
            <li class="tab"> <a href="#supplier" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="hidden-xs">Supplier</span> </a> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="brand">
              <table id="datatable-buttons1" class="table table-striped table-success">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $sl = 1;
                  $brands        = $this->db->get('brand')->result_array();                      
                    foreach ($brands as $brand):

              ?>
                  <tr id='brand_<?php echo $brand['brand_id'];?>'>
                    <td><?php echo $sl++;?></td>
                    <td><strong><?php echo $brand['brand_name'];?></strong></td>
                    <td><?php echo $brand['description'];?></td>
                    <td><div class="btn-group m-b-20"> <a title="Edit" class="btn btn-icon waves-effect waves-light btn-inverse btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/brand_edit/'. $brand['brand_id'] . "'";?>)"><i class="fa fa-pencil"></i></a> <a title="Delete" class="btn btn-icon waves-effect waves-light btn-danger btn-xs" onclick="delete_brand(<?php echo $brand['brand_id'];?>)" href="#" class="delete"><i class="fa fa-remove"></i></a> </div></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane active" id="supplier">
              <table id="datatable-buttons2" class="table table-striped table-success">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Supplier Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <tbody>
                  <?php $sl = 1;
                  $supplieres        = $this->db->get('supplier')->result_array();                      
                    foreach ($supplieres as $supplier):

              ?>
                  <tr id='supplier_<?php echo $supplier['supplier_id'];?>'>
                    <td><?php echo $sl++;?></td>
                    <td><strong><?php echo $supplier['supplier_name'];?></strong></td>
                    <td><?php echo $supplier['supplier_address'];?></td>
                    <td><?php echo $supplier['supplier_phone'];?></td>
                    <td><?php echo $supplier['supplier_email'];?></td>
                    <td><div class="btn-group m-b-20"> <a title="Edit" class="btn btn-icon waves-effect waves-light btn-inverse btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/supplier_edit/'. $supplier['supplier_id'] . "'";?>)"><i class="fa fa-pencil"></i></a> <a title="Delete" class="btn btn-icon waves-effect waves-light btn-danger btn-xs" onclick="delete_supplier(<?php echo $supplier['supplier_id'];?>)" href="#" class="delete"><i class="fa fa-remove"></i></a> </div></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
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
$('#datatable-buttons1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } ); 
    $('#datatable-buttons2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    
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
function delete_brand(brand_id) {
  var delID='#brand_'+brand_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/brand/delete/'+brand_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected brand information delete.");
      }
    });
  }

}

function delete_supplier(supplier_id) {
  var delID='#supplier_'+supplier_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/supplier/delete/'+supplier_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected supplier information delete.");
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
          <h3 class="panel-title">Brand & Supplier</h3>
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

