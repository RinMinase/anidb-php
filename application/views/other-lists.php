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

										<?php if (!empty($animeByName_a_filesize)) { ?>
											<tr>
												<th>A</th>
												<td class="text-center">
													<?php echo count($animeByName_a); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_a_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_b_filesize)) { ?>
											<tr>
												<th>B</th>
												<td class="text-center">
													<?php echo count($animeByName_b); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_b_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_c_filesize)) { ?>
											<tr>
												<th>C</th>
												<td class="text-center">
													<?php echo count($animeByName_c); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_c_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_d_filesize)) { ?>
											<tr>
												<th>D</th>
												<td class="text-center">
													<?php echo count($animeByName_d); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_d_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_e_filesize)) { ?>
											<tr>
												<th>E</th>
												<td class="text-center">
													<?php echo count($animeByName_e); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_e_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_f_filesize)) { ?>
											<tr>
												<th>F</th>
												<td class="text-center">
													<?php echo count($animeByName_f); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_f_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_g_filesize)) { ?>
											<tr>
												<th>G</th>
												<td class="text-center">
													<?php echo count($animeByName_g); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_g_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_h_filesize)) { ?>
											<tr>
												<th>H</th>
												<td class="text-center">
													<?php echo count($animeByName_h); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_h_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_i_filesize)) { ?>
											<tr>
												<th>I</th>
												<td class="text-center">
													<?php echo count($animeByName_i); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_i_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_j_filesize)) { ?>
											<tr>
												<th>J</th>
												<td class="text-center">
													<?php echo count($animeByName_j); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_j_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_k_filesize)) { ?>
											<tr>
												<th>K</th>
												<td class="text-center">
													<?php echo count($animeByName_k); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_k_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_l_filesize)) { ?>
											<tr>
												<th>L</th>
												<td class="text-center">
													<?php echo count($animeByName_l); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_l_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_m_filesize)) { ?>
											<tr>
												<th>M</th>
												<td class="text-center">
													<?php echo count($animeByName_m); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_m_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_n_filesize)) { ?>
											<tr>
												<th>N</th>
												<td class="text-center">
													<?php echo count($animeByName_n); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_n_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_o_filesize)) { ?>
											<tr>
												<th>O</th>
												<td class="text-center">
													<?php echo count($animeByName_o); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_o_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_p_filesize)) { ?>
											<tr>
												<th>P</th>
												<td class="text-center">
													<?php echo count($animeByName_p); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_p_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_q_filesize)) { ?>
											<tr>
												<th>Q</th>
												<td class="text-center">
													<?php echo count($animeByName_q); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_q_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_r_filesize)) { ?>
											<tr>
												<th>R</th>
												<td class="text-center">
													<?php echo count($animeByName_r); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_r_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_s_filesize)) { ?>
											<tr>
												<th>S</th>
												<td class="text-center">
													<?php echo count($animeByName_s); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_s_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_t_filesize)) { ?>
											<tr>
												<th>T</th>
												<td class="text-center">
													<?php echo count($animeByName_t); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_t_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_u_filesize)) { ?>
											<tr>
												<th>U</th>
												<td class="text-center">
													<?php echo count($animeByName_u); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_u_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_v_filesize)) { ?>
											<tr>
												<th>V</th>
												<td class="text-center">
													<?php echo count($animeByName_v); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_v_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_w_filesize)) { ?>
											<tr>
												<th>W</th>
												<td class="text-center">
													<?php echo count($animeByName_w); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_w_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_x_filesize)) { ?>
											<tr>
												<th>X</th>
												<td class="text-center">
													<?php echo count($animeByName_x); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_x_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_y_filesize)) { ?>
											<tr>
												<th>Y</th>
												<td class="text-center">
													<?php echo count($animeByName_y); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_y_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

										<?php if (!empty($animeByName_z_filesize)) { ?>
											<tr>
												<th>Z</th>
												<td class="text-center">
													<?php echo count($animeByName_z); ?>
												</td>
												<td class="text-center">
													<?php echo round($animeByName_z_filesize / 1073741824, 2) . " GB"; ?>
												</td>
											</tr>
										<?php } ?>

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

		<script>
			$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();
			});
		</script>

	</body>
</html>
