<?php $active_menu=$this->session->userdata('active_menu');
?>

<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft"> 
    <!--- Divider -->
    <div id="sidebar-menu">
      <ul>
        <li calss="<?php if($active_menu==1) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/dashboard';?>" class="waves-effect waves-light <?php if($active_menu==1) {echo "active"; } ?>" id="65"><i class="fa fa-home" aria-hidden="true"></i> <span> Dashboard </span> </a> </li>
        <li class="<?php if($active_menu==2) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/computer'?>" class="waves-effect waves-light <?php if($active_menu==2) {echo "active"; } ?>" id="53"><i class="fa fa-desktop" aria-hidden="true"></i><span> Server &amp; PC </span> </a></li>
        <li class="<?php if($active_menu==3) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/device'?>" class="waves-effect waves-light <?php if($active_menu==3) {echo "active"; } ?>" id="53"><i class="fa fa-print" aria-hidden="true"></i><span>Devices </span> </a></li>
        <li class="<?php if($active_menu==4) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/accessories'?>" class="waves-effect waves-light <?php if($active_menu==4) {echo "active"; } ?>" id="53"><i class="fa fa-keyboard-o" aria-hidden="true"></i><span> Accessories </span> </a></li>
        <li class="<?php if($active_menu==5) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/ip'?>" class="waves-effect waves-light <?php if($active_menu==5) {echo "active"; } ?>" id="53"><i class="fa fa-location-arrow" aria-hidden="true"></i><span> IP Address </span> </a></li>
        <li class="<?php if($active_menu==6) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/access'?>" class="waves-effect waves-light <?php if($active_menu==6) {echo "active"; } ?>" id="53"><i class="fa fa-key" aria-hidden="true"></i><span> Access </span> </a></li>
        <li class="<?php if($active_menu==7) {echo "active"; } ?>"> <a href="<?php echo base_url();?>index.php?admin/setting" class="waves-effect waves-light <?php if($active_menu==7) {echo "active"; } ?>" id="53"><i class="fa fa-gears"></i><span>System Setting</span></a> </li>
        <li class="<?php if($active_menu==8) {echo "active"; } ?>"> <a href="<?php echo base_url();?>index.php?admin/setting/utility" class="waves-effect waves-light <?php if($active_menu==8) {echo "active"; } ?>" id="53"><i class="fa fa-gears"></i><span>Manage Utility</span></a> </li>
        <li class="<?php if($active_menu==9) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/manage_user'?>" class="waves-effect waves-light <?php if($active_menu==9) {echo "active"; } ?>" id="53"><i class="fa fa-users" aria-hidden="true"></i><span>Manage User</span></a></li>
        <li class="<?php if($active_menu==10) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/import_excel'?>" class="waves-effect waves-light <?php if($active_menu==10) {echo "active"; } ?>" id="53"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span>Bulk Import</span></a></li>
        <li class="<?php if($active_menu==11) {echo "active"; } ?>"> <a href="<?php echo base_url().'index.php?admin/backup_restore'?>" class="waves-effect waves-light <?php if($active_menu==11) {echo "active"; } ?>" id="53"><i class="fa fa-database"></i><span>Database Backup</span></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!--  left sidebar/menu end  --> 
