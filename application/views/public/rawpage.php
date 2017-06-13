<?php include"include/header.php"; ?>

<!--this script is for set document title-->
	<script type="text/javascript">
		$("document").ready(function() {
			$("title").text("Bahawalnagar City Hostels Review - CityHostels");
		})
	</script>
<!-- body container -->
	<div class="container" style="border:1px solid red;">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / <a href="<?=base_url('searchhostels/searchByState');?>">Punjab</a> / Bahawalnagar</p>
		</div>
		<div class="row">
			<h1 class="text-color" style="font-family: calibri; padding-bottom: 10px; font-size: 45px; "><span style="font-weight: bold;">Bahawalnagar</span> Hostels</h1>
		</div>
		<div class="row">
			<div class="col-lg-3" style="border:1px solid green;">
				<div class="row" style="height: 300px; padding: 10px;">
					<img src="<?=base_url('assets/images/hostel1.jpg');?>" width="100%" height="100%">
				</div>
				<div class="row">
					<div class="row" style="background-color: CornflowerBlue; margin: 5px; padding: 2px; border-radius: 2px;">
						<span style="font-size: 16px; color: white; margin:2px; padding-left: 5px;">About Bahawalnager</span><span style="float: right; margin:5px; color:white;" class="glyphicon glyphicon-triangle-bottom"></span>
					</div>
					<div class="row" style="margin: 5px; border:1px solid black; padding: 10px; text-align: justify;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="col-lg-9" style="border:1px solid black;">
				<div class="row" style="padding-left: 10px;">
					<h1><span style="font-weight: bold;">
						<?php echo $this->session->userdata('numofhostels'); ?>
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
							<button class="form-control"><span class="fa fa-map"></span>Show map</button>
						</form>
					</div>
				</div><hr size="100%;">
				<div class="row" style="margin:0 auto;">
				<?php $i = 0; foreach ($hostelinfo as $info): ?>
					<a href="<?=base_url('searchhostels/showHostel/'.$info->H_id);?>"><div id="image" style="height: 250px; width: 30%; margin:1%; border:5px solid #f0f0f0; display: inline-block; position: relative;">
						
						<img src="<?= base_url('assets/images/'.$himages[$i]->front); ?>" height="100%" width="100%" style="position: absolute;">
						<div style="position: absolute; z-index: 100;color: white; height: 20%; width: 100%; background: rgba(0,0,0, 0.7);font-size: 20px; padding: 5px;"><?php echo ucwords($info->H_Name); ?></div>
						<div style="position: absolute; z-index: 100;color: white; height: 30%; width: 100%; background: rgba(0,0,0, 0.7); top: 70%; font-size: 14px; padding: 5px;"><p><?php echo substr($info->Discription, 0,100); ?> ...</p></div>
					</div></a>
				<?php $i++; endforeach; ?>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php include"include/footer.php"; ?>