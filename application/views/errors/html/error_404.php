<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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

		 .header {
				background-image: url(
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/back.png";
					?>
				);
				background-color: #0C8DA0;
				background-repeat: no-repeat;
				background-position: center 282px;
				height: 315px;
			}

			.header .logo {
				display: block;
				margin: 0px auto;
				padding-top: 27px;
			}

			.body {
				display: block;
				margin-top: 90px;
			}

			.brand {
				width: 150px;
				margin: 3.5em auto 0px auto;
			}

		</style>

		<title>404 Page Not Found</title>

	</head>

	<body>
		<div class="header">
			<img class="logo" src="
				<?php
					echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
					echo "resources/images/404/404_logo.png";
				?>
			">
		</div>

		<div class="body">
			<h1>Something's fishy here.</h1>
			<h2>The page you requested does not exist.</h2>
			<p><a href="https://www.google.com/search?q=404+error">Why</a> might this be happening?</p>
		</div>

		<div class="brand">
			<img src="
				<?php
					echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
					echo "resources/images/404/brand.png";
				?>
			">
		</div>
	</body>
</html>
