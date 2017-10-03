<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-green">
				<div class="panel-heading">
					<h4>Disks</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">

							<!-- <div class="row">
								<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
									<p><strong>A - I</strong></p>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width:50%">50%</div>
									</div>
								</div>
							</div> -->

							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
									<p><strong>J - Q</strong></p>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
									<div class="progress">
										<div class=
											<?php
												if ($percentJQ >= 0 && $percentJQ < 80) echo "'progress-bar progress-bar-success'";
												else if ($percentJQ >= 80 && $percentJQ < 90) echo "'progress-bar progress-bar-warning'";
												else echo "'progress-bar progress-bar-danger'";
											?>
											style="width:<?php echo round($percentJQ, 0); ?>%">

											<?php echo $percentJQ . "%"; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
									<p><strong>R - Z</strong></p>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
									<div class="progress">
										<div class=
											<?php
												if ($percentRZ >= 0 && $percentRZ < 80) echo "'progress-bar progress-bar-success'";
												else if ($percentRZ >= 80 && $percentRZ < 90) echo "'progress-bar progress-bar-warning'";
												else echo "'progress-bar progress-bar-danger'";
											?>
											style="width:<?php echo round($percentRZ, 0); ?>%">
											<?php echo $percentRZ; ?>%
										</div>
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

				<!-- <div class="panel panel-default">
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
				</div> -->

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#panel-jq" data-toggle="collapse">J - Q</a>
							<div class="pull-right">
								<span class="badge"><?php echo $countJQ; ?></span>
								<span>&nbsp;<?php echo round($filesizeJQ / 1073741824, 2); ?> GB</span>
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

										<?php foreach ($animeJQ as $item): ?>
											<tr>
												<td>
													<?php
														switch ($item->quality) {
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

													<span><?php echo $item->title; ?></span>
												</td>
												<td>
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
											</tr>
										<?php endforeach; ?>

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
								<span class="badge"><?php echo $countRZ; ?></span>
								<span>&nbsp;<?php echo round($filesizeRZ / 1073741824, 2); ?> GB</span>
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

										<?php foreach ($animeRZ as $item): ?>
											<tr>
												<td>
													<?php
														switch ($item->quality) {
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

													<span><?php echo $item->title; ?></span>
												</td>
												<td>
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
											</tr>
										<?php endforeach; ?>

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
