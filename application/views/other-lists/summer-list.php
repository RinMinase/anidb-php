<div class="container-fluid">
	<div class="row">

		<div class="col-md-3">

			<div class="row hidden" id="add_summer_list">
				<div class="col-md-12">
					<form class="hidden-sm">
						<div class="row">
							<div class="col-xs-6 form-group">
								<label>From</label>
								<input type="date" class="form-control" name="from">
							</div>
							<div class="col-xs-6 form-group">
								<label>To</label>
								<input type="date" class="form-control" name="to">
							</div>
							<div class="col-xs-12 form-group">
								<button class="btn btn-primary btn-block">Confirm</button>
							</div>
						</div>
					</form>

					<form class="form-horizontal hidden-xs visible-sm hidden-md hidden-lg">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label class="control-label col-sm-2">From</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" name="from">
								</div>
							</div>
							<div class="col-sm-4 form-group">
								<label class="control-label col-sm-2">To</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" name="to">
								</div>
							</div>
							<div class="col-sm-5 form-group">
								<button class="btn btn-primary btn-block">Confirm</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-3 col-sm-2 col-md-3" id="btn_add_summer_list">
					<a href="#" class="btn btn-primary btn-block" onclick="showAddSummerList()"><i class="fa fa-plus"></i></a>
				</div>
				<div class="col-xs-3 col-sm-2 col-md-3 hidden" id="btn_hide_summer_list">
					<a href="#" class="btn btn-danger btn-block" onclick="hideAddSummerList()"><i class="fa fa-times"></i></a>
				</div>
				<div class="col-xs-9 col-sm-10 col-md-9">
					<div class="form-group has-feedback has-feedback-left">
						<i class="form-control-feedback glyphicon glyphicon-search"></i>
						<input type="text" class="form-control" placeholder="Search...">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="list-group">
						<?php foreach ($summerLists as $item): ?>
							<a
								<?php
									if ($item->id == $currentList) {
										echo " class='list-group-item list-group-item-info'";
									} else {
										echo " href='" . base_url("summer-list/" . $item->id) . "'";
										echo " class='list-group-item'";
									}
								?>
							>
								<?php echo $item->listTitle; ?>
							</a>
						<?php endforeach; ?>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-green">
						<div class="panel-heading">
							<h4>Statistics</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-condensed table-unbordered">
									<tbody>

										<tr>
											<th colspan="3" class="text-center h3">
												<?php echo $statsTitlesPerDay; ?> Titles Per Day
											</th>
										</tr>
										<tr>
											<th colspan="3" class="text-center h3">
												<?php echo $statsEpisodesPerDay; ?> Episodes Per Day
											</th>
										</tr>

										<tr><th colspan="3"><hr></th></tr>

										<tr>
											<th colspan="3">Anime Per Quality</th>
										</tr>
										<tr>
											<th>4k 2160p</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsUHDCount; ?></th>
										</tr>
										<tr>
											<th>FHD 1080p</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsFHDCount; ?></th>
										</tr>
										<tr>
											<th>HD 720p</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsHDCount; ?></th>
										</tr>
										<tr>
											<th>HQ 480p</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsHQCount; ?></th>
										</tr>
										<tr>
											<th>LQ 360p</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsLQCount; ?></th>
										</tr>

										<tr><th colspan="3"><hr></th></tr>

										<tr>
											<th>Total Titles</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsTotalTitles; ?></th>
										</tr>
										<tr>
											<th>Total Episodes</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsTotalEpisodes; ?></th>
										</tr>
										<tr>
											<th>Total Days Used Up</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsDayCount; ?></th>
										</tr>
										<tr>
											<th>Total File Size</th>
											<th>:</th>
											<th class="text-center"><?php echo $statsTotalFilesize; ?> GB</th>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="table-responsive">
				<table class="table table-hover" >
					<thead>
						<tr>
							<th>Title</th>
							<th class="text-center">E / O / S</th>
							<th class="text-center">File Size</th>
							<th class="text-center">Date Finished</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($summerData as $item): ?>

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
									<div>
										<?php echo $item->episodes . " / " . $item->ovas . " / " . $item->specials; ?>
									</div>
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

				<!-- <?php foreach ($summerData as $item): ?>
					<?php if (!empty($item)): ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href=
										<?php
											switch ($list_number) {
												case 0: echo "'#panel-finished-watching'"; break;
												case 1: echo "'#panel-finished-downloading'"; break;
												case 2: echo "'#panel-queue'"; break;
											}
										?>
									data-toggle="collapse">
										<?php
											switch ($list_number) {
												case 0: echo "Finished Watching"; break;
												case 1: echo "Finished Downloading"; break;
												case 2: echo "Queue"; break;
											}
										?>
									</a>
									<div class="pull-right">
										<span class="label
											<?php
												switch ($list_number) {
													case 0: echo " label-success"; break;
													case 1: echo " label-primary"; break;
													case 2: echo " label-default"; break;
												}
											?>
										">
											<?php
												switch ($list_number) {
													case 0: echo $downloadDataStats['Watched']; break;
													case 1: echo $downloadDataStats['Downloaded']; break;
													case 2: echo $downloadDataStats['Queued']; break;
												}
											?>
										</span>
									</div>
								</h4>
							</div>
							<div id=
								<?php
									switch ($list_number) {
										case 0: echo "'panel-finished-watching'"; break;
										case 1: echo "'panel-finished-downloading'"; break;
										case 2: echo "'panel-queue'"; break;
									}
								?>
							class="panel-collapse collapse in">
								<div class="panel-body">

									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
												<tr>
													<th>Title</th>
													<th>Remarks</th>
													<th></th>
												</tr>
											</thead>
											<tbody>

												<?php foreach ($item as $subitem): ?>

													<tr>
														<td>
															<?php
																switch ($subitem->priority) {
																	case 1:
																		echo "<div class='download-legend-prio-low'";
																			echo " tooltip='tip'";
																			echo " title='Low Priority'>";
																		echo "</div>";
																	break;
																	case 2:
																		echo "<div class='download-legend-prio-normal'";
																			echo " tooltip='tip'";
																			echo " title='Normal Priority'>";
																		echo "</div>";
																	break;
																	case 3:
																		echo "<div class='download-legend-prio-high'";
																			echo " tooltip='tip'";
																			echo " title='High Priority'>";
																		echo "</div>";
																	break;
																}
															?>
															<span><?php echo $subitem->title ?></span>
														</td>
														<td>
															<dfn><?php echo $subitem->remarks . " "; ?></dfn>
															<a href="#" class="btn btn-xs btn-warning" tooltip="tip" title="Edit Remarks">
																<i class="fa fa-pencil"></i>
															</a>
														</td>
														<td class="text-right">
															<a href="#" class="btn btn-xs btn-danger" tooltip="tip" title="Delete Title">
																<i class="fa fa-trash"></i>
															</a>
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
					<?php $list_number++; ?>
				<?php endforeach; ?> -->

		</div>
	</div>
</div>
