<?php 
    $computers    = $this->db->get_where('computer' , array('id' => $param2) )->result_array();
    foreach ( $computers as $row):
?>
<?php echo form_open(base_url() . 'index.php?admin/computer/add/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Copy computer information</h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label">Asset Type</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="type" required>
      <option value="server" <?php if($row['type']=='server'){echo "selected"; }?>>Server</option>
      <option value="desktop" <?php if($row['type']=='desktop'){echo "selected"; }?>>Desktop</option>
      <option value="laptop" <?php if($row['type']=='laptop'){echo "selected"; }?>>Laptop</option>
      <option value="tablet" <?php if($row['type']=='tablet'){echo "selected"; }?>>Tablet</option>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Name</label>
  <div class="col-sm-6">
    <input type="text"  name="computer_name" value="Copy of <?php echo $row['computer_name'];?>" class="form-control" required placeholder="Enter name" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Description</label>
  <div class="col-sm-6">
    <input type="text"  name="description" value="<?php echo $row['description'];?>"  class="form-control" placeholder="Enter description" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Brand</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="brand_id" >
      <option>Select Brand</option>
      <?php
        $brands = $this->db->get('brand')->result_array();
        foreach ($brands  as $brand):
      ?>
      <option value="<?php echo $brand['brand_id']; ?>" <?php if($row['brand_id']==$brand['brand_id']){echo 'selected'; }?>> <?php echo $brand['brand_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Model</label>
  <div class="col-sm-6">
    <input type="text"  name="model" value="<?php echo $row['model'];?>"  class="form-control"  placeholder="Enter model" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Processor</label>
  <div class="col-sm-6">
    <input type="text"  name="processor" value="<?php echo $row['processor'];?>"  class="form-control"  placeholder="Enter processor" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Memory/Ram</label>
  <div class="col-sm-6 ">
    <select  class="form-control"  name="ram">
      <option>Select Ram</option>
      <?php 
for ($x = 1; $x <= 128; $x++) {
  ?>
      <option value='<?php echo $x;?> GB' <?php if($x==$row['ram']){ echo 'selected';}?>> <?php echo $x;?> GB</option>
      <?php } ?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Operating System</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="os_id" required>
      <option>Select Operating System</option>
      <?php
        $oses = $this->db->get('os')->result_array();
        foreach ($oses  as $os):
      ?>
      <option value="<?php echo $os['os_id']; ?>"  <?php if($row['os_id']==$os['os_id']){echo 'selected'; }?>> <?php echo $os['os_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Supplier</label>
  <div class="col-sm-6 ">
    <select  class="form-control select2"  name="supplier_id" required>
      <option>Supplier</option>
      <?php
        $suppliers = $this->db->get('supplier')->result_array();
        foreach ($suppliers  as $supplier):
      ?>
      <option value="<?php echo $supplier['supplier_id']; ?>"  <?php if($row['supplier_id']==$supplier['supplier_id']){echo 'selected'; }?>> <?php echo $supplier['supplier_name'];?></option>
      <?php endforeach;?>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Serial No</label>
  <div class="col-sm-6">
    <input type="text"  name="serial_no" value="<?php echo $row['serial_no'];?>"  class="form-control" required placeholder="Enter serial number" />
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Purchase Date</label>
  <div class="col-sm-6">
    <div class="input-group">
      <input type="text" name="purchase_date" value="<?php echo date('m/d/Y', strtotime(str_replace('/', '-', $row['purchase_date']))); ?>" id="purchase_date" type="date" class="form-control" placeholder="Enter purchase date" required>
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
      <option value="30" <?php if($row['warranty_duration']=='30'){echo 'selected'; }?>>1 Month</option>
      <option value="90" <?php if($row['warranty_duration']=='90'){echo 'selected'; }?>>3 Month</option>
      <option value="180" <?php if($row['warranty_duration']=='180'){echo 'selected'; }?>>6 Month</option>
      <option value="365" <?php if($row['warranty_duration']=='365'){echo 'selected'; }?>>1 Year</option>
      <option value="548" <?php if($row['warranty_duration']=='548'){echo 'selected'; }?>>1.5 Year</option>
      <option value="730" <?php if($row['warranty_duration']=='730'){echo 'selected'; }?>>2 Year</option>
      <option value="1095" <?php if($row['warranty_duration']=='1095'){echo 'selected'; }?>>3 Year</option>
      <option value="1460" <?php if($row['warranty_duration']=='1460'){echo 'selected'; }?>>4 Year</option>
      <option value="1825" <?php if($row['warranty_duration']=='1825'){echo 'selected'; }?>>5 Year</option>
      <option value="2920" <?php if($row['warranty_duration']=='2920'){echo 'selected'; }?>>8 Year</option>
      <option value="3650" <?php if($row['warranty_duration']=='3650'){echo 'selected'; }?>>10 Year</option>
    </select>
  </div>
  <!-- End col-6 --> 
</div>
<!-- end form -group -->

<div class="form-group">
  <label class="col-sm-3 control-label">Issue To/User</label>
  <div class="col-sm-6">
    <input type="text"  name="issue_to" value="<?php echo $row['issue_to'];?>"  class="form-control" required placeholder="Enter location or user" />
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
          $('#purchase_date').datepicker({
                  autoclose: true,
                  todayHighlight: true
                });

        $('#warranty_end_date').datepicker({
                  autoclose: true,
                  todayHighlight: true
                });                         

          });
</script> 
