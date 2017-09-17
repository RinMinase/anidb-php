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

			.table-unbordered > tbody > tr > td,
			.table-unbordered > tbody > tr > th {
				border-top: 0px;
			}

		</style>

		<title>Other Lists</title>
	</head>
	<body>

		<div class="container-fluid">
			<div class="page-header">
			  <h2>Last 20</h2>
				<a class="btn btn-primary" href=<?php echo base_url() ?>>
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-green">
						<div class="panel-heading">
							<h4>Statistics</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-condensed table-unbordered">
									<tbody>
										<tr>
											<th>Single Season (12 Episodes) per Day</th>
											<th>:</th>
											<th class="text-center">00.00</th>
										</tr>
										<tr>
											<th>Days Since Last Anime</th>
											<th>:</th>
											<th class="text-center">00</th>
										</tr>
										<tr>
											<th>Episodes per Day</th>
											<th>:</th>
											<th class="text-center">00.00</th>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>

				<div class="col-md-9">
					<div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
									<th>Title</th>
									<th>File Size</th>
									<th>Date Finished</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sample</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="page-header">
				<h2>List by Name</h2>
			</div>

			<div class="row">
				<div class="col-md-3">

					<div class="panel panel-green">
						<div class="panel-heading">
							<h4>Statistics</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th></th>
											<th class="text-center">Titles</th>
											<th class="text-center">File Size</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>A</th>
											<td class="text-center">15</td>
											<td class="text-center">00.00 GB</td>
										</tr>
										<tr>
											<th>C</th>
											<td class="text-center">2</td>
											<td class="text-center">00.00 GB</td>
										</tr>
										<tr>
											<th>D</th>
											<td class="text-center">3</td>
											<td class="text-center">00.00 GB</td>
										</tr>
										<tr>
											<th>F</th>
											<td class="text-center">7</td>
											<td class="text-center">00.00 GB</td>
										</tr>
										<tr>
											<th>H</th>
											<td class="text-center">5</td>
											<td class="text-center">00.00 GB</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-9">

					<div class="row">
						<div class="col-md-12">
							<div class="panel-group">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#panel-a" data-toggle="collapse">A&nbsp;&nbsp;<span class="badge">15</span></a>
											<p class="pull-right">00.00 GB</p>
										</h4>
									</div>
									<div id="panel-a" class="panel-collapse collapse">
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
											<a href="#panel-c" data-toggle="collapse">C&nbsp;&nbsp;<span class="badge">2</span></a>
											<p class="pull-right">00.00 GB</p>
										</h4>
									</div>
									<div id="panel-c" class="panel-collapse collapse">
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
											<a href="#panel-d" data-toggle="collapse">D&nbsp;&nbsp;<span class="badge">3</span></a>
											<p class="pull-right">00.00 GB</p>
										</h4>
									</div>
									<div id="panel-d" class="panel-collapse collapse">
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
			</div>

		</div>

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

	</body>
</html>
