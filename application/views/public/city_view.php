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
         	var lat = Number(<?php echo json_encode($cityinfo[0]->cityLat); ?>);
			var long = Number(<?php echo json_encode($cityinfo[0]->cityLong); ?>);
			var mapOptions = {
               center:new google.maps.LatLng(lat, long), zoom:15,
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };
				
            var map = new google.maps.Map(document.getElementById("showmap"),mapOptions);
			var data = <?php echo json_encode($hostelinfo); ?>;
			for (var i = 0; i < Object.keys(data).length; i++) {
				var hostelLat  = data[i].latitude;
				var hostelLong = data[i].longitude;
				var marker 	   = new google.maps.Marker({
					position: new google.maps.LatLng(hostelLat, hostelLong),
					map: map,
				});
				var content = "<a href='http://[::1]/city_hostels/searchhostels/showHostel/" + data[i].H_id + "'><div style='height:100px; width:200px;'><img src='http://[::1]/city_hostels/assets/images/"+data[i].frontImage+"' height='100%' width='95%' style='position:absolute;' /><div style='position:absolute; height:40%; z-index:100; color:white; width:95%; background-color:rgba(0, 0, 0, 0.7); font-size:16px; padding:7px; font-weight:bold;'>"+data[i].H_Name+"</div></div></a>" ;
				
				var infowindow = new google.maps.InfoWindow();

				google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
			        return function() {
			           infowindow.setContent(content);
			           infowindow.open(map,marker);
			        };
			    })(marker,content,infowindow)); 
			}
         }
         google.maps.event.addDomListener(window, 'load', loadMap);
      </script>
      
<!-- body container -->
	<div class="container">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / <a href="<?=base_url('searchhostels/searchByState');?>">Punjab</a> / Bahawalnagar</p>
		</div>
		<div class="row">
			<h1 class="text-color" style="font-family: calibri; padding-bottom: 10px; font-size: 45px; "><span style="font-weight: bold;"><?php echo ucwords($cityinfo[0]->cityName); ?></span> Hostels</h1>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="row" style="height: 300px; padding: 10px;">
					<img src="<?=base_url('assets/images/hostel1.jpg');?>" width="100%" height="100%">
				</div>
				<div class="row">
					<div class="row" style="background-color: CornflowerBlue; margin: 5px; padding: 2px; border-radius: 2px;">
						<span style="font-size: 16px; color: white; margin:2px; padding-left: 5px;">About <?php echo ucwords($cityinfo[0]->cityName); ?></span><span style="float: right; margin:5px; color:white;" class="glyphicon glyphicon-triangle-bottom"></span>
					</div>
					<div class="row" style="margin: 5px; padding: 10px; text-align: justify;">
						<?php echo $cityinfo[0]->Discription; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row" style="padding-left: 10px;">
					<h1 class="text-color"><span style="font-weight: bold;">
						<?php $i = 0; if ($hostelinfo) {
							foreach ($hostelinfo as $key) {
								$i++;
							}
							echo $i;
							} else {
							echo "0";
							} 
						?>
					</span> hostels found</h1>
				</div>
				<div class="row">
					<div style="float: right; margin-right: 10px;">
						<form class="form-inline">
							<select class="form-control">
								<option>Sort by: Default</option>
							</select>
							<select class="form-control">
								<option>Hostels per page: Default</option>
							</select>
							<button type="button" class="btn btn-default collapsed" data-toggle="collapse" data-target="#map" onmouseleave="loadMap()">Show map</button>
						</form>
					</div>
				</div>
				<div class="row collapse" id="map">
					<div id="showmap" style="width:100%; height:500px;"></div>
				</div>
				<hr size="100%;">
				<div class="row" style="margin:0 auto;">
				<?php if ($hostelinfo) {
					# code...
				 foreach ($hostelinfo as $info): ?>
					<a href="<?=base_url('searchhostels/showHostel/'.$info->H_id);?>"><div id="image" style="height: 250px; width: 30%; margin:1%; border:5px solid #f0f0f0; display: inline-block; position: relative;">
						
						<img src="<?= base_url('assets/images/'.$info->frontImage); ?>" height="100%" width="100%" style="position: absolute;">
						<div style="position: absolute; color: white; height: 20%; width: 100%; background: rgba(0,0,0, 0.7);font-size: 20px; padding: 5px;"><?php echo ucwords($info->H_Name); ?></div>
						<div style="position: absolute; z-index: 100;color: white; height: 30%; width: 100%; background: rgba(0,0,0, 0.7); top: 70%; font-size: 14px; padding: 5px;"><p><?php echo substr($info->Discription, 0,100); ?> ...</p></div>
					</div></a>
				<?php endforeach; } else { ?>
				<?php echo "No hostel registerd yet for ".ucwords($cityinfo[0]->cityName); } ?>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php include"include/footer.php"; ?>