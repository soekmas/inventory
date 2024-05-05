<?php 
    $suppliers    = $this->db->get_where('supplier' , array('supplier_id' => $param2) )->result_array();
    foreach ( $suppliers as $row):
?>
<?php echo form_open(base_url() . 'index.php?admin/supplier/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Edit Supplier</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Supplier Name</label>
  <div class="col-sm-6">
    <input type="text"  name="supplier_name" value="<?php echo $row['supplier_name'];?>" class="form-control" required placeholder="Enter supplier name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Address</label>
  <div class="col-sm-6">
    <input type="text"  name="supplier_address" value="<?php echo $row['supplier_address'];?>" class="form-control"  placeholder="Enter supplier address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Phone</label>
  <div class="col-sm-6">
    <input type="text"  name="supplier_phone" value="<?php echo $row['supplier_phone'];?>" class="form-control"  placeholder="Enter supplier phone" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Email</label>
  <div class="col-sm-6">
    <input type="text"  name="supplier_email" value="<?php echo $row['supplier_email'];?>" class="form-control"  placeholder="Enter supplier email" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->
<?php endforeach; ?>
<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <button type="submit" class="btn btn-success waves-effect"> Save </button>
    <button type="" class="btn btn-default m-l-5 waves-effect" data-dismiss="modal"> Close </button>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->
</form>
<script>
        jQuery(document).ready(function() {
          $(".select2").select2();
          $('form').parsley();
		});
</script> 
