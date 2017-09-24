<div class="container-fluid">
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
																		echo "<div class='anime-legend-uhd' tooltip='tip' title='4K 2160p'></div>";
																		break;
																	case "FHD 1080p":
																		echo "<div class='anime-legend-fhd' tooltip='tip' title='FHD 1080p'></div>";
																		break;
																	case "HD 720p":
																		echo "<div class='anime-legend-hd' tooltip='tip' title='HD 720p'></div>";
																		break;
																	case "HQ 480p":
																		echo "<div class='anime-legend-hq' tooltip='tip' title='HQ 480p'></div>";
																		break;
																	case "LQ 360p":
																		echo "<div class='anime-legend-lq' tooltip='tip' title='LQ 360p'></div>";
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

<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>
<script src=<?php echo base_url("resources/js/scripts.js") ?>></script>
