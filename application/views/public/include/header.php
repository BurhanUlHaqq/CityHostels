<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>" type="image/x-icon" /> 
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/mystyle.css');?>">
	<script src="<?=base_url('assets/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/angular.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/js/conformpass.js');?>"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/angular-better-placeholders.css');?>">
    <script type="text/javascript" src="<?=base_url('assets/js/angular-better-placeholders.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/angular-script.js');?>"></script>
    <style type="text/css">
		.text-color{
			color: #444444;
			font-family: calibri;
			font-size: 17px;
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row" style="background-color: #F5F5F5;">
		<div class="container" style="height: 100%;  margin: 0 auto; padding: 0px;">
			<div class="col-lg-8" style=" border-right: 1px solid;border-color: rgba(101, 101, 101, 0.1); padding: 0px;">
				<div style="float: left; padding: 0px;" class="col-lg-5">
					<a href="<?=base_url()?>">
						<img src="<?=base_url('assets/images/logo3.png');?>" height="70px;" />
					</a>
				</div>
				<div style="float: left;" class="col-lg-7">
					<h5 align="right" style="font-style: oblique; letter-spacing: 1px; line-height: 1.5; font-family: sans-serif;">pakhostels is the only web site with free listenings<br> and information about all hostels of Pakistan.</h5>
				</div>
			</div>
			<div class="col-lg-3" style="padding: 16px; border-right: 1px solid;border-color: rgba(101, 101, 101, 0.1);">
				<div class="input-group">
					<input type="text" class="form-control" name="" placeholder="Find Tenant :">
					<span class="input-group-btn">
						<button class="btn btn-secondary" style="background-color: CornflowerBlue; color:white;"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</div>
			<div class="col-lg-1" style="padding: 16px; border-right: 1px solid;border-color: rgba(101, 101, 101, 0.1);">
				<div id="loginbtn">
					<span id="login-btn"><a class="btn btn-md btn-default" style="background-color: CornflowerBlue; color:white;" href="<?=base_url('login');?>">Login</a></span>
				</div>
			</div>
		</div>
	</div>
</div>