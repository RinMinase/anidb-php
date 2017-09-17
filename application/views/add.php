<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/css/styles.css") ?>>

		<style>

			.container { padding-bottom: 15px; }
			.page-header { border-bottom: none; }

		</style>

		<title>Add</title>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12 page-header">
					<a class="btn btn-primary" href=<?php echo base_url() ?>>
						<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php echo form_open('addEntry', array('method' => 'GET')); ?>
						<legend>Add New Entry</legend>

						<div class="row">
							<div class="col-md-3 form-group">
								<label>Quality</label>
								<select class="form-control" name="quality">
									<option>4k 2160p</option>
									<option selected>FHD 1080p</option>
									<option>HD 720p</option>
									<option>HQ 480p</option>
									<option>LQ 480p</option>
								</select>
							</div>

							<div class="col-md-6 form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" required>
							</div>

							<div class="col-md-3 form-group">
								<label>Status</label>
								<select class="form-control" name="watchStatus">
									<option value="0" selected>Finished Watching</option>
									<option value="1">Currently Watching</option>
									<option value="2">Not Watched</option>
									<option value="3">For Downloading</option>
									<option value="4">Dropped</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 form-group">
								<label>Episodes</label>
								<input type="text" class="form-control" name="episodes">
							</div>
							<div class="col-md-1 form-group">
								<label>OVAs</label>
								<input type="text" class="form-control" name="ovas">
							</div>
							<div class="col-md-1 form-group">
								<label>Specials</label>
								<input type="text" class="form-control" name="specials">
							</div>
							<div class="col-md-2 form-group">
								<label>Season #</label>
								<input type="text" class="form-control" name="seasonNumber">
							</div>
							<div class="col-md-3 form-group">
								<label>Date Finished</label>
								<input type="date" class="form-control" name="dateFinished">
							</div>
							<div class="col-md-3 form-group">
								<label>File Size</label>
								<input type="text" class="form-control" name="filesize">
							</div>
						</div>

						<div class="row">
							<div class="col-md-5 form-group">
								<label>Season Released</label>
								<div class="row">
									<div class="col-md-8">
										<select class="form-control" name="releaseSeason">
											<option value="Winter">Winter</option>
											<option value="Spring">Spring</option>
											<option value="Summer">Summer</option>
											<option value="Fall">Fall</option>
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control" name="releaseYear">
											<option>2010</option>
											<option>2011</option>
											<option>2012</option>
											<option>2013</option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option selected>2017</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-2 form-group">
								<label>Duration</label>
								<input type="text"
									class="form-control text-center"
									name="duration"
									value="00:00:00">
							</div>

							<div class="col-md-5 form-group">
								<label>Subber / Encoder</label>
								<input type="text" class="form-control" name="encoder">
							</div>
						</div>

						<div class="row">
							<div class="col-md-8 form-group">
								<label>Variants</label>
								<input type="text" class="form-control" name="variants">
							</div>
							<div class="col-md-4 form-group">
								<label>Remarks</label>
								<input type="text" class="form-control" name="remarks">
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<button class="btn btn-primary btn-block">Submit</button>
							</div>
						</div>

					<?php echo form_close(); ?>
				</div>
			</div>

		</div>

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

	</body>
</html>
