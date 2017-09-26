<div class="container-fluid">
	<div class="row">

		<div class="col-md-3">
			<div class="row">
				<div class="col-xs-3 col-sm-2 col-md-3">
					<a href="#" class="btn btn-primary btn-block">
						<i class="fa fa-plus"></i>
					</a>
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
						<a href="#" class="list-group-item">Uncategorized
							<span class="pull-right">
								<span class="label label-success" tooltip="tip" title="Watched">
									<?php echo $downloadUnsorted['Watched'] ?>
								</span>
								<span class="label label-primary" tooltip="tip" title="Downloaded">
									<?php echo $downloadUnsorted['Downloaded'] ?>
								</span>
								<span class="label label-default" tooltip="tip" title="Queued">
									<?php echo $downloadUnsorted['Queued'] ?>
								</span>
							</span>
						</a>

						<?php foreach ($downloadSorted as $item): ?>
							<span class="list-group-item"><?php echo $item['Year'] ?></span>

							<?php foreach ($item['Stats'] as $subitem): ?>
								<?php if (!empty($subitem)): ?>
									<a href="#" class="list-group-item season-list"><?php echo $subitem['Season'] . " " . $item['Year']; ?>
										<span class="pull-right">
											<span class="label label-success" tooltip="tip" title="Watched">
												<?php echo $subitem['Watched']; ?>
											</span>
											<span class="label label-primary" tooltip="tip" title="Downloaded">
												<?php echo $subitem['Downloaded']; ?>
											</span>
											<span class="label label-default" tooltip="tip" title="Queued">
												<?php echo $subitem['Queued']; ?>
											</span>
										</span>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>

						<?php endforeach; ?>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel-group">

				<?php if (!empty($downloadData['Watched'])): ?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#panel-finished-watching" data-toggle="collapse">Finished Watching</a>
								<div class="pull-right">
									<span class="label label-success">
										<?php echo $downloadDataStats['Watched'] ?>
									</span>
								</div>
							</h4>
						</div>
						<div id="panel-finished-watching" class="panel-collapse collapse in">
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

											<?php foreach ($downloadData['Watched'] as $item): ?>

												<tr>
													<td>
														<?php
															switch ($item->priority) {
																case 1:
																	echo "<div class='download-legend-prio-low' tooltip='tip' title='Low Priority'></div>";
																	break;
																case 2:
																	echo "<div class='download-legend-prio-normal' tooltip='tip' title='Normal Priority'></div>";
																	break;
																case 3:
																	echo "<div class='download-legend-prio-high' tooltip='tip' title='High Priority'></div>";
																	break;
															}
														?>
														<span><?php echo $item->title ?></span>
													</td>
													<td>
														<dfn><?php echo $item->remarks . " "; ?></dfn>
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

				<?php endif ?>

				<?php if (!empty($downloadData['Downloaded'])): ?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#panel-finished-watching" data-toggle="collapse">Finished Downloading</a>
								<div class="pull-right">
									<span class="label label-primary">
										<?php echo $downloadDataStats['Downloaded'] ?>
									</span>
								</div>
							</h4>
						</div>
						<div id="panel-finished-watching" class="panel-collapse collapse in">
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

											<?php foreach ($downloadData['Downloaded'] as $item): ?>

												<tr>
													<td>
														<?php
															switch ($item->priority) {
																case 1:
																	echo "<div class='download-legend-prio-low' tooltip='tip' title='Low Priority'></div>";
																	break;
																case 2:
																	echo "<div class='download-legend-prio-normal' tooltip='tip' title='Normal Priority'></div>";
																	break;
																case 3:
																	echo "<div class='download-legend-prio-high' tooltip='tip' title='High Priority'></div>";
																	break;
															}
														?>
														<span><?php echo $item->title ?></span>
													</td>
													<td>
														<dfn><?php echo $item->remarks . " "; ?></dfn>
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

				<?php endif ?>

				<?php if (!empty($downloadData['Queued'])): ?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#panel-finished-watching" data-toggle="collapse">Queue</a>
								<div class="pull-right">
									<span class="label label-default">
										<?php echo $downloadDataStats['Queued'] ?>
									</span>
								</div>
							</h4>
						</div>
						<div id="panel-finished-watching" class="panel-collapse collapse in">
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

											<?php foreach ($downloadData['Queued'] as $item): ?>

												<tr>
													<td>
														<?php
															switch ($item->priority) {
																case 1:
																	echo "<div class='download-legend-prio-low' tooltip='tip' title='Low Priority'></div>";
																	break;
																case 2:
																	echo "<div class='download-legend-prio-normal' tooltip='tip' title='Normal Priority'></div>";
																	break;
																case 3:
																	echo "<div class='download-legend-prio-high' tooltip='tip' title='High Priority'></div>";
																	break;
															}
														?>
														<span><?php echo $item->title ?></span>
													</td>
													<td>
														<dfn><?php echo $item->remarks . " "; ?></dfn>
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

				<?php endif ?>

			</div>
		</div>
	</div>

</div>
