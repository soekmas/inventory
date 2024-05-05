<?php echo form_open(base_url() . 'index.php?admin/access/add/' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Add new access</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Select Apps/Platform</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="apps_id" >
      <?php
        $appses = $this->db->get('apps')->result_array();
        foreach ($appses  as $apps):
      ?>
      <option value="<?php echo $apps['apps_id']; ?>"> <?php echo $apps['apps_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Access Name</label>
  <div class="col-sm-6">
    <input type="text"  name="access_name" class="form-control" required placeholder="Enter access name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Host Name</label>
  <div class="col-sm-6">
    <input type="text"  name="host_name" class="form-control"  placeholder="Enter host name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">IP Address</label>
  <div class="col-sm-6">
    <input type="text"  name="ip_address" class="form-control"  placeholder="Enter IP address" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Login User Name/ID</label>
  <div class="col-sm-6">
    <input type="text"  name="username" class="form-control"  placeholder="Enter username" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Login Email</label>
  <div class="col-sm-6">
    <input type="text"  name="email" class="form-control"  placeholder="Enter email" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Login Password</label>
  <div class="col-sm-6">
    <input type="text"  name="password" class="form-control"  placeholder="Enter password" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">API Key</label>
  <div class="col-sm-6">
    <input type="text"  name="api_key" class="form-control"  placeholder="Enter API key" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Access Token</label>
  <div class="col-sm-6">
    <input type="text"  name="access_token" class="form-control"  placeholder="Enter access token" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Secret Key</label>
  <div class="col-sm-6">
    <input type="text"  name="secret_key" class="form-control"  placeholder="Enter secret key" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Aditional Key-1</label>
  <div class="col-sm-6">
    <input type="text"  name="key1" class="form-control"  placeholder="Enter key1" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Aditional Key-2</label>
  <div class="col-sm-6">
    <input type="text"  name="key2" class="form-control"  placeholder="Enter key2" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->
<div class="form-group">
  <label class="col-sm-3 control-label">Aditional Key-3</label>
  <div class="col-sm-6">
    <input type="text"  name="key3" class="form-control"  placeholder="Enter key3" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Aditional Key-4</label>
  <div class="col-sm-6">
    <input type="text"  name="key4" class="form-control"  placeholder="Enter key4" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

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
