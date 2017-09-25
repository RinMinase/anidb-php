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

					<ul class="list-unstyled">
						<li>
							<a href="#">Uncategorized</a>
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
						</li>

						<li><br></li>

						<?php foreach ($downloadSorted as $item): ?>
							<li>

								<span><?php echo $item['Year'] ?></span>

								<ul class="list-unstyled season-list">
									<?php foreach ($item['Stats'] as $subitem): ?>
										<?php if (!empty($subitem)): ?>
											<li>
												<a href="#"><?php echo $subitem['Season'] . " " . $item['Year']; ?></a>
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
											</li>
										<?php endif; ?>
									<?php endforeach; ?>
								</ul>

							</li>
						<?php endforeach; ?>

					</ul>

				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel-group">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#panel-finished-watching" data-toggle="collapse">Finished Watching</a>
							<div class="pull-right">
								<span class="label label-success">21</span>
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

										<tr>
											<td>Sample Very Very Very Very Very Long Title</td>
											<td>
												<dfn>Redownload 1080p&nbsp;</dfn>
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

										<tr>
											<td>Sample Title</td>
											<td>
												<a href="#" class="btn btn-xs btn-warning" tooltip="tip" title="Edit Remarks">
													<i class="fa fa-pencil"></i>
												</a>
												</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-xs btn-danger" tooltip="tip" data-placement="auto" title="Delete Title">
													<i class="fa fa-trash"></i>
												</a>
											</td>
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
							<a href="#panel-finished-downloading" data-toggle="collapse">Finished Downloading</a>
							<div class="pull-right">
								<span class="label label-primary">7</span>
							</div>
						</h4>
					</div>
					<div id="panel-finished-downloading" class="panel-collapse collapse in">
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

										<tr>
											<td>Sample Very Very Very Very Very Long Title</td>
											<td>
												<dfn>Redownload 1080p&nbsp;</dfn>
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

										<tr>
											<td>Sample Title</td>
											<td>
												<a href="#" class="btn btn-xs btn-warning" tooltip="tip" title="Edit Remarks">
													<i class="fa fa-pencil"></i>
												</a>
												</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-xs btn-danger" tooltip="tip" data-placement="auto" title="Delete Title">
													<i class="fa fa-trash"></i>
												</a>
											</td>
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
							<a href="#panel-queue" data-toggle="collapse">Queue</a>
							<div class="pull-right">
								<span class="label label-default">82</span>
							</div>
						</h4>
					</div>
					<div id="panel-queue" class="panel-collapse collapse in">
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

										<tr>
											<td>Sample Very Very Very Very Very Long Title</td>
											<td>
												<dfn>Redownload 1080p&nbsp;</dfn>
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

										<tr>
											<td>Sample Title</td>
											<td>
												<a href="#" class="btn btn-xs btn-warning" tooltip="tip" title="Edit Remarks">
													<i class="fa fa-pencil"></i>
												</a>
												</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-xs btn-danger" tooltip="tip" data-placement="auto" title="Delete Title">
													<i class="fa fa-trash"></i>
												</a>
											</td>
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
