<?php include 'include/header.php'; ?>

<!--this script is for set document title-->
<script type="text/javascript">
  $("document").ready(function() {
    var title = <?php echo json_encode(ucwords($this->session->userdata("hostel_name"))); ?>;
    $("title").text(title);
    $("#hostelName").text(title);
  })
</script>

<div class = "container-fluid" style="padding: 0px;" ng-app="addTenant">
<div id="wrapper">

<!-- Sidebar -->
  <div id="sidebar-wrapper">
  <?php include('include/sidebar.php'); ?>
  </div>
    
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
<div id="page-content-wrapper" style=" height: 900px;">
<div class="container-fluid">
  <!-- showing feedback message -->
    <?php if ($feedback = $this->session->flashdata('feedback')): 
      $feedback_class = $this->session->flashdata('feedback_class');
    ?>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="alert <?= $feedback_class ?>">
          <strong><?= $feedback; ?></strong>
        </div>
        </div>
      </div>
        
        
    <?php endif; ?>
  <div class="row" ng-controller="addTenantCont">
    <div class="col-lg-8 col-lg-offset-2">
      <form class="well" name="inputform" method="post" enctype="multipart/form-data" action="<?=base_url('tenants/getTenant');?>">
        <h1>Admission Form</h1>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.tName.$dirty && inputform.tName.$valid, 'has-error': inputform.tName.$dirty && inputform.tName.$invalid}">
          <input type="text" id="fback" class="better-placeholder form-control" name="tName" placeholder="Tenant's Name" ng-model="data.tName" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.tName.$dirty && inputform.tName.$valid, 'glyphicon-remove': inputform.tName.$dirty && inputform.tName.$invalid}" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.tFatherName.$dirty && inputform.tFatherName.$valid, 'has-error': inputform.tFatherName.$dirty && inputform.tFatherName.$invalid}">
          <input type="text" class="better-placeholder form-control" name="tFatherName" placeholder="Tenant's Father Name" ng-model="data.tFatherName" required>
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.tFatherName.$dirty && inputform.tFatherName.$valid, 'glyphicon-remove': inputform.tFatherName.$dirty && inputform.tFatherName.$invalid}" aria-hidden="true"></span>
        </div>
        <div class="form-group">
          <label for="tImage" style="color: red;">Upload passport size Image(Maximum image size 100kb)</label>
          <input type="file" class="form-control" name="tImage" required onchange="angular.element(this).scope().file_changed(this)"><span ng-show="imageSizeLarger" style="color: red; font-weight: bold; margin: 5px;">Image size larger than 100kb</span>
        </div>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.cnic.$dirty && inputform.cnic.$valid, 'has-error': inputform.cnic.$dirty && inputform.cnic.$invalid}">
          <input type="text" class="better-placeholder form-control" name="cnic" placeholder="CNIC" ng-model="data.cnic" required ng-disabled="isImageCorrect">
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.cnic.$dirty && inputform.cnic.$valid, 'glyphicon-remove': inputform.cnic.$dirty && inputform.cnic.$invalid}" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.cell.$dirty && inputform.cell.$valid, 'has-error': inputform.cell.$dirty && inputform.cell.$invalid}">
          <input type="text" class="better-placeholder form-control" name="cell" placeholder="Cell #" ng-model="data.cell" required ng-disabled="isImageCorrect">
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.cell.$dirty && inputform.cell.$valid, 'glyphicon-remove': inputform.cell.$dirty && inputform.cell.$invalid}" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.job.$dirty && inputform.job.$valid, 'has-error': inputform.job.$dirty && inputform.job.$invalid}">
          <input type="text" class="better-placeholder form-control" name="job" placeholder="Student/Worker??" ng-model="data.job" required ng-disabled="isImageCorrect">
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.job.$dirty && inputform.job.$valid, 'glyphicon-remove': inputform.job.$dirty && inputform.job.$invalid}" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback" ng-class="{'has-success': inputform.company.$dirty && inputform.company.$valid, 'has-error': inputform.company.$dirty && inputform.company.$invalid}">
          <input type="text" class="better-placeholder form-control" name="company" placeholder="WorkPlace?" ng-model="data.company" required ng-disabled="isImageCorrect">
          <span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.company.$dirty && inputform.company.$valid, 'glyphicon-remove': inputform.company.$dirty && inputform.company.$invalid}" aria-hidden="true"></span>
        </div>
        <input type="text" name="hname" ng-show="false" value="<?php echo $this->session->userdata('hostel_name'); ?>">
        <input type="text" name="hid" ng-show="false" value="<?php echo $this->session->userdata('hostel_id'); ?>">
        <div class="form-group">
          <button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color:white;" ng-disabled="inputform.$invalid || inputform.$pristine">Submit</button>
        </div>
      </form>
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

    $('#fback').click(function(){
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