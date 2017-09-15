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
		</style>

		<title></title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row topbar">
				<div class="col-md-12">

					<div class="row">
						<div class="col-xs-3">
							<div class="form-group">
								<a class="btn btn-primary btn-block" href=<?php echo base_url("other-lists") ?>>
									<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Other Lists
								</a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<a class="btn btn-primary btn-block" href=<?php echo base_url("download") ?>>
									<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;DL List
								</a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<a class="btn btn-primary btn-block" href=<?php echo base_url("hdd") ?>>
									<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;HDD List
								</a>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="form-group">
								<a class="btn btn-primary btn-block" href=<?php echo base_url("about") ?>>
									<i class="fa fa-question"></i>&nbsp;&nbsp;&nbsp;About
								</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2">
							<div class="form-group">
								<a class="btn btn-primary btn-block" href=<?php echo base_url("add") ?>>
									<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add
								</a>
							</div>
						</div>

						<div class="col-sm-10">
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
										<th class="text-center">E / O / S</th>
										<th>File Size</th>
										<th>Date Finished</th>
										<th>Season</th>
										<th>Release</th>
										<th>Duration</th>
										<th>Encoder</th>
										<th>Variants</th>
										<th>Remarks</th>
										<th colspan="2"></th>
									</tr>
								</thead>

								<tbody>

									<?php foreach ($animeData as $item): ?>

										<tr>
											<td>
												<?php
													switch ($item->quality) {
														case "4K 2160p":
															echo "<div class='anime-legend-uhd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='4K 2160p'>";
															echo "</div>";
															break;
														case "FHD 1080p":
															echo "<div class='anime-legend-fhd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='FHD 1080p'>";
															echo "</div>";
															break;
														case "HD 720p":
															echo "<div class='anime-legend-hd'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='HD 720p'>";
															echo "</div>";
															break;
														case "HQ 480p":
															echo "<div class='anime-legend-hq'";
																echo "data-toggle='tooltip'";
																echo "data-placement='auto'";
																echo "title='HQ 480p'>";
															echo "</div>";
															break;
														case "LQ 360p":
															echo "<div class='anime-legend-lq'";
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
											<td>
												<div data-toggle="tooltip" data-placement="auto" title="Edit">
													<a class="btn btn-xs btn-success btn-block" href=<?php echo base_url("edit/" . $item->id) ?>>
														<i class="fa fa-pencil"></i>
													</a>
												</div>
											</td>
											<td>
												<div data-toggle="tooltip" data-placement="auto" title="Delete">
													<a class="btn btn-xs btn-danger btn-block" href=<?php echo base_url("delete/" . $item->id) ?>>
														<i class="fa fa-trash"></i>
													</a>
												</div>
											</td>
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
