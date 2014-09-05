<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<title>Instant Retreat</title>

		<style type="text/css">
			html {
				<?php
					$imagesDir = 'images/';
					$images = glob($imagesDir . '*.{gif}', GLOB_BRACE);
					$randomImage = $images[array_rand($images)];
					print "background: url(" . $randomImage . ") no-repeat center center fixed;";
				?>

				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>
	</head>
	<body>
	</body>
</html>
