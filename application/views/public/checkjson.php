<?php include 'include/header.php'; ?>
<script type="text/javascript">
	$('document').ready(function() {
		var lat = <?php echo json_encode($hostelinfo[0]->latitude); ?>;
		alert(lat);

	});
</script>
<div class="container" id="showjson" style="height: 600px; border:1px solid red;">
	
	<div><pre><?php print_r($hostelinfo[0]->latitude); ?></pre></div>
	
</div>
<?php include 'include/footer.php'; ?>