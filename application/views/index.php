<!DOCTYPE html>
<html>

	<?php
		// print_r($animeData);
		// echo "<br>";
		// echo json_encode($animeData) . "<br>";
		// foreach ($animeData as $item):
		// 	foreach ($item as $subitem):
		// 		echo $subitem . "<br>";
		// 	endforeach;
		// endforeach;
	?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>

		<style>
			.container { padding-bottom: 15px; }
			.topbar { padding-top: 15px; }

			.topbar-legend-uhd,
			.topbar-legend-fhd,
			.topbar-legend-hd,
			.topbar-legend-hq,
			.topbar-legend-lq {
				width: 10px;
				height: 10px;
				display: inline-block;
			}

			.topbar-legend-uhd { background-color: #FF99CC; }
			.topbar-legend-fhd { background-color: #99FF99; }
			.topbar-legend-hd { background-color: #99CCFF; }
			.topbar-legend-hq { background-color: #FFCC66; }
			.topbar-legend-lq { border: 1px solid #777777; }
		</style>

		<title></title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row topbar">
				<div class="col-md-12">

					<div class="row">
						<div class="col-md-1">
							<a class="btn btn-primary btn-block" href=<?php echo base_url("add") ?>>
								<span class="fa fa-plus"></span>&nbsp;&nbsp;&nbsp;Add
							</a>
						</div>

						<div class="col-md-10">
							<div class="form-group has-feedback has-feedback-left">
								<i class="form-control-feedback glyphicon glyphicon-search"></i>
								<input type="text" class="form-control" placeholder="Search...">
							</div>
						</div>

						<div class="col-md-1">
							<a class="btn btn-primary btn-block" href=<?php echo base_url("about") ?>>
								<span class="fa fa-question"></span>&nbsp;&nbsp;&nbsp;About
							</a>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Title</th>
										<th class="text-center">E / O / S</th>
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

									<?php foreach ($animeData as $item): ?>

										<tr>
											<td>
												<?php
													switch ($item->quality) {
														case "4K 2160p":
															echo "<div class='topbar-legend-uhd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='4K 2160p'>";
															echo "</div>";
															break;
														case "FHD 1080p":
															echo "<div class='topbar-legend-fhd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='FHD 1080p'>";
															echo "</div>";
															break;
														case "HD 720p":
															echo "<div class='topbar-legend-hd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='HD 720p'>";
															echo "</div>";
															break;
														case "HQ 480p":
															echo "<div class='topbar-legend-hq'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='HQ 480p'>";
															echo "</div>";
															break;
														case "LQ 360p":
															echo "<div class='topbar-legend-lq'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='LQ 360p'>";
															echo "</div>";
															break;
													}
												?>

												<span><?php echo $item->title ?></span>

											</td>
											<td class="text-center">
												<?php echo $item->episodes . " / " . $item->ovas . " / " . $item->specials; ?>
											</td>
											<td>
												<?php
													echo round(
														$item->filesize / 1073741824,
														2);
													echo " GB";
												?>
											</td>
											<td>
												<?php
													echo date_format(
														date_create($item->dateFinished),
														"M d, Y"
													);
												?>
											</td>
											<td>
												<?php
													echo ($item->seasonNumber == "1") ? "N/A" : $item->seasonNumber;
												?>
											</td>
											<td><?php echo $item->releaseSeason . " " . $item->releaseYear ?></td>
											<td>
												<?php
													echo ($item->durationHour < 9) ? "0" . $item->durationHour : $item->durationHour;
													echo ":" . $item->durationMinute . ":" . $item->durationSecond;
												?>
											</td>
											<td><?php echo $item->encoder ?></td>
											<td><?php echo $item->variants ?></td>
											<td><?php echo $item->remarks ?></td>
										</tr>

									<?php endforeach; ?>

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
