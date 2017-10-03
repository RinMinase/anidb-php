<div class="container-fluid">

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
				<form method="GET" action=<?php echo base_url("/index") ?>>
					<input type="text"
						class="form-control"
						name="q"
						placeholder="Keywords (comma-separated): sort/order, quality, release, encoder, remarks, inhdd"
						value="<?php echo $query; ?>"
						<?php if (!empty($query)) echo " autofocus"?>>
					<button class="hidden">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-hover" id="animeTable">
					<thead>
						<tr>
							<th>Title</th>
							<th class="text-center">E / O / S</th>
							<th class="text-center">File Size</th>
							<th class="text-center">Date Finished</th>
							<th>Release</th>
							<th>Encoder</th>
						</tr>
					</thead>

					<tbody>

						<?php foreach ($animeData as $item): ?>

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
								<td>
									<?php
										echo $item->releaseSeason . " ";
										echo ($item->releaseYear == 0) ? "" : $item->releaseYear;
									?>
								</td>
								<td><?php echo $item->encoder ?></td>
							</tr>

						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
