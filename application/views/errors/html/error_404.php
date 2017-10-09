<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<style>

			body { margin: 0px; }

			h1, h2, p {
				font-family: "Open Sans","Myriad Pro",Arial,sans-serif;
				text-align: center;
				color: #001c20;
				margin: 0px;
			}

			h1 { font-size: 1.7em; }

			h2 {
				font-weight: 300;
				font-size: 1.5em;
			}

			p {
				font-size: 1.25em;
				padding-top: 2em;
			}

			a {
				color: #118798;
				text-decoration: none;
			}

			a:hover { color: #B1EEF7 }

		 .container .header {
				background-image: url(
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/ocean.png";
					?>
				);
				background-color: #0C8DA0;
				background-repeat: no-repeat;
				background-position: center 282px;
				height: 315px;
			}

			.container .header img {
				margin: 0px auto;
			}

			.container .main {
				display: block;
				margin-top: 90px;
			}

			.container .brand {
				width: 150px;
				margin-top: 3.5em;
				margin-left: auto;
				margin-right: auto;
			}

			.container .logo {
				display: block;
				padding-top: 27px;
			}

		</style>

		<title>404 Page Not Found</title>

	</head>

	<body>
		<div class="container">
			<div class="header">
				<img class="logo" src="
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/404_logo.png";
					?>
				">
			</div>

			<div class="main">
				<h1>Something's fishy here.</h1>
				<h2>The page you requested does not exist.</h2>
				<p>
					<a href="https://www.google.com/search?q=404+error">Why</a> might this be happening?
				</p>
			</div>

			<div class="brand">
				<img src="
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/brand.png";
					?>
				">
			</div>
		</div>
	</body>
</html>
