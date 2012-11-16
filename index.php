<?php
	$now        = time();
    $start_date = strtotime("1991-08-06");
    $days       = floor(($now - $start_date)/(60*60*24));
?>
<!doctype html>
<!--
	Hi there, cheers for checking out my source code.

	It isn't the most spectacular stuff in the world but if you want
	do make it better you can do by visiting the github page and doing
	a pull request: https://github.com/tosbourn/howoldistheinternet

	Cheers,
	Toby (@tosbourn)
-->
<html>
	<head>
		<meta charset="utf-8">
		<title>The Age of the Internet</title>
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link type="text/plain" rel="author" href="/humans.txt" />
		<style type="text/css" media="all">
			small {
				display: block;
				color: #ddd;
			}

			a, a:visited, a:active {
				color: #ccc;
				transition-property: color;
  				transition-duration: 0.5s;
			}

			a:hover {
				color: #000;
			}

			p, footer {
				width: 95%;
				margin: 10% auto;
				text-align: center;
				font-size: 300%;
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