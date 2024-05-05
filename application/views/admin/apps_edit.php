<?php 
    $categories    = $this->db->get_where('apps' , array('apps_id' => $param2) )->result_array();
    foreach ( $categories as $row):
?>
<?php echo form_open(base_url() . 'index.php?admin/apps/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Edit apps</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Apps Name</label>
  <div class="col-sm-6">
    <input type="text"  name="apps_name" value="<?php echo $row['apps_name'];?>" class="form-control" required placeholder="Enter name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Apps Description</label>
  <div class="col-sm-6">
    <input type="text"  name="apps_desc" value="<?php echo $row['apps_desc'];?>" class="form-control"  placeholder="Enter device description" />
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
