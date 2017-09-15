<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>

		<style>

			div.panel-green { border-color: #7CC87F; }
			div.panel-green > .panel-heading {
				border-color: #7CC87F;
				background-color: #95CE92;
				color: #555555;
			}

			.anime-legend-uhd,
			.anime-legend-fhd,
			.anime-legend-hd,
			.anime-legend-hq,
			.anime-legend-lq {
				width: 10px;
				height: 10px;
				display: inline-block;
			}

			.anime-legend-uhd { background-color: #FF99CC; }
			.anime-legend-fhd { background-color: #99FF99; }
			.anime-legend-hd { background-color: #99CCFF; }
			.anime-legend-hq { background-color: #FFCC66; }
			.anime-legend-lq { border: 1px solid #777777; }

			.form-horizontal .control-label { text-align: left;	}

		</style>

		<title>Disk Simulator</title>
	</head>
	<body>

		<div class="container-fluid">
			<div class="page-header">
				<h2>Disk Simulator</h2>
				<a class="btn btn-primary" href=<?php echo base_url("hdd-list") ?>>
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-green">
						<div class="panel-heading">
							<h4>Disks</h4>
						</div>
						<div class="panel-body">

							<div class="row">
								<div class="col-md-12">
									<h4>Add</h4>

									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-12">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-xs-3 col-sm-4 col-md-5 col-lg-4">From :</label>
													<div class="col-xs-9 col-sm-8 col-md-7 col-lg-8">
														<input type="text" name="drive-letter-from" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-12">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-xs-3 col-sm-4 col-md-5 col-lg-4">To :</label>
													<div class="col-xs-9 col-sm-8 col-md-7 col-lg-8">
														<input type="text" name="drive-letter-to" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<a href="#" class="btn btn-primary btn-block">Add</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">

									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
											<p><strong>A - I</strong></p>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
											<div class="progress">
												<div class="progress-bar progress-bar-success" style="width:50%">50%</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
											<p><strong>J - Q</strong></p>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
											<div class="progress">
												<div class="progress-bar progress-bar-warning" style="width:80%">80%</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
											<p><strong>R - Z</strong></p>
										</div>
										<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
											<div class="progress">
												<div class="progress-bar progress-bar-danger" style="width:90%">90%</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>


				</div>

				<div class="col-md-9">
					<div class="panel-group">

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-ai" data-toggle="collapse">A - I</a>
									<div class="pull-right">
										<span class="badge">75</span>
										<span>&nbsp;00.00 GB</span>
									</div>
								</h4>
							</div>
							<div id="panel-ai" class="panel-collapse collapse">
								<div class="panel-body">

									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Title</th>
													<th>File Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Sample</td>
													<td>Sample</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-jq" data-toggle="collapse">J - Q</a>
									<div class="pull-right">
										<span class="badge">92</span>
										<span>&nbsp;00.00 GB</span>
									</div>
								</h4>
							</div>
							<div id="panel-jq" class="panel-collapse collapse">
								<div class="panel-body">

									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
												<tr>
													<th>Title</th>
													<th>File Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Sample</td>
													<td>Sample</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-rz" data-toggle="collapse">R - Z</a>
									<div class="pull-right">
										<span class="badge">107</span>
										<span>&nbsp;00.00 GB</span>
									</div>
								</h4>
							</div>
							<div id="panel-rz" class="panel-collapse collapse">
								<div class="panel-body">

									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
												<tr>
													<th>Title</th>
													<th>File Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Sample</td>
													<td>Sample</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

	</body>
</html>
