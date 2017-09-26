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
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link type="text/plain" rel="author" href="/humans.txt" />
    <title>The Age of the Internet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="How old is the internet?">
    <meta property="og:title" name="twitter:title" content="How old is the internet?">
    <meta property="og:description" content="Just how many days old is the internet right now?">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1757071657655796">
    <meta property="locale" content="en_GB">
    <meta property="og:url" content="https://www.howoldistheinter.net" name="twitter:url">
    <meta property="og:image" name="twitter:image" content="https://www.howoldistheinter.net/social.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@tosbourn">
    <meta name="twitter:creator" content="@tosbourn">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700|Ubuntu:300" rel="stylesheet">
  </head>

  <body>
    <p>
      The Internet is <?=$web_days; ?> days old.<sup>*</sup>
    </p>
    <p>
      What have you done today to make it better?
    </p>
    <section class="intro date-box">
    <p class="box-text">How old were you when the internet was launched?</p>
    <div >
      <form action="/results.php" method="GET">
        <span class="dropdown dropdown--emerald dropdown--large">
        <select name="year" class="dropdown__select dropdown__select--emerald">
          <option value="">Year</option>
          <?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
          <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
          <?php } ?>
        </select>
      </span>
      <span class="dropdown dropdown--emerald dropdown--large">
        <select name="month" class="dropdown__select dropdown__select--emerald">
          <option value="">Month</option>
          <?php for ($month = 1; $month <= 12; $month++) { ?>
          <option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
          <?php } ?>
        </select>
      </span>
      <span class="dropdown dropdown--emerald dropdown--large">
        <select name="day" class="dropdown__select dropdown__select--emerald">
          <option value="">Day</option>
          <?php for ($day = 1; $day <= 31; $day++) { ?>
          <option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>"><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
          <?php } ?>
        </select>
      </span>
      <div>
        <input type="submit" value="Find out!" class="submit">
      </div>
      </form>
    </div>
  </section>

    <section class="socialshares">
      <div class="container">
        <a class="social facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net%2Fresults.php"><img src="images/share-facebook.svg" alt="Facebook icon"><span class="social__text">Share on Facebook</span></a>
        <a class="social twitter" target="_blank" href="https://twitter.com/intent/tweet?text=The+internet+is+<?=$web_days;?>+days+old&amp;url=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-twitter.svg" alt="Twitter icon"><span class="social__text">Share on Twitter</span></a>
        <a class="social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=The+internet+is+<?=$web_days?>+days+old&amp;summary=The+internet+is+<?=$web_days?>+days+old&amp;source=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-linkedin.svg" alt="LinkedIn icon"><span class="social__text">Share on Linkedin</span></a>
      </div>
    </section>

    <aside class="ads">
      <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=howoldistheinternet" id="_carbonads_js"></script>
    </aside>

    <section class="intro">
      <div class="container">
        <h1>Internet Timeline &darr;</h1>
      </div>
    </section>

    <section class="timeline">
      <ul>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1989</time>
            <h3>DAY 0 The Birth of WWW</h3>
            Tim Berners-Lee and Robert Cailliau proposed a 'hypertext' system starting the modern Internet. Berners-Lee invented the Web while at CERN, he developed HTML, HTTP and URIs which have been further refined and form the basis of the modern internet.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>1991</time>
            <h3>DAY 919 Release of Linux</h3>
            Linux was developed by Linus Torvalds, which is the basis for Android and Chrome OS. Linus was also responsible for developing Git, a distributed revision control system. He is a vocal advocate for Open Source software.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1993</time>
            <h3>DAY 1549 First Microsoft Windows browser released</h3>
            Cello was the first Microsoft Windows browser released and was used at Cornell Law School as Windows access was more widespread amongst lawyers than Unix. As hated as IE? Who knows!
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>1993</time>
            <h3>DAY 1635 <a href="https://en.wikipedia.org/wiki/W3Catalog">W3 Catalog</a></h3>
            One of the earliest web search engines was put online.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1993</time>
            <h3>DAY 1657 <a href="https://www.ibiblio.org/Dave/drfun.html">Doctor Fun</a></h3>
            This web comic was created by David Farley and was one of the first on the world wide web.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>1995</time>
            <h3>DAY 2372 WinPlay3 release</h3>
            With the release of the first real-time software MP3 player, many people were able to encode and play back MP3s on their PCs.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1995</time>
            <h3>DAY 2181 Yahoo incorporated</h3>
            Believe it or not Yahoo were one of the pioneers of the early internet.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>1996</time>
            <h3>DAY 2671 Hotmail goes live</h3>
            Hotmail was bought by Microsoft a year after launch and is now known as Outlook.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1998</time>
            <h3>DAY 3470 Google goes live</h3>
            Now a household name, since incorporation Google has had rapid growth offering a range of services including email, social networking, cloud storage, mapping and video sharing. They lead development on the Android mobile operating system and Google Chrome. They have recently made rapid developments and innovations in hardware. Remember big brother is watching you.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>1999</time>
            <h3>DAY 3713 First major online leak</h3>
            One of the first major online leak scandals happened when the name of British intelligence agents appeared on an American website -pre Wikileaks!
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>1999</time>
            <h3>DAY 3946 Millennium Bug</h3>
            The Y2K bug was something that could’ve caused problems with dates beyond 31st December 1999, as computers often dealt with the last two numbers in a year, making 1900 the “same” as 2000. Very few problems were ever reported and despite my Father’s panic, our home PC was fine.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>2001</time>
            <h3>DAY 4608 First iPod released</h3>
            Thus began Apple’s domination.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
            <time>2004</time>
            <h3>DAY 5442 Facebook launches</h3>
            Facebook first launched as The Facebook for Harvard University students, now even your Mum and Granny has one.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-right" data-aos-delay="300">
            <time>2006</time>
            <h3>DAY 6128 Twitter founded</h3>
            Quite often the source of breaking news the world over.
          </div>
          <span data-aos="fade-up"></span>
        </li>
        <li class="in-view">
          <div data-aos="fade-left" data-aos-delay="300">
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
        <a href="#1"><img class="logo animated bounceIn" src="images/logo.png" alt="Tosbourn logo"></a>
        Made by <a href="http://tosbourn.com/" rel="author">tosbourn ltd</a>
      </small>
    </footer>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
        duration: 1200,
      });
    </script>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1757071657655796',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
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
