
<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-server text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('computer', array('status' =>'1','type' =>'server'))->result_array()); ?> </b></h3>
            <p class="text-muted">Server</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-desktop text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('computer', array('status' =>'1','type' =>'desktop'))->result_array()); ?> </b></h3>
            <p class="text-muted">Desktop</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-laptop text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('computer', array('status' =>'1','type' =>'laptop'))->result_array()); ?> </b></h3>
            <p class="text-muted">Laptop</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-tablet text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('computer', array('status' =>'1','type' =>'tablet'))->result_array()); ?> </b></h3>
            <p class="text-muted">Tablet</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-print text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('device', array('status' =>'1'))->result_array()); ?> </b></h3>
            <p class="text-muted">Devices</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"><i class="fa fa-desktop text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('accessories', array('status' =>'1'))->result_array()); ?> </b></h3>
            <p class="text-muted">Accessories</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-location-arrow text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('ip', array('status' =>'1'))->result_array()); ?> </b></h3>
            <p class="text-muted">IP Address</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-icon-success pull-left"> <i class="fa fa-database text-success" aria-hidden="true"></i> </div>
          <div class="text-right">
            <h3 class="text-dark"><b class="counter"> <?php echo count($this->db->get_where('access', array('status' =>'1'))->result_array()); ?> </b></h3>
            <p class="text-muted">Access</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-border panel-success">
          <div class="panel-heading">
            <?php
                                       $today = date("Y-m-d");// current date
                                       $date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($today)) . " +30 days"));
                                       $this->db->select('*');
                                       $this->db->from('computer');
                                       $this->db->where('warranty_end_date <', $date );
                                       $this->db->where('warranty_end_date >', $today );
                                    $computers = $this->db->get()->result_array();
                                    $qty=count($computers);
                      ?>
            <h3 class="panel-title">Warrienty and Inventory Summery</h3>
          </div>
          <div class="panel-body">
            <table id="datatable-fixed-header" class="table table-striped table-bordered success">
              <thead>
                <tr>
                  <th>Asset Name</th>
                  <th>Total Asset</th>
                  <th>Warrenty Warning</th>
                  <th>Warrenty Expired</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Server & PC</td>
                  <td><?php echo count($this->db->get_where('computer', array('status'=> '1'))->result_array());?></td>
                  <td><?php
                      $today = date("Y-m-d");// current date
                      $date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($today)) . " +30 days"));
                      echo count($this->db->get_where('computer', array('warranty_end_date <'=> $date,'warranty_end_date >'=> $today))->result_array());                                    
                    ?></td>
                  <td><?php
                    echo count($this->db->get_where('computer', array('warranty_end_date <'=>$today))->result_array());                                    
                  ?></td>
                </tr>
                <tr>
                  <td>Device</td>
                  <td><?php echo count($this->db->get_where('device', array('status'=> '1'))->result_array());?></td>
                  <td><?php
                      $today = date("Y-m-d");// current date
                      $date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($today)) . " +30 days"));
                      echo count($this->db->get_where('device', array('warranty_end_date <'=> $date,'warranty_end_date >'=> $today))->result_array());                                    
                    ?></td>
                  <td><?php
                    echo count($this->db->get_where('device', array('warranty_end_date <'=>$today))->result_array());                                    
                  ?></td>
                </tr>
                <tr>
                  <td>Accessories</td>
                  <td><?php echo count($this->db->get_where('accessories', array('status'=> '1'))->result_array());?></td>
                  <td><?php
                      $today = date("Y-m-d");// current date
                      $date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($today)) . " +30 days"));
                      echo count($this->db->get_where('accessories', array('warranty_end_date <'=> $date,'warranty_end_date >'=> $today))->result_array());                                    
                    ?></td>
                  <td><?php
                    echo count($this->db->get_where('accessories', array('warranty_end_date <'=>$today))->result_array());                                    
                  ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-border panel-warning">
          <div class="panel-heading">
            <?php
                                       $today = date("Y-m-d");// current date
                                       $date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($today)) . " +30 days"));
                                       $this->db->select('*');
                                       $this->db->from('computer');
                                       $this->db->where('warranty_end_date <', $date );
                                       $this->db->where('warranty_end_date >', $today );
                                    $computers = $this->db->get()->result_array();
                                    $qty=count($computers);
                      ?>
            <h3 class="panel-title"><?php echo $qty;?> PCs Warrienty Warning</h3>
          </div>
          <div class="panel-body">
            <table id="datatable-fixed-header" class="table table-striped table-bordered success">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Serial No</th>
                  <th>Purchase Date</th>
                  <th>Warranty End</th>
                  <th>Warranty Due</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php  foreach ($computers as $computer){
                                    $today=date_create(date('Y-m-d'));
                                    $purchase_date=date_create($computer['purchase_date']);
                                    $warranty_end_date=date_create($computer['warranty_end_date']);
                                    $warranty_days=date_diff($today,$warranty_end_date);
                                    $warranty_due_days=$warranty_days->format("%r%a");
                                    ?>
                <tr>
                  <td><?php  echo $computer['computer_name']; ?></td>
                  <td><?php  echo $computer['type']; ?></td>
                  <td><?php  echo $computer['serial_no']; ?></td>
                  <td><?php  echo $computer['purchase_date']; ?></td>
                  <td><?php  echo $computer['warranty_end_date']; ?></td>
                  <td><?php if($warranty_due_days<31 && $warranty_due_days>0){ echo "<p class='text-warning'>".$warranty_due_days." Days</p>"; }
                    else if($warranty_due_days<0){ echo "<p class='text-danger'>".$warranty_due_days." Days</p>"; }
                    else echo "<p class='text-success'>".$warranty_due_days." Days</p>";
                    ?></td>
                  <td><a class="btn btn-icon waves-effect waves-light btn-success btn-xs" href="<?php echo base_url() . 'index.php?admin/computer_details/'. $computer['id'];?> ">Details</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container --> 
  
</div>
<!-- content --> 

<script>
            var resizefunc = [];
        </script> 

<!-- jQuery  --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/detect.js"></script> 
<script src="assets/js/fastclick.js"></script> 
<script src="assets/js/jquery.slimscroll.js"></script> 
<script src="assets/js/jquery.blockUI.js"></script> 
<script src="assets/js/waves.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/jquery.nicescroll.js"></script> 
<script src="assets/js/jquery.scrollTo.min.js"></script> 
<script src="assets/plugins/peity/jquery.peity.min.js"></script> 

<!-- jQuery  --> 
<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script> 
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script> 
<script src="assets/plugins/morris/morris.min.js"></script> 
<script src="assets/plugins/raphael/raphael-min.js"></script> 
<script src="assets/plugins/jquery-knob/jquery.knob.js"></script> 
<script src="assets/pages/jquery.dashboard.js"></script> 
<script src="assets/js/jquery.core.js"></script> 
<script src="assets/js/jquery.app.js"></script> 
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>