<?php 
    $computeres    = $this->db->get_where('computer' , array('id' => $param2) )->result_array();
    foreach ( $computeres as $row):
?>

<h4 class="text-center">Computer details</h4>
<hr>
<table class="table .table-responsive">
  <tr>
    <td>Asset Type</td>
    <td>:</td>
    <td><?php echo $row['type'];?></td>
  </tr>
  <tr>
    <td>Asset Name</td>
    <td>:</td>
    <td><?php echo $row['computer_name'];?></td>
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
</form>

<!-- submit -->

<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <button  class="btn btn-default m-l-5" data-dismiss="modal"> Close </button>
  </div>
</div>

<!-- end submit --> 

