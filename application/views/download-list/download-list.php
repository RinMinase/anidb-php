<div class="container-fluid">

	<div class="row hidden" id="add_season_list">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9">
							<h3>Add a Season List</h3>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-6">
									<button class="btn btn-success btn-block">Submit</button>
								</div>
								<div class="col-md-6">
									<a href="#" class="btn btn-danger btn-block" onclick="removeAddSeasonList()">Close</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>High Priority:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Normal Priority:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Low Priority:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="row hidden" id="add_title">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-10">
							<h3>Add a Title</h3>
						</div>
						<div class="col-md-2">
							<a href="#" class="btn btn-danger btn-block" onclick="removeAddTitle()">Close</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-md-2 form-group">
					<label>Priority</label>
					<select class="form-control" name="priority">
						<option value="3">High</option>
						<option value="2" selected>Normal</option>
						<option value="1">Low</option>
					</select>
				</div>

				<div class="col-md-5 form-group"><label>Title</label>
					<input type="text" class="form-control" name="title" required>
				</div>

				<div class="col-md-3 form-group">
					<label>Category</label>
					<div class="row">
						<div class="col-md-6">
							<select class="form-control" name="season">
								<option value="Uncategorized">Uncategorized</option>
								<option value="0">Winter</option>
								<option value="1">Spring</option>
								<option value="2">Summer</option>
								<option value="3" selected>Fall</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="year">
								<option value="2011">2010</option>
								<option value="2012">2011</option>
								<option value="2013">2012</option>
								<option value="2014">2013</option>
								<option value="2015">2014</option>
								<option value="2016">2015</option>
								<option value="2017">2016</option>
								<option value="2017" selected>2017</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-2 form-group">
					<button class="btn btn-success btn-block">Submit</button>
				</div>

			</div>

		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="row">
				<div class="col-xs-3 col-sm-2 col-md-3">
					<div class="dropdown">
						<a class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-plus"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#" onclick="showAddTitle()">Add a Title</a></li>
							<li><a href="#" onclick="showAddSeasonList()">Add a Season List</a></li>
						</ul>
					</div>
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
						<a
							<?php
								if ($currentList != "unsorted") {
									echo " href='" . base_url("download-list");
									echo "' class='list-group-item'";
								} else {
									echo " class='list-group-item list-group-item-info'";
								}
							?>
						>Uncategorized
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

									<a
										<?php
											if ($currentList != $subitem['Season'] . " " . $item['Year']) {
												echo " href='";
												echo base_url("download-list/" . $item['Year'] . "/" . $subitem['Season']);
												echo "' class='list-group-item season-list'";
											} else {
												echo " class='list-group-item season-list list-group-item-info'";
											}
										?>
									>

										<?php echo $subitem['Season'] . " " . $item['Year']; ?>

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

				<?php $list_number = 0; ?>
				<?php foreach ($downloadData as $item): ?>
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
				<?php endforeach; ?>

			</div>
		</div>
	</div>

</div>
