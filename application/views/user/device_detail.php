<?php 
    $devices    = $this->db->get_where('device' , array('device_id' => $param2) )->result_array();
    foreach ( $devices as $row):
?>

<h3 class="text-center">Device Details</h3>
<table class="table .table-responsive">
  <tr>
    <td>Device Type</td>
    <td>:</td>
    <td><?php echo $this->common_model->get_category_name($row['category_id']);?></td>
  </tr>
  <tr>
    <td>Device Name</td>
    <td>:</td>
    <td><?php echo $row['device_name'];?></td>
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

