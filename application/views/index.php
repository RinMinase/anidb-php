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

		// $temp = explode(",,","title1,,title2,,title3");
		// $temp2 = explode(",,","");
		// print_r($temp);
		// print_r($temp2);
		// echo (empty($temp[0])) ? "<br>TRUE" : "<br>FALSE";
	?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/css/styles.css") ?>>

		<style>

			.container-fluid { padding-top: 15px; }

		</style>

		<title>Rin's Anime Database</title>
	</head>

	<body>
		<div class="container-fluid">

			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<a href=<?php echo base_url("other-lists") ?> class="btn btn-primary btn-block">
							<i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;Other Lists
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<a href=<?php echo base_url("download-list") ?> class="btn btn-primary btn-block">
							<i class="fa fa-arrow-down"></i>&nbsp;&nbsp;&nbsp;DL List
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<a href=<?php echo base_url("hdd-list") ?> class="btn btn-primary btn-block">
							<i class="fa fa-hdd-o"></i>&nbsp;&nbsp;&nbsp;HDD List
						</a>
					</div>
				</div>

				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<a href=<?php echo base_url("about") ?> class="btn btn-primary btn-block">
							<i class="fa fa-question"></i>&nbsp;&nbsp;&nbsp;About
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2 hidden-xs">
					<div class="form-group">
						<a href=<?php echo base_url("add") ?> class="btn btn-primary btn-block">
							<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add
						</a>
					</div>
				</div>

				<div class="col-xs-3 visible-xs hidden-sm hidden-md hidden-lg">
					<div class="form-group">
						<a href=<?php echo base_url("add") ?> class="btn btn-primary btn-block">
							<i class="fa fa-plus"></i>
						</a>
					</div>
				</div>

				<div class="col-xs-9 col-sm-10">
					<div class="form-group has-feedback has-feedback-left">
						<i class="form-control-feedback glyphicon glyphicon-search"></i>
						<input type="text" class="form-control" placeholder="Search...">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Title</th>
									<th class="text-center">E / O / S</th>
									<th class="text-center">File Size</th>
									<th class="text-center">Date Finished</th>
									<th class="text-center">Season</th>
									<th>Release</th>
									<th class="text-center">Duration</th>
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
												switch ($subitem->quality) {
													case "4K 2160p":
														echo "<div class='anime-legend-uhd' data-toggle='tooltip' title='4K 2160p'></div>";
														break;
													case "FHD 1080p":
														echo "<div class='anime-legend-fhd' data-toggle='tooltip' title='FHD 1080p'></div>";
														break;
													case "HD 720p":
														echo "<div class='anime-legend-hd' data-toggle='tooltip' title='HD 720p'></div>";
														break;
													case "HQ 480p":
														echo "<div class='anime-legend-hq' data-toggle='tooltip' title='HQ 480p'></div>";
														break;
													case "LQ 360p":
														echo "<div class='anime-legend-lq' data-toggle='tooltip' title='LQ 360p'></div>";
														break;
												}
											?>

											<span><?php echo $item->title ?></span>

										</td>
										<td class="text-center">
											<?php echo $item->episodes . " / " . $item->ovas . " / " . $item->specials; ?>
										</td>
										<td class="text-center">
											<?php
												if ($item->filesize == 0) {
													echo "-";
												} else if ($item->filesize < 1073741824) {
													echo round($item->filesize / 1048576, 2) . " MB";
												} else {
													echo round($item->filesize / 1073741824, 2) . " GB";
												}
											?>
										</td>
										<td class="text-center">
											<?php
												echo date_format(
													date_create($item->dateFinished),
													"M d, Y"
												);
											?>
										</td>
										<td class="text-center">
											<?php
												echo "<div data-toggle='tooltip' data-placement='auto'";
													echo "title='1st Season : " . $item->firstSeasonTitle . "'>";

													echo ($item->seasonNumber == "0") ? "N/A" : $item->seasonNumber;
												echo "</div>";
											?>
										</td>
										<td>
											<?php
												echo $item->releaseSeason . " ";
												echo ($item->releaseYear == 0) ? "" : $item->releaseYear;
											?>
										</td>
										<td class="text-center">
											<?php
												echo ($item->durationHour < 10) ? "0" . $item->durationHour . ":" : $item->durationHour . ":";
												echo ($item->durationMinute < 10) ? "0" . $item->durationMinute . ":"  : $item->durationMinute . ":";
												echo ($item->durationSecond < 10) ? "0" . $item->durationSecond : $item->durationSecond;
											?>
										</td>
										<td><?php echo $item->encoder ?></td>
										<td><?php echo $item->variants ?></td>
										<td><?php echo $item->remarks ?></td>
										<td>
											<?php echo form_open("edit/" . $item->id) ?>
												<a href=<?php echo base_url("edit/" . $item->id) ?>
													class="btn btn-xs btn-success btn-block"
													data-toggle="tooltip"
													data-placement="auto"
													title="Edit">
													<i class="fa fa-pencil"></i>
												</a>
											<?php echo form_close() ?>
										</td>
										<td>
											<?php echo form_open("delete/" . $item->id) ?>
												<a href=<?php echo base_url("delete/" . $item->id) ?>
													class="btn btn-xs btn-danger btn-block"
													data-toggle="tooltip"
													data-placement="auto"
													title="Delete">
													<i class="fa fa-trash"></i>
												</a>
											<?php echo form_close() ?>
										</td>
									</tr>

								<?php endforeach; ?>

							</tbody>
						</table>
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
