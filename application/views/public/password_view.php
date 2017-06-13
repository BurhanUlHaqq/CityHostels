<?php include"include/header.php"; ?>

<!--this script is for set document title-->
	<script type="text/javascript">
		$("document").ready(function() {
			$("title").text("Create New Password - CityHostels");
		})
	</script>
<!-- body container -->
	<div class="container" style="height: 500px;">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / Create New Password</p>
			<?php print_r($this->session->userdata('temp_email')); ?>
		</div>
		<div class="row" style="padding: 10px;">
			<div id="info" style="width: 84%; float: left;">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">Create New Password</h1>
				<p style="font-family: calibri; font-size: 17px;">Sign-up for a CityHostels user account so you can keep track of your reviews, bookings, and more.<hr>Please enter your email address below and we'll send you an email with information on how to activate your account. <i>Your email address will be kept private and you won't be added to any mailing lists.</i></p>
			</div>
			<div id="image" style="width: 16%; float: left;">
				<img src="<?=base_url('assets/images/hostel1.jpg');?>" style="height: 205px; width: 188px;">
			</div>
		</div>
		<div class="row" ng-app="passwordForm" ng-controller="passwordCont">
			<div class="col-lg-6">
				<form class="well" name="inputform" action="<?= base_url('login/createAccount'); ?>" method="post">
					<div class="form-group has-feedback" ng-class="{'has-success': inputform.pass.$dirty && inputform.pass.$valid, 'has-error': inputform.pass.$dirty && inputform.pass.$invalid}">
						<input type="Password" class="better-placeholder form-control" id="pass" name="pass" placeholder="Enter Password" ng-model="data.pass" required>
					</div>
					<div class="form-group has-feedback" ng-class="{'has-success': inputform.rpass.$dirty && inputform.rpass.$valid, 'has-error': inputform.rpass.$dirty && inputform.rpass.$invalid}">
						<input type="Password" class="better-placeholder form-control" id="rpass" name="rpass" placeholder="Re-Enter Password" ng-model="data.rpass" required onkeyup="checkPass();">
						<span id="confirmMessage" class="confirmMessage"></span>
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color:white;" ng-disabled="inputform.$invalid || inputform.$pristine">Submit</button>
					</div>
				</form>
				
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$('#fback').click(function(){
			$('.alert').slideUp();
		});
		
	});
</script>
<?php include"include/footer.php"; ?>