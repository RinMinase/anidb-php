<div class="container-fluid">
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

</div>
