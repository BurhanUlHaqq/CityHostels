<!DOCTYPE html>
<html>
<head>
	<title>City Hostels</title>
	<link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/indexstyle.css')?>">
	
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
    <script src="<?=base_url('assets/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
	<style type="text/css">
		body{
			background-image: url(assets/images/back.jpg);
			background-color: red;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;		
		}
		li a{
			display: block;
			text-align: center;
			text-decoration: none;
			color: rgba(255, 255, 255, 1);
			width: 150px;
			
		}
		li a:hover{
			color: rgba(255, 255, 255, 1);
		}
	</style>
</head>
<body>
	<div class="container" style="margin:0 auto; background: rgba(0, 0, 0, 0.3);">

	<!--this is header contain login button-->
		<div class="row" style="height: 50px; background: rgba(28, 32, 33, 0.1);">
			<span style="margin: 10px 10px; float: right;"><a class="btn btn-sm btn-default" style="background-color: CornflowerBlue; color:white; border-color: CornflowerBlue;" href="<?=base_url('login');?>">Login</a></span>
		</div>

	<!--this is banner contain logo and message-->
		<div class="row" style="background: rgba(28, 32, 33, 0.2); height: 200px;">
			<div class="col-lg-6" style="padding-top: 20px;">
				<img src="<?= base_url('assets/images/logo3.png');?>" />
			</div>
			<div class="col-lg-6" style="text-align: right;">
				<h3 style="color: white;">hey this is over new site</h3>
				<h1 style="font-weight: bold; color: white;">this site working all over pakistan</h1>
			</div>
		</div>

	<!--this is container contain search box map and navigation-->
		<div class="row" style="background: rgba(28, 32, 33, 0.5); height: 250px;">
			<div class="row" style="height: 80%;">
				<div class="col-lg-6 form-group form-inline" style="padding-left: 40px; padding-top: 30px;">
					<label for="usr"><h3 style="color: white;">Find hostels in:</h3></label><br>
					<input type="text" class="form-control input-lg" size="35%" id="usr" placeholder="Enter a City or Hostel.">
					<button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color: white; margin-left: 10px; border-color: CornflowerBlue;"><span class="glyphicon glyphicon-search"></span>Search</button>
				</div>
				<div class="col-lg-6"></div>
			</div>

			<!--this div contain navigation-->
			<div class="row" style="height: 20%;">
				<div id="cityNav" style="padding-left: 35px; clear: left;">
					<div style="float: left; padding: 5px;"><label class="label label-default" style="font-size: 14px; color: white; background-color: CornflowerBlue;">Featured Cities:</label></div>
					<?php foreach ($cities as $city): ?>
					<div id="cityNavList" style="background-color: rgba(0, 0, 0, 0.3); margin-right: 2px; border-radius: 5px;">
						<a href="<?=base_url('searchhostels/searchByCity/'.$city->cityName);?>"><?php echo ucwords($city->cityName) ; ?></a>
					</div>
				<?php endforeach; ?>
				</div>
				
			</div>
		</div>
		
		<!---->
		<div class="row" style="height: 300px;" id="rules">
			<p><h3 style="text-align: center; color: white;">Compare the prices from all the hostels at once.<br><br>Real uncensored reviews you can trust.<br><br>Complete information on all hostels of Pakistan.</h3><br>
			<h1 style="text-align: center; color: white;">The only hostel website you'll ever need.</h1>
			</p>
		</div>
		<div class="row" style="height: 300px; width: 99%; margin: 0 auto; background-color: rgba(28, 32, 33, 0.4); border-radius: 5px;" id="qouts">
			<h1 style="text-align: center; color: white;">hello this is qouts section</h1>
		</div>
		<div class="row" style="" id="ads">
			<div class="ads"><p style="text-align: center; color: white; font-size: 20px; font-weight: bold;">TOLET</p></div>
			<div class="ads"><p style="text-align: center; color: white; font-size: 20px; font-weight: bold;">TOLET</p></div>
			<div class="ads"><p style="text-align: center; color: white; font-size: 20px; font-weight: bold;">TOLET</p></div>
			<div class="ads"><p style="text-align: center; color: white; font-size: 20px; font-weight: bold;">TOLET</p></div>
		</div>
		<div class="row" style="background-color: rgba(0, 0, 0, 0.5); height: 140px;" id="footerindex">
			<div style="height: 100%; width: 100%; margin: 0 auto;">
				<ul id="footerNav">
					<li class="footerNavItem"><a href="#">About PakHostels</a></li>
					<li class="footerNavItem"><a href="#">Privacy Policy</a></li>
					<li class="footerNavItem"><a href="#">Submit a New Hostel</a></li>
					<li class="footerNavItem"><a href="#">Contact PakHostels</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>