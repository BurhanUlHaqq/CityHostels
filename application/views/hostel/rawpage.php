<?php include 'include/header.php'; ?>
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
  <div class="row">
    <div class="col-lg-12">
      <h2 style="color: black;" class="heading">Hostel name</h2>
      <table class = "table-bordered col-lg-12 table" style = "width:100%;">
        <tr>
          <th style = "width:20%;">Name</th>
          <th style = "width:20%;">Father Name</th>
          <th style = "width:20%;">CNIC</th>
          <th style = "width:20%;">Cell</th>
          <th style = "width:20%;">Job</th>
        </tr>
        <!-- <?php 
        if (sizeof($info,1)>8) {
        foreach ($info as $value):
        ?>
        <tr class="success">
        <td><?php echo ucfirst($value['Name']); ?></td>
        <td><?php echo ucfirst($value['F_Name']); ?></td>
        <td><?php echo $value['CNIC']; ?></td>
        <td><?php echo $value['Cell_No']; ?></td>
        <td><?php echo $value['job']; ?></td>
        </tr>
        <?php endforeach; }?> -->
      </table>
    </div>
  </div>
</div>
</div>
<!-- /#page-content-wrapper -->

</div>
</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

<?php include 'include/footer.php'; ?>