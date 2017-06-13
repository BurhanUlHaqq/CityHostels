<?php include"include/header.php"; ?>

<!--this script is for set document title-->
<script type="text/javascript">
	$("document").ready(function() {
		$("title").text("Bahawalnagar City Hostels Review - CityHostels");
	})
</script>


<!-- <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASqHDukT_CgBzj277OvM4gLnEMThHgSh0&callback=loadMap"
    async defer></script>
<!-- script for showing city map -->
<script>
	function loadMap() {
		var lat = Number(<?php echo json_encode($hostelinfo[0]->latitude); ?>);
		var long = Number(<?php echo json_encode($hostelinfo[0]->longitude); ?>);
		var mapOptions = {
			center:new google.maps.LatLng(lat, long), zoom:16,
			mapTypeId:google.maps.MapTypeId.HYBRID
		};
		
		var map = new google.maps.Map(document.getElementById("showMap"),mapOptions);
		var marker 	   = new google.maps.Marker({
			position: new google.maps.LatLng(lat, long),
			map: map,
		});
	}
	google.maps.event.addDomListener(window, 'load', loadMap);
	alert();
</script>
      
<!-- body container -->
	<div class="container" ng-app="hostelViewApp">
		
		<!-- previous path -->
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / <a href="<?=base_url('searchhostels/searchByState');?>">Punjab</a> / Bahawalnagar</p>
		</div>
		
		<!-- hostel name -->
		<div class="row">
			<h1 class="text-color" style="font-family: calibri; padding-bottom: 10px; font-size: 45px; "><span style="font-weight: bold;"><?php echo ucwords($hostelinfo[0]->H_Name); ?> Hostel</span></h1>
		</div><hr><hr>
		
		<!-- displaying images in slide -->
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?= base_url('assets/images/'.$hostelinfo[0]->frontImage); ?>" alt="hostel front image">
					</div>

					<div class="item">
						<img src="<?= base_url('assets/images/'.$himages[0]->room1); ?>" alt="image1">
					</div>

					<div class="item">
						<img src="<?= base_url('assets/images/'.$himages[0]->room2); ?>" alt="image2">
					</div>

					<div class="item">
						<img src="<?= base_url('assets/images/'.$himages[0]->pic1); ?>" alt="image3">
					</div>

					<div class="item">
						<img src="<?= base_url('assets/images/'.$himages[0]->pic2); ?>" alt="image4">
					</div>
				</div>


				</div>
		</div>
		<div class="row" ng-controller="hostelViewCont">
			
			<!-- displaying hostel specificaion -->
			<div class="col-lg-3">
				<div class="row headings headings_style" ng-click="showDetailFunc()">Features & Details</div>
					<div ng-show="showDetail" class="content">
						<div class="row content"><h5 style="font-weight: bold;">Recommended For</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->recommend); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-tag" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
						<div class="row content"><h5 style="font-weight: bold;">Free Amenities</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->free_facilities); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-ok-sign" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
						<div class="row content"><h5 style="font-weight: bold;">Paid Services</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->paid_facilities); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-ok-sign" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
						<div class="row content"><h5 style="font-weight: bold;">Other Features</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->others); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-ok-sign" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
						<div class="row content"><h5 style="font-weight: bold;">Offered</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->offered); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-ok-sign" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
						<div class="row content"><h5 style="font-weight: bold;">Not Allowed</h5>
							<script type="text/javascript">
								var freeFacilities = <?php echo json_encode($hfeatures[0]->not_allowed); ?>;
								var list = freeFacilities.split(",");
								for (var i = 0; i < list.length; i++) {
									document.write('<span class="glyphicon glyphicon-ok-sign" style="color:#53c68c;"></span><span class="listItem text-capitalize">'+list[i].trim()+'</span><br>');
								}
							</script>
						</div><hr>
					</div>
			</div>
			
			<!-- displaying hostel infromation in details -->
			<div class="col-lg-9">
				
			<!-- hostel discription -->
				<div class="row headings headings_style" ng-click="showDescFunc()">Description</div>
					<div ng-show="showDesc" class="content text-color">
						<?php echo $hostelinfo[0]->Discription; ?>
					</div>
				
				<!-- display hostel on map -->
				<div class="row headings headings_style" ng-click="showMapFunc()" onmouseleave="loadMap()">Map</div>
					<div ng-show="showMap" class="content" id="showMap" style="height: 500px;"></div>
				
				<!-- display contact info of hostel admin -->
				<div class="row headings headings_style" ng-click="showLocFunc()">Location/Contact</div>
					<div ng-show="showLoc" class="content">
						<table class="table table-bordered">
							<tr>
								<td style="font-weight: bold; font-size: 15px;" align="right">Address</td>
								<td class="text-color"><?php echo  ucwords($hostelinfo[0]->street_address).", ".ucwords($hostelinfo[0]->city); ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold; font-size: 15px;" align="right">Coordinates</td>
								<td class="text-color"><?php echo  ucwords($hostelinfo[0]->latitude).", ".ucwords($hostelinfo[0]->longitude)." (accuracy not guaranteed)"; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold; font-size: 15px;" align="right">Telephone/Cell #</td>
								<td class="text-color"><?php echo  ucwords($hostelinfo[0]->contact); ?></td>
							</tr>
						</table>
					</div>
				
				<!-- display and form of reviews from guest -->
				<!-- <div class="row headings headings_style" ng-click="showCityHostelFun()">CityHostels.com Guest Reviews</div>
				   <div ng-show="showCityHostel" class="content"><h1>Hello City Hostel</h1></div>
				<div class="row headings headings_style">Rate Hostel</div> -->
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.headings:hover {
		text-decoration: underline;
	}

	.headings_style{
		background-color: CornflowerBlue;
		margin: 5px;
		margin-bottom: 10px;
		padding: 5px;
		padding-left: 10px;
		border-radius: 2px;
		font-size: 16px;
		color: white;
	}
	.content{
		margin:5px;
		margin-top: 0px;
		margin-bottom: 0px;
		padding: 5px;
		padding-top: 0px;
		padding-bottom: 0x;
	}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		height: 500px;
		width: 700px;
		margin: auto;
	}
	.content.row{
		margin:0px;
		padding: 0px;
		font-weight: bold;
		font-family: calibri;
		font-size: 15px;
	}
	.listItem{
		font-weight: normal;
		margin-left: 5px;
	}
</style>
<?php include"include/footer.php"; ?>