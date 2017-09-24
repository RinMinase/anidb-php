
		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>
		<script src=<?php echo base_url("resources/js/scripts.js") ?>></script>

		<?php
			if(!empty($customJS)) {
				echo "<script src='<?php echo base_url(" . $customJS . ") ?>'></script>";
			}
		?>

	</body>
</html>
