<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>

		<style>
			.container { padding-bottom: 15px; }
			.topbar { padding-top: 15px; }

			.topbar-legend-fhd,
			.topbar-legend-hd,
			.topbar-legend-hq,
			.topbar-legend-lq {
				width: 10px;
				height: 10px;
				display: inline-block;
			}

			.topbar-legend-fhd { background-color: lightgreen; }
			.topbar-legend-hd { background-color: skyblue; }
			.topbar-legend-hq { background-color: orange; }
			.topbar-legend-lq { border: 1px solid #777777; }
		</style>

		<title></title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row topbar">
				<div class="col-md-12">

					<div class="row">
						<div class="col-md-2">
							<a class="btn btn-primary btn-block" href=<?php echo base_url("add") ?>>
								<span class="fa fa-plus"></span>
								Add
							</a>
						</div>

						<div class="col-md-10">
							<div class="form-group has-feedback has-feedback-left">
								<i class="form-control-feedback glyphicon glyphicon-search"></i>
								<input type="text" class="form-control" placeholder="Search...">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Title</th>
										<th class="text-center">E / S / O</th>
										<th>File Size</th>
										<th>Date Finished</th>
										<th>Season</th>
										<th>Release</th>
										<th>Duration</th>
										<th>Encoder</th>
										<th>Variants</th>
										<th>Remarks</th>
									</tr>
								</thead>

								<tbody>

									<tr>
										<td>
											<div
												class="topbar-legend-fhd"
												data-toggle="tooltip"
												data-placement="auto"
												title="FHD 1080p">
											</div>
											<span>Kimi no na Wa</span>
										</td>
										<td class="text-center">1 / 0 / 0</td>
										<td>15.12 GB</td>
										<td>Aug 04, 2017</td>
										<td>N/A</td>
										<td>Summer 2016</td>
										<td>01:51:65</td>
										<td>Coalgirls</td>
										<td>KnNW</td>
										<td></td>
									</tr>

									<tr>
										<td>
											<div
												class="topbar-legend-lq"
												data-toggle="tooltip"
												data-placement="auto"
												title="LQ 360p">
											</div>
											<span>Bleach</span>
										</td>
										<td class="text-center">360 / 0 / 0</td>
										<td>61.50 GB</td>
										<td>Sep 15, 2015</td>
										<td>N/A</td>
										<td>Summer 2005</td>
										<td>146:35:22</td>
										<td>Lunar, DB, SGKK</td>
										<td>BLEACH!</td>
										<td>
											<dfn>
												<small>Redownload 1080p</small>
											</dfn>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

		<script>
			$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>
</html>
