<?php 
    $ips    = $this->db->get_where('ip' , array('ip_id' => $param2) )->result_array();
    foreach ( $ips as $row):
?>
<?php echo form_open(base_url() . 'index.php?admin/ip/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Edit IP information</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Host Name</label>
  <div class="col-sm-6">
    <input type="text"  name="host_name" value="<?php echo $row['host_name']; ?>" class="form-control" placeholder="Enter host or location or user name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->


<div class="form-group">
  <label class="col-sm-3 control-label">IPv4 Address</label>
  <div class="col-sm-6">
    <input type="text"  name="ipv4" value="<?php echo $row['ipv4']; ?>"  class="form-control"  placeholder="Enter IPv4 address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">IPv6 Address</label>
  <div class="col-sm-6">
    <input type="text"  name="ipv6" value="<?php echo $row['ipv6']; ?>"  class="form-control"  placeholder="Enter IPv6 Address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">MAC Address</label>
  <div class="col-sm-6">
    <input type="text"  name="mac"  value="<?php echo $row['mac']; ?>"  class="form-control"  placeholder="Enter mac Address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Subnet Mask</label>
  <div class="col-sm-6">
    <input type="text"  name="subnet" value="<?php echo $row['subnet']; ?>"  class="form-control"  placeholder="Enter subnet mask" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Gateway</label>
  <div class="col-sm-6">
    <input type="text"  name="gateway" value="<?php echo $row['gateway']; ?>"  class="form-control"  placeholder="Enter gateway ip address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">DNS1</label>
  <div class="col-sm-6">
    <input type="text"  name="dns1" value="<?php echo $row['dns1']; ?>"  class="form-control"  placeholder="Enter dns server address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">DNS2</label>
  <div class="col-sm-6">
    <input type="text"  name="dns2" value="<?php echo $row['dns2']; ?>"  class="form-control"  placeholder="Enter alternative dns server address" />
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
