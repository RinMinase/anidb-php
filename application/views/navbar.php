<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href=<?php echo base_url("resources/bootstrap-3.3.7/bootstrap.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/font-awesome-4.7.0/font-awesome.min.css") ?>>
		<link rel="stylesheet" href=<?php echo base_url("resources/css/styles.css") ?>>

		<?php
			if(!empty($customCSS)) {
				echo "<link rel='stylesheet' href='" . base_url($customCSS) . "'>";
			}
		?>

		<?php
			if(!empty($customTitle)) {
				echo "<title>" . $customTitle . "</title>";
			} else {
				echo "<title>Rin's Anime Database</title>";
			}
		?>

	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".anidb-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=<?php echo base_url() ?>>Rin's Anime Database</a>
				</div>

				<div class="collapse navbar-collapse anidb-navbar-collapse">

					<ul class="nav navbar-nav">
						<li <?php if($activePage == "index") echo "class='active'"; ?>>
							<a href=<?php echo base_url() ?>>Home</a>
						</li>
						<li class="dropdown
							<?php
								if($activePage == "last-watch" ||
									$activePage == "by-name" ||
									$activePage == "download-list" ||
									$activePage == "hdd" ||
									$activePage == "hdd-simulator") {
									echo " active";
								}
							?>
						">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Anime Lists <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li <?php if($activePage == "last-watch") echo "class='active'"; ?>>
									<a href=<?php echo base_url("last-watch") ?>>
										<i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;Last 20 Watched
									</a>
								</li>
								<li class="divider"></li>
								<li <?php if($activePage == "by-name") echo "class='active'"; ?>>
									<a href=<?php echo base_url("by-name") ?>>
										<i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;Anime List by Name
									</a>
								</li>
								<li <?php if($activePage == "download-list") echo "class='active'"; ?>>
									<a href=<?php echo base_url("download-list") ?>>
										<i class="fa fa-arrow-down"></i>&nbsp;&nbsp;&nbsp;Download List
									</a>
								</li>
								<li class="divider"></li>
								<li <?php if($activePage == "hdd-list") echo "class='active'"; ?>>
									<a href=<?php echo base_url("hdd-list") ?>>
										<i class="fa fa-hdd-o"></i>&nbsp;&nbsp;&nbsp;Hard Drive List
									</a>
								</li>
								<li <?php if($activePage == "hdd-simulator") echo "class='active'"; ?>>
									<a href=<?php echo base_url("hdd-list/simulator") ?>>
										<i class="fa fa-flask"></i>&nbsp;&nbsp;&nbsp;Hard Drive Simulator
									</a>
								</li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li <?php if($activePage == "about") echo "class='active'"; ?>>
							<a href=<?php echo base_url("about") ?>>About</a>
						</li>
					</ul>
				</div>

			</div>
		</nav>
