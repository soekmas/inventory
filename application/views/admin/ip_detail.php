<?php 
    $ips    = $this->db->get_where('ip' , array('ip_id' => $param2) )->result_array();
    foreach ( $ips as $row):
?>

<h4 class="text-center">IP information Details</h4>
<hr>
<table class="table .table-responsive">
  <tr>
    <td>Host Name</td>
    <td>:</td>
    <td><?php echo $row['host_name'];?></td>
  </tr>

  <tr>
    <td>IPv4 Address</td>
    <td>:</td>
    <td><?php echo $row['ipv4'];?></td>
  </tr>
  <tr>
    <td>IPv6 Address</td>
    <td>:</td>
    <td><?php echo $row['ipv6'];?></td>
  </tr>
  <tr>
    <td>MAC Address</td>
    <td>:</td>
    <td><?php echo $row['mac'];?></td>
  </tr>
  <tr>
    <td>Subnet Mask</td>
    <td>:</td>
    <td><?php echo $row['subnet'];?></td>
  </tr>
  <tr>
    <td>Gateway</td>
    <td>:</td>
    <td><?php echo $row['gateway'];?></td>
  </tr>
  <tr>
    <td>DNS1</td>
    <td>:</td>
    <td><?php echo $row['dns1'];?></td>
  </tr>
  <tr>
    <td>DNS2</td>
    <td>:</td>
    <td><?php echo $row['dns2'];?></td>
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

