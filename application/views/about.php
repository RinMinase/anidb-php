<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/css/styles.css") ?>>

		<style>

			h3.user-data-heading {
				margin-top: 20px;
				margin-bottom: 10px;
				border-bottom: 2px solid #95CE92;
				padding-bottom: 5px;
			}

			div.progress-bar { width: 20%; }
			div.progress-bar-green { background-color: #4CAF50; }
			div.progress-bar-alt-green { background-color: #7CC87F; }

			table.table-statistics > tbody > tr > td:not(.table-statistics-border) {
				border-top: 0px;
				font-weight: bold;
			}

			code.red { color: #F66060; }
			code.green { color: #2BC210; }
			code.orange { color: #EBA821; }
			code.blue { color: #00A2E8; }

		</style>

		<title>About Page</title>
	</head>

	<body>
		<div class="container">
			<div class="jumbotron">
				<a class="btn btn-primary" href=<?php echo base_url() ?>>
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>

				<h2>Rin Minase's Anime Database</h2>
				<h4>Minase Conglomerate</h4>
			</div>

			<div class="row">

				<div class="col-md-4">
					<center>
						<img src="resources/images/user.jpg" class="img-circle img-responsive">
					</center>

					<h3 class="text-center user-data-heading">Statistics</h3>
					<table class="table table-condensed table-statistics">
						<tbody>
							<tr>
								<td>Watch Time</td>
								<td>:</td>
								<td>00 days, 00 hours,<br>00 minutes, 00 seconds</td>
							</tr>
							<tr><td colspan="3"></td></tr>
							<tr><td class="table-statistics-border" colspan="3"></td></tr>
							<tr>
								<td>Total Size</td>
								<td>:</td>
								<td>000.00 GB (00.00 TB)</td>
							</tr>
							<tr>
								<td>Total Episodes</td>
								<td>:</td>
								<td>000 Episodes</td>
							</tr>
							<tr><td colspan="3"></td></tr>
							<tr><td class="table-statistics-border" colspan="3"></td></tr>
							<tr>
								<td colspan="3">Anime Count Per Quality</td>
							</tr>
							<tr>
								<td>4k 2160p</td>
								<td>:</td>
								<td>000</td>
							</tr>
							<tr>
								<td>FHD 1080p</td>
								<td>:</td>
								<td>000</td>
							</tr>
							<tr>
								<td>HD 720p</td>
								<td>:</td>
								<td>000</td>
							</tr>
							<tr>
								<td>HQ 480p</td>
								<td>:</td>
								<td>000</td>
							</tr>
							<tr>
								<td>LQ 360p</td>
								<td>:</td>
								<td>000</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="col-md-8 user-data-column">

					<h3 class="user-data-heading">Developer</h3>
					<h2><strong>Rin Minase</strong></h2>
					<h4>Minase Conglomerate</h4>
					<div class="row">
						<div class="col-md-6">
							<h5>
								<table class="table table-condensed">
									<tbody>
										<tr>
											<td class="text-center"><i class="fa fa-envelope"></i></td>
											<td>rin.black.raison.detre@gmail.com</td>
										</tr>
										<tr>
											<td class="text-center"><i class="fa fa-facebook"></i></td>
											<td>facebook.com/RinMinase666</td>
										</tr>
										<tr>
											<td class="text-center"><i class="fa fa-github"></i></td>
											<td>github.com/RinMinase</td>
										</tr>
									</tbody>
								</table>
							</h5>
						</div>
					</div>

					<h3 class="user-data-heading">Acknowledgements</h3>
					<h4>Ruka Suirenji</h4>
					<h4>Alice (ClariS)</h4>
					<h4>Maid-chan</h4>

					<div class="row">
						<div class="col-md-12">
							<h3 class="user-data-heading">Programming Skillsets</h3>
							<div class="row">
								<div class="col-sm-6 col-md-4">

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>HTML</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>CSS</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>JavaScript</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>PHP</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Python</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>C</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>C++</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Java</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Shell</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

								</div>

								<div class="col-sm-6 col-md-4">

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Bootstrap 3</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>NodeJS</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>SailsJS</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>ReactJS</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>AngularJS</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>CodeIgniter</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Laravel</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

								</div>

								<div class="col-sm-6 col-md-4">

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Apache</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>Nginx</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
												<div class="progress-bar progress-bar-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>MongoDB</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-5 col-xs-5 col-md-5 col-lg-5">
											<p><strong>MySQL</strong></p>
										</div>
										<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7">
											<div class="progress">
												<div class="progress-bar progress-bar-green"></div>
												<div class="progress-bar progress-bar-alt-green"></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-green">
								<div class="panel-heading">
									<h3 class="panel-title">Major Bugs, Future Changes</h3>
								</div>
								<div class="panel-body">
									<h4>Major Bugs</h4>
									<ul>
										<li><code class="red">[CRITICAL]</code> Sample critical bug on <code>homepage</code></li>
										<li><code class="orange">[NON-CRITICAL]</code> Sample non-critical bug</li>
									</ul><br>

									<h4>Future Changes</h4>
									<ul>
										<li><code class="red">[FEATURE]</code> Last 20 Watched with Statistics</li>
										<li><code class="red">[FEATURE]</code> Download Lists (By Season)</li>
										<li><code class="red">[FEATURE]</code> Download Lists (Uncategorized)</li>
										<li><code class="red">[FEATURE]</code> Hard Drive Statistics</li>
										<li><code class="red">[FEATURE]</code> Fuzzy Search by Title</li>
										<li><code class="red">[FEATURE]</code> Edit and Delete an Entry (AniDB)</li>
										<li><code class="red">[FEATURE]</code> Add, Edit and Delete an Entry (dlDB)</li>
										<li><code class="orange">[IMPROVEMENT]</code> Summer Lists</li>
										<li><code class="orange">[IMPROVEMENT]</code> Fuzzy Search using comma-separated keywords</li>
											<ul>
												<li>sort: title</li>
												<li>quality: fhd</li>
												<li>title (check variants): sample title</li>
												<li>size: 40-50gb</li>
												<li>finished: lastweek / lastmonth / august / 2012</li>
												<li>release: summer / 2016 / summer 2016</li>
												<li>encoder: coalgirls</li>
												<li>remarks: redownload</li>
											</ul>
									</ul><br>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-green">
								<div class="panel-heading">
									<h3 class="panel-title">Changelog</h3>
								</div>
								<div class="panel-body">

									<ul class="list-unstyled">
										<li>August 13, 2017</li>
										<ul>
											<li><code class="green">[FIX]</code> Sample bugfix on <code>about</code></li>
											<li><code class="blue">[NEW]</code> Sample new feature <code>mobile-site</code></li>
											<li><code class="orange">[IMPROVED]</code> Improved feature <code>fuzzy search</code></li>
										</ul>
									</ul>

									<ul class="list-unstyled">
										<li>August 12, 2017</li>
										<ul>
											<li><code class="red">[BUG]</code> Found critical bug on <code>about page</code></li>
											<li><code class="blue">[NEW]</code> Sample new feature <code>about page</code></li>
											<li><code class="green">[FIX]</code> Sample bugfix on <code>homepage</code></li>
										</ul>
									</ul>

								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<script src=<?php echo base_url("resources/jquery-3.1.1/jquery-3.1.1.min.js") ?>></script>
		<script src=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.js") ?>></script>

	</body>
</html>
