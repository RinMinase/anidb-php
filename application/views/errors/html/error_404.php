<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="
			<?php
				echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
				echo "resources/css/404/styles.css";
			?>
		">

		<title>404 Page Not Found</title>

		<style>
			html,body{
				text-align:left;
				font-size:1em
			}

			html,body,img,form,textarea,input,fieldset,div,p,div,ul,li,ol,dl,dt,dd,h1,h2,h3,h4,h5,h6,pre,code{
				margin:0;
				padding:0
			}

			ul,li{
				list-style:none
			}

			img{
				display:block
			}

			a img{
				border:0
			}

			a{
				text-decoration:none;
				font-weight:normal;
				font-family:inherit
			}

		 *:active,*:focus{
				outline:0;
				-moz-outline-style:none
		 }

		 h1,h2,h3,h4,h5,h6,h7{
				font-weight:normal;
				font-size:1em
		 }

		 .clearfix:after{
				clear:both;
				content:".";
				display:block;
				font-size:0;
				height:0;
				line-height:0;
				visibility:hidden
		 }

		 .fourohfour .ocean{
				background-image: url(
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/ocean.png";
					?>
				);
				background-color: #0c8da0;
				background-repeat: no-repeat;
				background-position: center 282px;
				height:315px
			}

			.fourohfour .ocean img{
				margin-right:auto;
				margin-left:auto
			}

			.fourohfour .waves{
				display:block;
				padding-top:25px;
				margin-right:auto;
				margin-left:auto
			}

			.fourohfour .main{
				display:block;
				margin-top:90px
			}

			.fourohfour .logo{
				width:150px;
				margin-top:3.5em;
				margin-left:auto;
				margin-right:auto
			}

			.fourohfour .fishy{
				display:block;
				padding-top:27px
			}

			.fourohfour .help{
				padding-top:2em
			}

			.fourohfour h1{
				font-family:"Open Sans","Myriad Pro",Arial,sans-serif;
				font-weight:bold;
				font-size:1.7em;
				color:#001c20;
				text-align:center
			}

			.fourohfour h2{
				font-family:"Open Sans","Myriad Pro",Arial,sans-serif;
				font-weight:300;
				font-size:1.5em;
				color:#001c20;
				text-align:center
			}

			.fourohfour p{
				font-family:"Open Sans","Myriad Pro",Arial,sans-serif;
				font-size:1.25em;
				color:#001c20;
				text-align:center
			}

			.fourohfour a{
				color:#118798
			}

			.fourohfour a:hover{
				color:#b1eef7
			}

		</style>

	</head>

	<body>
		<div class="fourohfour">
			<div class="ocean">
				<img alt="fish" class="fishy" src="
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/404_logo.png";
					?>
				">
			</div>

			<div class="main">
				<h1>Something's fishy here.</h1>
				<h2>The page you requested does not exist.</h2>
				<p class="help">
					<a href="https://www.google.com/search?q=404+error">Why</a> might this be happening?
				</p>
			</div>

			<div class="logo">
				<img alt="logo" src="
					<?php
						echo "http://" . $_SERVER['SERVER_NAME'] . "/anidb/";
						echo "resources/images/404/brand.png";
					?>
				">
			</div>
		</div>
	</body>
</html>

