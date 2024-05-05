<?php echo form_open(base_url() . 'index.php?admin/computer/add/' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Add new computer</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Asset Type</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="type" required>
      <option value="server">Server</option>
      <option value="desktop">Desktop</option>
      <option value="laptop">Laptop</option>
      <option value="tablet">Tablet</option>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Name</label>
  <div class="col-sm-6">
    <input type="text"  name="computer_name" class="form-control" required placeholder="Enter name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Description</label>
  <div class="col-sm-6">
    <input type="text"  name="description" class="form-control"  placeholder="Enter asset description" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Brand</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="brand_id" >
      <?php
        $brands = $this->db->get('brand')->result_array();
        foreach ($brands  as $brand):
      ?>
      <option value="<?php echo $brand['brand_id']; ?>"> <?php echo $brand['brand_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Model</label>
  <div class="col-sm-6">
    <input type="text"  name="model" class="form-control"  placeholder="Enter model" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Processor</label>
  <div class="col-sm-6">
    <input type="text"  name="processor" class="form-control"  placeholder="Enter processor" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Memory/Ram</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="ram">
      <option>Select Ram</option>
      <?php 
for ($x = 1; $x <= 128; $x++) {
    echo "<option value='$x GB'> $x GB</option>";
} 
?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Operating System</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="os_id" >
      <?php
        $oses = $this->db->get('os')->result_array();
        foreach ($oses  as $os):
      ?>
      <option value="<?php echo $os['os_id']; ?>"> <?php echo $os['os_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Supplier</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="supplier_id" >
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
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Serial No</label>
  <div class="col-sm-6">
    <input type="text"  name="serial_no" class="form-control" required placeholder="Enter serial number" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Purchase Date</label>
  <div class="col-sm-6">
    <div class="input-group">
      <input type="text" name="purchase_date" id="purchase_date" type="date" class="form-control" placeholder="Enter purchase date" required>
      <span class="input-group-addon bg-custom b-0 text-white"><i class="fa fa-calendar" aria-hidden="true"></i></span> </div>
    <!-- input-group --> 
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Warranty Duration</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="warranty_duration" >
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
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Issue To/User</label>
  <div class="col-sm-6">
    <input type="text"  name="issue_to" class="form-control"  placeholder="Enter location or user" />
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
          $('#purchase_date').datepicker({
                  autoclose: true,
                  todayHighlight: true
                });                       

          });
</script> 
