<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-green">
				<div class="panel-heading">
					<h4>Disks</h4>
				</div>
				<div class="panel-body">

					<?php foreach ($animeByHDD as $item): ?>
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
								<p><strong><?php echo $item['from'] ?> - <?php echo $item['to'] ?></strong></p>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
								<div class="progress"
									tooltip="tip"
									title="<?php
										echo "Free : " . $item['free'] . " GB\n";
										echo "Used : " . $item['used'] . " GB\n";
										echo "Total : " . $item['total'] . " GB\n";
										echo "Titles : " . $item['count'];
									?>">
									<div class=
										<?php
											if ($item['percent'] >= 0 && $item['percent'] < 80) echo "'progress-bar progress-bar-success'";
											else if ($item['percent'] >= 80 && $item['percent'] < 90) echo "'progress-bar progress-bar-warning'";
											else echo "'progress-bar progress-bar-danger'";
										?>
										style="width:<?php echo round($item['percent'], 0); ?>%">

										<?php echo $item['percent'] . "%"; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>

		</div>

		<div class="col-md-9">
			<div class="panel-group">

				<?php foreach ($animeByHDD as $item): ?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="<?php echo "#panel-" . $item['from'] . $item['to'] ?>" data-toggle="collapse">
									<?php echo $item['from'] ?> - <?php echo $item['to'] ?>
								</a>
								<div class="pull-right">
									<span class="badge"><?php echo $item['count']; ?></span>
									<span>&nbsp;<?php echo round($item['filesize'] / 1073741824, 2); ?> GB</span>
								</div>
							</h4>
						</div>
						<div id="<?php echo "panel-" . $item['from'] . $item['to'] ?>" class="panel-collapse collapse">
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

														<span><?php echo $subitem->title; ?></span>
													</td>
													<td>
														<?php
															if ($subitem->filesize == 0) {
																echo "-";
															} else if ($subitem->filesize < 1073741824) {
																echo round($subitem->filesize / 1048576, 2) . " MB";
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

				<?php endforeach; ?>

			</div>
		</div>

	</div>

</div>
