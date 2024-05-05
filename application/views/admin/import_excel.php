<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="container">
    <div class="card-box">
      <ul class="nav nav-tabs tabs tabs-top">
        <li class="active tab"> <a href="#computer" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-server" aria-hidden="true"></i></span> <span class="hidden-xs">Import Server &amp; PC</span> </a> </li>
        <li class="tab"> <a href="#device" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-desktop" aria-hidden="true"></i></span> <span class="hidden-xs">Import Device</span> </a> </li>
        <li class="tab"> <a href="#accessories" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="hidden-xs">Import Accessories</span> </a> </li>        
        <li class="tab"> <a href="#access" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="hidden-xs">Import Access</span> </a> </li>
        <li class="tab"> <a href="#ip" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-tablet" aria-hidden="true"></i></span> <span class="hidden-xs">IP</span> </a> </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="computer"> <?php echo form_open(base_url(). 'index.php?admin/import_excel/computer' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
          <!-- panel  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Import Server &amp; Computer From Excel</h3>
                </div>
                <div class="panel-body"> 
                  <!-- panel  -->
                  <div class="alert alert-warning"><strong>Warning!</strong> Before starting import please double chech cell position and remove empty row.</div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Download</label>
                    <div class="col-sm-6"> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/computer_blank_file.xlsx'; ?>"> Blank Excel File </a> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/computer_example_file.xlsx'; ?>"> Excel Example File </a> </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">select file</label>
                    <div class="col-sm-6">
                      <input type="file" name="excel_file" class="filestyle" data-input="false" required>
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Import Server &amp; PC From Excel </button>
                  </div>
                  </form>
                </div>
                <!--end panel body --> 
              </div>
              <!--end panel --> 
            </div>
            <!--end col-6 --> 
          </div>
          <!--end row--> 
        </div>
        <div class="tab-pane" id="device"> <?php echo form_open(base_url(). 'index.php?admin/import_excel/device' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
          <!-- panel  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Import Device From Excel</h3>
                </div>
                <div class="panel-body"> 
                  <!-- panel  -->
                  <div class="alert alert-warning"><strong>Warning!</strong> Before starting import please double chech cell position and remove empty row.</div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Download</label>
                    <div class="col-sm-6"> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/device_blank_file.xlsx'; ?>"> Blank Excel File </a> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/device_example_file.xlsx'; ?>"> Excel Example File </a> </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">select file</label>
                    <div class="col-sm-6">
                      <input type="file" name="excel_file" class="filestyle" data-input="false" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Device Category</label>
                    <div class="col-sm-6 ">
                      <select  class="form-control select2"  name="category_id" required>
                        <option value=""> Select Category</option>
                        <?php
                        $category = $this->db->get('category')->result_array();
                        foreach ($category  as $category):
                      ?>
                        <option value="<?php echo $category['category_id']; ?>"> <?php echo $category['category_name'];?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <!-- End col-6 --> 
                  </div>
                  <!-- end form -group -->
                  
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Import Device From Excel </button>
                  </div>
                  </form>
                </div>
                <!--end panel body --> 
              </div>
              <!--end panel --> 
            </div>
            <!--end col-6 --> 
          </div>
          <!--end row--> 
          
        </div>
        <div class="tab-pane" id="accessories"> <?php echo form_open(base_url(). 'index.php?admin/import_excel/accessories' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
          <!-- panel  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Import Accessories From Excel</h3>
                </div>
                <div class="panel-body"> 
                  <!-- panel  -->
                  <div class="alert alert-warning"><strong>Warning!</strong> Before starting import please double chech cell position and remove empty row.</div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Download</label>
                    <div class="col-sm-6"> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/accessories_blank_file.xlsx'; ?>"> Blank Excel File </a> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/accessories_example_file.xlsx'; ?>"> Excel Example File </a> </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">select file</label>
                    <div class="col-sm-6">
                      <input type="file" name="excel_file" class="filestyle" data-input="false" required>
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Import Accessories From Excel </button>
                  </div>
                  </form>
                </div>
                <!--end panel body --> 
              </div>
              <!--end panel --> 
            </div>
            <!--end col-6 --> 
          </div>
          <!--end row--> 
        </div>

        <div class="tab-pane" id="access"> <?php echo form_open(base_url(). 'index.php?admin/import_excel/access' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
          <!-- panel  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Import Access From Excel</h3>
                </div>
                <div class="panel-body"> 
                  <!-- panel  -->
                  <div class="alert alert-warning"><strong>Warning!</strong> Before starting import please double chech cell position and remove empty row.</div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Download</label>
                    <div class="col-sm-6">
                        <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/access_blank_file.xlsx'; ?>"> Blank Excel File </a>
                        <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/access_example_file.xlsx'; ?>"> Excel Example File </a> </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">select file</label>
                    <div class="col-sm-6">
                      <input type="file" name="excel_file" class="filestyle" data-input="false" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Access Platform</label>
                    <div class="col-sm-6 ">
                      <select  class="form-control select2"  name="apps_id" required>
                        <option value=""> Select Category</option>
                        <?php
                        $apps = $this->db->get('apps')->result_array();
                        foreach ($apps  as $apps):
                      ?>
                        <option value="<?php echo $apps['apps_id']; ?>"> <?php echo $apps['apps_name'];?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <!-- End col-6 --> 
                  </div>
                  <!-- end form -group -->
                  
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Import Device From Excel </button>
                  </div>
                  </form>
                </div>
                <!--end panel body --> 
              </div>
              <!--end panel --> 
            </div>
            <!--end col-6 --> 
          </div>
          <!--end row--> 
          
        </div>


        <div class="tab-pane" id="ip"> <?php echo form_open(base_url(). 'index.php?admin/import_excel/ip' , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?> 
          <!-- panel  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Import IP From Excel</h3>
                </div>
                <div class="panel-body"> 
                  <!-- panel  -->
                  <div class="alert alert-warning"><strong>Warning!</strong> Before starting import please double chech cell position and remove empty row.</div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Download</label>
                    <div class="col-sm-6"> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/ip_blank_file.xlsx'; ?>"> Blank Excel File </a> <a class="btn btn-link" href="<?php echo base_url().'uploads/excel_file/ip_example_file.xlsx'; ?>"> Excel Example File </a> </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">select file</label>
                    <div class="col-sm-6">
                      <input type="file" name="excel_file" class="filestyle" data-input="false" required>
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Import IPs From Excel </button>
                  </div>
                  </form>
                </div>
                <!--end panel body --> 
              </div>
              <!--end panel --> 
            </div>
            <!--end col-6 --> 
          </div>
          <!--end row--> 
          
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- container --> 
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
<script src="assets/js/jquery.core.js"></script> 
<script src="assets/js/jquery.app.js"></script> 
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script> 
<script type="text/javascript">
      $(document).ready(function() {
        $('form').parsley();
      });
    </script> 

<!-- file select--> 
<script src="assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script> 
<!-- file select--> 

<!-- show flash  notification--> 
<script>
        jQuery(document).ready(function() {                   
          //show update success notification
          var success_message='<?php echo $this->session->flashdata('success'); ?>';
          var errors_message='<?php echo $this->session->flashdata('error'); ?>';
          //show success notification
          if(success_message!=''){
              $.Notification.autoHideNotify('success', 'right middle', 'Successed!', success_message);
            }
          //end show success notification

          //show error notification
          if(errors_message!=''){
              $.Notification.autoHideNotify('error', 'right middle', 'Opps error occurs!', errors_message);
            }
          //end show error notification
            });
</script> 

<!-- end show flash  notification--> 

