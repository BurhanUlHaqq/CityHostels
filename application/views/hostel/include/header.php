<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>" type="image/x-icon" /> 
  
    <!-- Bootstrap Core CSS -->
    <?= link_tag('assets/css/bootstrap.css'); ?>
    <?= link_tag('assets/css/simple-sidebar.css'); ?>
	<script src="<?=base_url('assets/js/jquery.js');?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/angular.js');?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
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

  <style type="text/css">
    .my-bg-color{
      background-color: CornflowerBlue;
      border-color: CornflowerBlue;
    }
    /* style for zoom image with modal */
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal1 {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 2; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content1 {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 400px;
        max-height: 400px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 400px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content1, #caption {    
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 150px;
        right: 350px;
        color: #ffffff;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #ffffff;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content1 {
            width: 100%;
        }
    }
  </style>
    
</head>

<body>
<div class = "container-fluid" style="background-color: #000; padding: 0px;">
  <nav class="navbar" style = "margin-bottom:0px; background-color:	CornflowerBlue; border-radius: 0px;">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="#" style = "color:#FFFFE0;" onMouseOver="this.style.color='CornflowerBlue'" onMouseOut="this.style.color='#FFFFE0'" ><b id="hostelName"></b>
        </a>
      </li>
      <li>
        <a href="<?= base_url('login/logout'); ?>" style = "color:#FFFFE0;" onMouseOver="this.style.color='CornflowerBlue'" onMouseOut="this.style.color='#FFFFE0'" ><span class="glyphicon glyphicon-log-out"></span><b> Logout</b>
        </a>
      </li>
      </ul>
    </div>
  </div>
  </nav>
  </div>

  <div class="row" style="background-color: #222222; height: 60px; width: 100%; padding-top: 10px; margin: 0 auto; ">
    <div class="col-lg-12">
      <div class="col-lg-3">
        <form>
          <div id="search">
            <div class="input-group">
              <input type="text" class="form-control" name="" placeholder="Find hostels in:">
              <span class="input-group-btn">
                <button class="btn btn-secondary" style="background-color: CornflowerBlue; color:white;"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-9">
        <a href="#menu-toggle" class="btn btn-info btn-md" id="menu-toggle" title="hide/show sidebar" style="background-color: CornflowerBlue; border-color: CornflowerBlue;"><span class="glyphicon glyphicon-resize-horizontal"></span></a>
      </div>
    </div>
  </div>
  