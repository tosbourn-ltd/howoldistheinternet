<?php
    $now                 = time();
    $start_date_web      = strtotime("1989-03-12");
    $start_date_internet = strtotime("1969-09-02");
    $web_days            = floor(($now - $start_date_web)/(60*60*24));
    $internet_days       = floor(($now - $start_date_internet)/(60*60*24));
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
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9894612888906674",
    enable_page_level_ads: true
    });
    </script>
		<meta charset="utf-8">
		<title>The Age of the Internet</title>
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link type="text/plain" rel="author" href="/humans.txt" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>

	<body>
		<p>
			The Internet is <?=$web_days; ?> days old.<sup>*</sup>
		</p>
		<p>
			What have you done today to make it better?
		</p>
    <section class="socialshares">
      <a class="social facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net">Facebook</a>
      <a class="social twitter" target="_blank" href="https://twitter.com/intent/tweet?text=The+internet+is+<?=$web_days;?>+days+old&amp;url=http%3A%2F%2Fhowoldistheinter.net">Twitter</a>
      <a class="social google" target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fhowoldistheinter.net">G+</a>
      <a class="social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=The+internet+is+<?=$web_days?>+days+old&amp;summary=The+internet+is+<?=$web_days?>+days+old&amp;source=http%3A%2F%2Fhowoldistheinter.net">LinkedIn</a>
    </section>
		<footer>
			<small>
				<sup>*</sup>Assuming by Internet we mean the Internet as we know it today (<a href="http://en.wikipedia.org/wiki/History_of_the_World_Wide_Web">the World Wide Web</a>).
			</small>
			<small>
				If you want the number of days from the time the internet technology was made it is <a href="http://news.nationalgeographic.co.uk/news/2009/08/090831-internet-40th-video-ap.html"><?=$internet_days;?></a>.
			</small>
			<small class="madeby">
				Made by <a href="https://www.tosbourn.com/" rel="author">Toby</a>.
			</small>
      <iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=tosbourn-21&o=2&p=26&l=ez&f=ifr&f=ifr" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" border="0" frameborder="0" style="border:none;"></iframe>
		</footer>
	</body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43108784-1', 'auto');
      ga('send', 'pageview');

    </script>
</html>
