<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<title>Instant Retreat</title>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>

	</head>
	<body>
		<script type="text/javascript">
		<?php
			$imagesDir = 'images/';
			$images = glob($imagesDir . '*.{gif}', GLOB_BRACE);
			$randomImage = $images[array_rand($images)];
		?>
			$.backstretch("<?=$randomImage?>");
		</script>
	</body>
</html>
