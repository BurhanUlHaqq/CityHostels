<?php include"include/header.php"; ?>

<!--this script is for set document title-->
	<script type="text/javascript">
		$("document").ready(function() {
			$("title").text("Login - CityHostels");
		})
	</script>
<!-- body container -->
	<div class="container">
		<div class="row" style="margin-top: 5px;">
			<p><a href="<?=base_url();?>">Home</a> / Login</p>
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
		<div class="row" ng-app="loginForm" ng-controller="loginCont">
			<div class="col-lg-6" style="margin-top: 30px;">
				<form class="well" name="inputform" action="<?= base_url('login/matchAccount'); ?>" method="post">
				<h1 style="font-family: calibri; padding-bottom: 10px; font-size: 45px; font-weight: normal;">Login</h1>
				
					<div class="form-group has-feedback" ng-class="{'has-success': inputform.email.$dirty && inputform.email.$valid, 'has-error': inputform.email.$dirty && inputform.email.$invalid}">
						<input type="email" id="fback" class="better-placeholder form-control" id="user" name="email" placeholder="Enter Email" ng-model="data.email" required>
						<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.email.$dirty && inputform.email.$valid, 'glyphicon-remove': inputform.email.$dirty && inputform.email.$invalid}" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback" ng-class="{'has-success': inputform.password.$dirty && inputform.password.$valid, 'has-error': inputform.password.$dirty && inputform.password.$invalid}">
						<input type="password" class="better-placeholder form-control" name="password" placeholder="Enter Password" ng-model="data.password" required>
						<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok': inputform.password.$dirty && inputform.password.$valid, 'glyphicon-remove': inputform.password.$dirty && inputform.password.$invalid}" aria-hidden="true"></span>
					</div>
					<div class="form-group">
						<input type="checkbox" name=""> Remember Me(to stay logged-in on this computer even after you close the browser).
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-lg" style="background-color: CornflowerBlue; color:white;" ng-disabled="inputform.$invalid || inputform.$pristine">Login</button>
					</div>
				</form>
				<br><p class="text-muted">Forgot your password? <a href="<?=base_url('login/forgot');?>">Password Reset</a></p>
				<p class="text-muted">Need an account? <a href="<?=base_url('login/signup');?>">Sign-up</a></p>
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