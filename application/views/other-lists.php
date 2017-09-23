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
				<a href=<?php echo base_url() ?> class="btn btn-primary">
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-green">
						<div class="panel-heading">
							<h4>Statistics (Last 20 Watched)</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-condensed table-unbordered">
									<tbody>
										<tr>
											<th>Total Episodes</th>
											<th>:</th>
											<th class="text-center"><?php echo $totalEpisodes; ?></th>
										</tr>
										<tr>
											<th>Days Since Last Anime</th>
											<th>:</th>
											<th class="text-center"><?php echo $daysSinceLastAnime; ?></th>
										</tr>
										<tr>
											<th>Titles per Day</th>
											<th>:</th>
											<th class="text-center"><?php echo $titlesPerDay; ?></th>
										</tr>
										<tr>
											<th>Single Season (12 Episodes) per Day</th>
											<th>:</th>
											<th class="text-center"><?php echo $singleSeasonPerDay; ?></th>
										</tr>
										<tr>
											<th>Episodes per Day</th>
											<th>:</th>
											<th class="text-center"><?php echo $episodesPerDay; ?></th>
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
									<th class="text-center">File Size</th>
									<th class="text-center">Date Finished</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($last20AnimeData as $item): ?>

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
									</tr>

								<?php endforeach; ?>

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

										<?php foreach ($animeDataByName as $item): ?>
											<?php if (!empty($item['animeFilesize'])): ?>
												<tr>
													<th><?php echo $item['animeLetter'] ?></th>
													<td class="text-center">
														<?php echo count($item['animeData']); ?>
													</td>
													<td class="text-center">
														<?php echo round($item['animeFilesize'] / 1073741824, 2) . " GB"; ?>
													</td>
												</tr>

											<?php endif; ?>
										<?php endforeach; ?>

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


								<?php foreach ($animeDataByName as $item): ?>
									<?php if (!empty($item['animeFilesize'])): ?>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a href=<?php echo "#panel-" . $item['animeLetter'] ?> data-toggle="collapse">
														<?php echo $item['animeLetter'] ?>&nbsp;&nbsp;
														<span class="badge"><?php echo count($item['animeData']); ?></span>
													</a>
													<p class="pull-right">
														<?php echo round($item['animeFilesize'] / 1073741824, 2) . " GB"; ?>
													</p>
												</h4>
											</div>
											<div id=<?php echo "panel-" . $item['animeLetter'] ?> class="panel-collapse collapse">
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

																<?php foreach ($item['animeData'] as $subitem): ?>

																	<tr>
																		<td>

																			<?php
																				switch ($subitem->quality) {
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

																			<span><?php echo $subitem->title ?></span>

																		</td>
																		<td>
																			<?php
																				if ($subitem->filesize < 1073741824) {
																					echo round($subitem->filesize / 1048576, 2) . " MB";
																					echo " (" . round($subitem->filesize / 1073741824, 2) . " GB)";
																				} else {
																					echo round($subitem->filesize / 1073741824, 2) . " GB";
																				}
																		 	?>
																		</td>
																	</tr>

																<?php endforeach; ?>

															</tbody>
														</table>
													</div>

												</div>
											</div>
										</div>

									<?php endif; ?>
								<?php endforeach; ?>

							</div>
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
