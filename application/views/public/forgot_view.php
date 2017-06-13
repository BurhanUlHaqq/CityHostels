<?php include"include/header.php"; ?>

<!--this script is for set document title-->
	<script type="text/javascript">
		$("document").ready(function() {
			$("title").text("Password Rest - CityHostels");
		})
	</script>
<!-- body container -->
	<div class="container" style="height: 500px;">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / Password Rest</p>
		</div>
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
		<div class="row" style="padding: 10px;">
			<div id="info" style="width: 84%; float: left;">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">Password Reset</h1>
				<p style="font-family: calibri; font-size: 17px;">An email will be sent to your email address with instructions on how to set a new password.</p>
			</div>
		</div>
		<div class="row" ng-app="reset-password-app" ng-controller="reset-password-Cont">
			<div class="col-lg-6">
				<form class="well" name="inputform" method="post" action="<?= base_url('login/check_email'); ?>">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">Enter Your Email</h1>
					<div class="form-group has-feedback" ng-class="{'has-success': inputform.email.$dirty && inputform.email.$valid, 'has-error': inputform.email.$dirty && inputform.email.$invalid}">
						<input type="email" class="better-placeholder form-control" name="email" placeholder="Enter your Email please" ng-model='data.email' id="fback" required>
						<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.email.$dirty && inputform.email.$valid, 'glyphicon-remove': inputform.email.$dirty && inputform.email.$invalid}" aria-hidden="true">
					</div>
					<button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color:white;" ng-disabled="inputform.$invalid || inputform.$pristine">Submit</button>
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