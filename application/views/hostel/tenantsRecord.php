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
    <div class="col-lg-10 col-lg-offset-1 table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Sr.</th>
            <th>Name</th>
            <th>Cell #</th>
            <th>Image</th>
            <th>Details</th>
            <th>Update</th>
            <th>Deactive</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach ($tenantsRecord as $tenant): ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo ucwords($tenant->Name); ?></td>
            <td><?php echo $tenant->Cell_No; ?></td>
            <td>
              <img src="<?=base_url('assets/images/'.$tenant->image);?>" height="120px" width="100px" id="<?php echo $tenant->T_Id; ?>" alt="<?php echo ucwords($tenant->Name).' image'; ?>">
            </td>
            <td>
              <button class="btn btn-sm btn-info my-bg-color" data-toggle="modal" data-target="#1<?php echo $tenant->T_Id; ?>">Show Details</button>
              <?php include 'showDetail.php'; ?>
            </td>
            <td>
              <button class="btn btn-sm btn-info my-bg-color">Update Record</button>
            </td>
            <td>
              <button class="btn btn-sm btn-info my-bg-color">Relatives</button>
            </td>
            <td>
              <button class="btn btn-sm btn-danger">Deactive Tenant</button>
            </td>
          </tr>

          <!-- The Modal -->
          <div id="myModal" class="modal1">
            <span class="close">&times;</span>
            <img class="modal-content1" id="img01">
            <div id="caption"></div>
          </div>

          <script>
            var imgid = <?php echo json_encode($tenant->T_Id); ?>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById(imgid);
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
          
            $(<?php echo json_encode("#".$tenant->T_Id); ?>).mouseenter(function(){
              $(<?php echo json_encode("#".$tenant->T_Id); ?>).css("cursor","zoom-in");
            });
          </script>
          <?php $i++; endforeach; ?>
        </tbody>
      </table>
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
  function zoom(){
      alert();
    }
</script>
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

<?php include 'include/footer.php'; ?>