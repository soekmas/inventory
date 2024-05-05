<?php 
    $brands    = $this->db->get_where('brand' , array('brand_id' => $param2) )->result_array();
    foreach ( $brands as $row):
?>
<?php echo form_open(base_url() . 'index.php?admin/brand/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Edit Brand</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Brand Name</label>
  <div class="col-sm-6">
    <input type="text"  name="brand_name" value="<?php echo $row['brand_name'];?>" class="form-control" required placeholder="Enter brand name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Description</label>
  <div class="col-sm-6">
    <input type="text"  name="description" value="<?php echo $row['description'];?>" class="form-control"  placeholder="Enter brand description" />
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
