<?php
	$now        = time();
    $start_date = strtotime("1991-08-06");
    $days       = floor(($now - $start_date)/(60*60*24));
?>
<!doctype html>
<html>
	<head>
		<title>The Age of the Internet</title>
	</head>
	<body>
		<p>
			The Internet is <?=$days; ?> days Old.
		</p>
		<footer>
			<p>What have you done today to make it better?</p>
			<small>Made by <a href="https://www.twitter.com/tosbourn" rel="author">Toby</a>.</small>
		</footer>
	</body>
</html>