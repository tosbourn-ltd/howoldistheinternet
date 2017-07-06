<?php
    date_default_timezone_set("Europe/London");
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

  Thanks to this awesome tutorial from https://webdesign.tutsplus.com/tutorials/building-a-vertical-timeline-with-css-and-a-touch-of-javascript--cms-26528 which I borrowed heavily from for the internet timeline!

  Cheers,
  Elaine (@kittylainey)
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
      <a class="social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=The+internet+is+<?=$web_days?>+days+old&amp;summary=The+internet+is+<?=$web_days?>+days+old&amp;source=http%3A%2F%2Fhowoldistheinter.net">LinkedIn</a>
    </section>

    <section class="intro">
      <div class="container">
        <h1>Internet Timeline &darr;</h1>
      </div>
    </section>

    <section class="timeline">
      <ul>
        <li>
          <div>
            <time>1989</time>
            <h3>DAY 0 The Birth of WWW</h3>
            Tim Berners-Lee and Robert Cailliau proposed a 'hypertext' system starting the modern Internet. Berners-Lee invented the Web while at CERN, he developed HTML, HTTP and URIs which have been further refined and form the basis of the modern internet.
          </div>
        </li>
        <li>
          <div>
            <time>1991</time>
            <h3>DAY 919 Release of Linux</h3>
            Linux was developed by Linus Torvalds, which is the basis for Android and Chrome OS. Linus was also responsible for developing Git, a distributed revision control system. He is a vocal advocate for Open Source software.
          </div>
        </li>
        <li>
          <div>
            <time>1993</time>
            <h3>DAY 1549 First Microsoft Windows browser released</h3>
            Cello was the first Microsoft Windows browser released and was used at Cornell Law School as Windows access was more widespread amongst lawyers than Unix. As hated as IE? Who knows!
          </div>
        </li>
        <li>
          <div>
            <time>1993</time>
            <h3>DAY 1635 <a href="https://en.wikipedia.org/wiki/W3Catalog">W3 Catalog</a></h3>
            One of the earliest web search engines was put online.
          </div>
        </li>
        <li>
          <div>
            <time>1993</time>
            <h3>DAY 1657 <a href="https://www.ibiblio.org/Dave/drfun.html">Doctor Fun</a></h3>
            This web comic was created by David Farley and was one of the first on the world wide web.
          </div>
        </li>
        <li>
          <div>
            <time>1995</time>
            <h3>DAY 2372 WinPlay3 release</h3>
            With the release of the first real-time software MP3 player, many people were able to encode and play back MP3s on their PCs.
          </div>
        </li>
        <li>
          <div>
            <time>1995</time>
            <h3>DAY 2181 Yahoo incorporated</h3>
            Believe it or not Yahoo were one of the pioneers of the early internet.
          </div>
        </li>
        <li>
          <div>
            <time>1996</time>
            <h3>DAY 2671 Hotmail goes live</h3>
            Hotmail was bought by Microsoft a year after launch and is now known as Outlook.
          </div>
        </li>
        <li>
          <div>
            <time>1998</time>
            <h3>DAY 3470 Google goes live</h3>
            Now a household name, since incorporation Google has had rapid growth offering a range of services including email, social networking, cloud storage, mapping and video sharing. They lead development on the Android mobile operating system and Google Chrome. They have recently made rapid developments and innovations in hardware. Remember big brother is watching you.
          </div>
        </li>
        <li>
          <div>
            <time>1999</time>
            <h3>DAY 3713 First major online leak</h3>
            One of the first major online leak scandals happened when the name of British intelligence agents appeared on an American website -pre Wikileaks!
          </div>
        </li>
        <li>
          <div>
            <time>1999</time>
            <h3>DAY 3946 Millennium Bug</h3>
            The Y2K bug was something that could’ve caused problems with dates beyond 31st December 1999, as computers often dealt with the last two numbers in a year, making 1900 the “same” as 2000. Very few problems were ever reported and despite my Father’s panic, our home PC was fine.
          </div>
        </li>
        <li>
          <div>
            <time>2001</time>
            <h3>DAY 4608 First iPod released</h3>
            Thus began Apple’s domination.
          </div>
        </li>
        <li>
          <div>
            <time>2004</time>
            <h3>DAY 5442 Facebook launches</h3>
            Facebook first launched as The Facebook for Harvard University students, now even your Mum and Granny has one.
          </div>
        </li>
        <li>
          <div>
            <time>2006</time>
            <h3>DAY 6128 Twitter founded</h3>
            Quite often the source of breaking news the world over.
          </div>
        </li>
        <li>
          <div>
            <time><?= date("Y"); ?></time>
            <h3>NOW</h3>
            Something we left out? Something happened that you think we should include? <a href="https://www.twitter.com/tosbourn">Contact us!</a>
          </div>
        </li>
      </ul>
    </section>

    <footer>
      <small>
        <sup>*</sup>Assuming by Internet we mean the Internet as we know it today (<a href="http://en.wikipedia.org/wiki/History_of_the_World_Wide_Web">the World Wide Web</a>).
      </small>
      <small>
        If you want the number of days from the time the internet technology was made it is <a href="http://news.nationalgeographic.co.uk/news/2009/08/090831-internet-40th-video-ap.html"><?=$internet_days;?></a>.
      </small>
      <small class="madeby">
        Made by <a href="http://tosbourn.com/" rel="author">tosbourn ltd</a>.
      </small>
    </footer>

<script>
(function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})();
</script>


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
