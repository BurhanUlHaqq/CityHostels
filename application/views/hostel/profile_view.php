<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Updating Profile</title>
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>" type="image/x-icon" /> 
  
    <!-- Bootstrap Core CSS -->
    <?= link_tag('assets/css/bootstrap.css'); ?>
    <?= link_tag('assets/css/simple-sidebar.css'); ?>
  <script src="<?=base_url('assets/js/jquery.js');?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/angular.js');?>"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/angular-better-placeholders.css');?>">
  <script type="text/javascript" src="<?=base_url('assets/js/angular-better-placeholders.js');?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/angular-script.js');?>"></script>
  
  <script>
    $(document).ready(function(){
      
      $('.alert').click(function(){
        $('.alert').slideUp();
      });
      
    });
  </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>

    
</head>

<body>
<div class = "container-fluid" style="background-color: #000; padding: 0px;">
  <nav class="navbar" style = "margin-bottom:0px; background-color: CornflowerBlue; border-radius: 0px;">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="<?= base_url('login/logout'); ?>" style = "color:#FFFFE0;" onMouseOver="this.style.color='CornflowerBlue'" onMouseOut="this.style.color='#FFFFE0'" ><span class="glyphicon glyphicon-log-out"></span><b> Logout</b>
        </a>
      </li>
      </ul>
    </div>
  </div>
  </nav>
  </div>


<div class = "container-fluid" style="padding: 0px;">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h2 style="color: black;" class="heading">Hostel name</h2>
      <ul class="nav nav-tabs">
        <li class="active" id="profileMenu"><a data-toggle="tab" href="#home">Profile</a></li>
        <li id="featureMenu"><a data-toggle="tab" href="#menu1">Features</a></li>
        <li id="imagesMenu"><a data-toggle="tab" href="#menu2">Images</a></li>
      </ul>
      <div class="tab-content" ng-app="hostelprofileApp" ng-controller="hostelprofileCont">
        <form action="<?=base_url('hostelprofile/profiledata');?>" method="post" name="inputform" enctype = "multipart/form-data">
          <div id="home" class="tab-pane fade in active">
            <h3>Profile</h3>
            <?php include 'include/profiletable.php'; ?>
          </div>
          <div id="menu1" class="tab-pane fade">
            <h3>Features</h3>
            <?php include 'include/featuretable.php'; ?>
          </div>
          <div id="menu2" class="tab-pane fade">
            <h3>Images</h3>
            <?php include 'include/imagetable.php'; ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$('#profileMenu').ready(function() {
  $('#home').show();
  $('#menu1').hide();
  $('#menu2').hide();
});
$('#featureMenu').click(function() {
  $('#menu1').show();
  $('#home').hide();
  $('#menu2').hide();
});

$('#profileMenu').click(function() {
  $('#home').show();
  $('#menu1').hide();
  $('#menu2').hide();
});
$('#imagesMenu').click(function() {
  $('#home').hide();
  $('#menu1').hide();
  $('#menu2').show();
});
</script>

<?php include 'include/footer.php'; ?>