<?php include"include/header.php"; ?>

<!--this script is for set document title-->
	<script type="text/javascript">
		$("document").ready(function() {
			$("title").text("New User Sign-up - CityHostels");
		})
	</script>
<!-- body container -->
	<div class="container">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / New User Sign-up</p>
		</div>
		<!-- showing insertion message -->
		<?php if ($feedback = $this->session->flashdata('feedback')): 
			$feedback_class = $this->session->flashdata('feedback_class');
		?>
		  	<div class="row">
		  		<div class="col-lg-6">
		  			<div class="alert <?= $feedback_class ?>">
					  <strong><?= $feedback; ?></strong>
					</div>
		  		</div>
		  	</div>
		  	
		  	
		<?php endif; ?>
		<div class="row" style="padding: 10px;">
			<div id="info" style="width: 84%; float: left;">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">New User Sign-up</h1>
				<p style="font-family: calibri; font-size: 17px;">Sign-up for a CityHostels user account so you can keep track of your hostel's all kind of record.<hr>Please enter your email address below and we'll send you an email with information on how to activate your account. <i>Your email address will be kept private and you won't be added to any mailing lists.</i></p>
			</div>
			<div id="image" style="width: 16%; float: left;">
				<img src="<?=base_url('assets/images/hostel1.jpg');?>" style="height: 205px; width: 188px;">
			</div>
		</div>
		<div class="row" ng-app="signUpApp" ng-controller="signUpCont">
			<div class="col-lg-6">
				<form class="well" name="inputform" action="<?= base_url('login/send_mail'); ?>" method="post">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">Sign-up</h1>
					<div class="form-group has-feedback" ng-class="{'has-success':inputform.email.$dirty && inputform.email.$valid, 'has-error':inputform.email.$dirty && inputform.email.$invalid}">
						<input type="email" class="better-placeholder form-control" name="email" placeholder="Enter Email" id="fback" ng-model="data.email" required>
						<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.email.$dirty && inputform.email.$valid, 'glyphicon-remove': inputform.email.$dirty && inputform.email.$invalid}" aria-hidden="true">
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color:white;" ng-disabled="inputform.$invalid || inputform.$pristine">Submit</button>
					</div>
				</form>
				
				<br>
				<p class="text-muted">You have account already? <a href="<?=base_url('login');?>">Login</a></p>
				<p class="text-muted">Forgot your password? <a href="<?=base_url('login/forgot');?>">Password Reset</a></p>
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