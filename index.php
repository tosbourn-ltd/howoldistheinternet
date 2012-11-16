<?php
	$now        = time();
    $start_date = strtotime("1991-08-06");
    $days       = floor(($now - $start_date)/(60*60*24));
?>
<!doctype html>
<html>
	<head>
		<title>The Age of the Internet</title>
		<style type="text/css" media="all">
			small {
				display: block;
				color: #ddd;
			}

			a,
			a:visited,
			a:active {
				color: #ccc;
				transition-property: color;
  				transition-duration: 0.5s;
			}

			a:hover {
				color: #000;
			}

			p, 
			footer {
				width: 95%;
				margin: 10% auto;
				text-align: center;
				font-size: 300%;
			}

			footer p {
				width: 100%;
				margin: 0 auto;
			}
		</style>
	</head>

	<body>
		<p>
			The Internet is <?=$days; ?> days Old.<sup>*</sup>
		</p>
		<p>
			What have you done today to make it better?
		</p>
		<footer>
			<small><sup>*</sup>Assuming by Internet we mean the Internet as we know it today (<a href="http://en.wikipedia.org/wiki/History_of_the_World_Wide_Web">the World Wide Web</a>)</small>
			<small>Made by <a href="https://www.twitter.com/tosbourn" rel="author">Toby</a>.</small>
		</footer>
	</body>
</html>