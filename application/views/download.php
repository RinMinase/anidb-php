<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>

		<style>

			.season-list {
				padding-left: 15px;
			}

		</style>

		<title>Download List</title>
	</head>
	<body>

		<div class="container-fluid">
			<div class="page-header">
			  <h2>Download List</h2>
				<a href="#" class="btn btn-primary">
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>
			</div>

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
										<span data-toggle="tooltip" data-placement="auto" title="Watched">
											<span class="label label-success">21</span>
										</span>
										<span data-toggle="tooltip" data-placement="auto" title="Downloaded">
											<span class="label label-primary">7</span>
										</span>
										<span data-toggle="tooltip" data-placement="auto" title="Queued">
											<span class="label label-default">81</span>
										</span>
									</span>
								</li>

								<li><br></li>

								<li>
									<span>2017</span>

									<ul class="list-unstyled season-list">
										<li>
											<a href="#">Winter 2017</a>
											<span class="pull-right">
												<span data-toggle="tooltip" data-placement="auto" title="Watched">
													<span class="label label-success">3</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Downloaded">
													<span class="label label-primary">5</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Queued">
													<span class="label label-default">12</span>
												</span>
											</span>
										</li>
										<li>
											<a href="#">Spring 2017</a>
											<span class="pull-right">
												<span data-toggle="tooltip" data-placement="auto" title="Watched">
													<span class="label label-success">9</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Downloaded">
													<span class="label label-primary">1</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Queued">
													<span class="label label-default">11</span>
												</span>
											</span>
										</li>
										<li>
											<a href="#">Summer 2017</a>
											<span class="pull-right">
												<span data-toggle="tooltip" data-placement="auto" title="Watched">
													<span class="label label-success">2</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Downloaded">
													<span class="label label-primary">9</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Queued">
													<span class="label label-default">5</span>
												</span>
											</span>
										</li>
										<li>
											<a href="#">Fall 2017</a>
											<span class="pull-right">
												<span data-toggle="tooltip" data-placement="auto" title="Watched">
													<span class="label label-success">1</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Downloaded">
													<span class="label label-primary">2</span>
												</span>
												<span data-toggle="tooltip" data-placement="auto" title="Queued">
													<span class="label label-default">19</span>
												</span>
											</span>
										</li>
									</ul>

								</li>

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
							<div id="panel-finished-watching" class="panel-collapse collapse">
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
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
													</td>
												</tr>

												<tr>
													<td>Sample Title</td>
													<td>
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
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
							<div id="panel-finished-downloading" class="panel-collapse collapse">
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
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
													</td>
												</tr>

												<tr>
													<td>Sample Title</td>
													<td>
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
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
										<span class="label label-default">81</span>
									</div>
								</h4>
							</div>
							<div id="panel-queue" class="panel-collapse">
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
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
													</td>
												</tr>

												<tr>
													<td>Sample Title</td>
													<td>
														<span data-toggle="tooltip" data-placement="auto" title="Edit Remarks">
															<a href="#" class="btn btn-xs btn-warning">
																<i class="fa fa-pencil"></i>
															</a>
														</span>
													</td>
													<td class="text-right">
														<span data-toggle="tooltip" data-placement="auto" title="Delete Title">
															<a href="#" class="btn btn-xs btn-danger">
																<i class="fa fa-trash"></i>
															</a>
														</span>
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

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

		<script>
			$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();
			});
		</script>

	</body>
</html>
