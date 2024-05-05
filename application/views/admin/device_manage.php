<!-- main content start-->
<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <button onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/device_add' . "'";?>)" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus"></i> Add Device</button>
          <button onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/category_add' . "'";?>)" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus"></i> Add Category</button>
          <a href="<?php echo base_url() . 'index.php?admin/device_bulk_add'?>" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus"></i> Add Bulk Devices</a>
          <br>
          <br>
          <div class="tabs-vertical-env">
            <ul class="nav tabs-vertical">
              <?php $cat_sl=0;
          $categories = $this->db->get('category')->result_array();
          foreach ($categories as $category):
            $cat_sl++;
            ?>
              <li class="<?php if($cat_sl==1){ echo "active";} ?> tab"> <a href="<?php echo '#cat_'.$category['category_id'];?>" data-toggle="tab" aria-expanded="false"></span> <span class="hidden-xs"><?php echo $category['category_name'];?></span> </a> </li>
              <?php endforeach; ?>
              <li class=" tab"> <a href="#manage_category" data-toggle="tab" aria-expanded="false"></span> <span class="hidden-xs">Manage Category</span> </a> </li>
            </ul>
            <div class="tab-content">
              <?php $cat_sl=0;
          $categories = $this->db->get('category')->result_array();
          foreach ($categories as $category):
            $cat_sl++;
            ?>
              <div class="tab-pane <?php if($cat_sl==1){ echo "active";} ?>" id="<?php echo 'cat_'.$category['category_id'];?>">
                <table id="datatable-buttons<?php echo $category['category_id'];?>" class="table table-striped table-success">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Brand</th>
                      <th>Model</th>
                      <th>Location</th>
                      <th>__Action__</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sl = 1;
                  		$devices=$this->db->get_where('device', array('category_id='=>$category['category_id']))->result_array();
                      	$today=date_create(date('Y-m-d'));
                    foreach ($devices as $device):
                      	$purchase_date=date_create($device['purchase_date']);
                      	$warranty_end_date=date_create($device['warranty_end_date']);
                      	$warranty_days=date_diff($today,$warranty_end_date);
                      	$warranty_due_days=$warranty_days->format("%r%a");

              ?>
                    <tr id='<?php echo $device['device_id'];?>'>
                      <td><?php echo $sl++;?></td>
                      <td><strong><?php echo $device['device_name'];?></strong></td>
                      <td><?php echo $this->common_model->get_brand_name($device['brand_id']);?></td>
                      <td><?php echo $device['model'];?></td>
                      <td><?php echo $device['issue_to'];?></td>
                      <td><div class="btn-group m-b-20"> <a title="Details" class="btn btn-icon waves-effect waves-light btn-info btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/device_detail/'. $device['device_id'] . "'";?>)"><i class="fa fa-info-circle" aria-hidden="true"></i></a> <a title="Copy" class="btn btn-icon waves-effect waves-light btn-success btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/device_copy/'. $device['device_id'] . "'";?>)"><i class="fa fa-files-o" aria-hidden="true"></i></a> <a title="Edit" class="btn btn-icon waves-effect waves-light btn-inverse btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/device_edit/'. $device['device_id'] . "'";?>)"><i class="fa fa-pencil"></i></a> <a title="Delete" class="btn btn-icon waves-effect waves-light btn-danger btn-xs" onclick="delete_device(<?php echo $device['device_id'];?>)" href="#" class="delete"><i class="fa fa-remove"></i></a> </div></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="manage_category">
                <table id="datatable-buttons" class="table table-striped table-success">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sl = 1;                  
                  $categories=$this->db->get('category')->result_array();
                    foreach ($categories as $category):                    

              ?>
                    <tr id='<?php echo $category['category_id'];?>'>
                      <td><?php echo $sl++;?></td>
                      <td><strong><?php echo $category['category_name'];?></strong></td>
                      <td><?php echo $category['category_desc'];?></td>
                      <td><div class="btn-group m-b-20"> <a title="Edit" class="btn btn-icon waves-effect waves-light btn-inverse btn-xs" onclick="show_modal('<?php echo base_url() . 'index.php?admin/popup_modal/category_edit/'. $category['category_id'] . "'";?>)"><i class="fa fa-pencil"></i></a> <a title="Delete" class="btn btn-icon waves-effect waves-light btn-danger btn-xs" onclick="delete_category(<?php echo $category['category_id'];?>)" href="#" class="delete"><i class="fa fa-remove"></i></a> </div></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <?php endforeach;?>
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
  <?php 
  $apps = $this->db->get('apps')->result_array();
  foreach ($apps as $app): ?>
$('<?php echo'#datatable-buttons'.$app['apps_id'];?>').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
<?php endforeach;?>

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
function delete_device(device_id) {
  var delID='#'+device_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/device/delete/'+device_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected device information deleted.");
      }
    });
  }

}


function delete_category(category_id) {
  var delID='#'+category_id
  var base_url='<?php echo base_url();?>'
  url =base_url+'index.php?admin/category/delete/'+category_id
  if(confirm("Are you sure you want to delete this?"))
  {
    $.ajax({
      url: url,
      success: function(response)
      {
        $(delID).fadeOut(2000);
        $.Notification.autoHideNotify('success', 'right middle', 'Successed!', "Selected category information deleted.");
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
          <h3 class="panel-title">Devices</h3>
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

