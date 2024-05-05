<?php 
    $accesses    = $this->db->get_where('access' , array('access_id' => $param2) )->result_array();
    foreach ( $accesses as $row):
?>

<h3 class="text-center">Access Details</h3>
<table class="table .table-responsive">
  <tr>
    <td>Application Name</td>
    <td>:</td>
    <td><?php echo $this->common_model->get_apps_name($row['apps_id']);?></td>
  </tr>
  <tr>
    <td>Host Name</td>
    <td>:</td>
    <td><?php echo $row['host_name'];?></td>
  </tr>
  <tr>
    <td>IP Address</td>
    <td>:</td>
    <td><?php echo $row['ip_address'];?></td>
  </tr>
  <tr>
    <td>Login User Name/ID</td>
    <td>:</td>
    <td><?php echo $row['username'];?></td>
  </tr>
  <tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo $row['email'];?></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><?php echo $row['password'];?></td>
  </tr>
  <tr>
    <td>API Key</td>
    <td>:</td>
    <td><?php echo $row['api_key'];?></td>
  </tr>
  <tr>
    <td>Secret Key</td>
    <td>:</td>
    <td><?php echo $row['secret_key'];?></td>
  </tr>
  <tr>
    <td>Access Token</td>
    <td>:</td>
    <td><?php echo $row['access_token'];?></td>
  </tr>
  <tr>
    <td>Additional Key-1</td>
    <td>:</td>
    <td><?php echo $row['key1'];?></td>
  </tr>
  <tr>
    <td>Additional Key-2</td>
    <td>:</td>
    <td><?php echo $row['key2'];?></td>
  </tr>
  <tr>
    <td>Additional Key-3</td>
    <td>:</td>
    <td><?php echo $row['key3'];?></td>
  </tr>
  <tr>
    <td>Additional Key-4</td>
    <td>:</td>
    <td><?php echo $row['key4'];?></td>
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
