<?php include 'include/header.php'; ?>

<!--this script is for set document title-->
<script type="text/javascript">
  $("document").ready(function() {
    var title = <?php echo json_encode(ucwords($this->session->userdata('hostel_name'))); ?>;
    $("title").text(title);
    $("#hostelName").text(title);
  })
</script>

<div class = "container-fluid" style="padding: 0px;">
<div id="wrapper">

<!-- Sidebar -->
  <div id="sidebar-wrapper">
  <?php include('include/sidebar.php'); ?>
  </div>
		
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
<div id="page-content-wrapper" style=" height: 900px;">
<div class="container-fluid">
  <!-- showing insertion message -->
    <?php if ($feedback = $this->session->flashdata('feedback')): 
      $feedback_class = $this->session->flashdata('feedback_class');
    ?>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="alert <?= $feedback_class ?>">
          <strong><?= $feedback; ?><a href="<?=base_url('hostelprofile');?>">click here</a></strong>
        </div>
        </div>
      </div>
        
        
    <?php endif; ?>
  <div class="row">
    <h1><?php echo ucwords($this->session->userdata("hostel_name")); ?></h1>
  </div>
  <div class="row">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('tenants/tenants');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Tenants Record
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('tenants/tenantsRel');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Tenants Relatives Record
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('tenants/addTenant');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Add Tenants
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('dashboard/editProfile');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Hostel Profile
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('dashboard/roomRent');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Manage Room Rent
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('dashboard/notification');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Manage Notice Board
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('dashboard/help');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Help
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3" style="height: 100px; padding: 2px; margin-bottom: 5px;">
          <a href="<?=base_url('tenants/tenants');?>" class="btn btn-info btn-lg" style="height: 100%; width: 100%; background-color: CornflowerBlue;">
            <div class="col-lg-12">
              <div class="row">
                Tenants Record
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
<!-- /#page-content-wrapper -->

</div>
</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
<script type="text/javascript">
  $(document).ready(function(){

    $('.alert').click(function(){
      $('.alert').slideUp();
    });
    
  });
</script>
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

<?php include 'include/footer.php'; ?>