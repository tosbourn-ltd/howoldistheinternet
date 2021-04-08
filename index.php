<?php
  date_default_timezone_set("Europe/London");
  $now                 = time();
  $start_date_web      = strtotime("1989-03-12");
  $start_date_internet = strtotime("1969-09-02");
  $birthday            = $_GET['date'];
  $web_days            = floor(($now - $start_date_web)/(60*60*24));
  $age_days            = floor(($now - $birthday)/(60*60*24));
  $internet_days       = floor(($now - $start_date_internet)/(60*60*24));
  $younger_age_difference      = $web_days - $age_days;
  $older_age_difference        = $age_days - $web_days;

  $sharing_result = "";

  if ($age_days < $web_days) {
    $sharing_result = "The internet was $younger_age_difference days old when I was born!";
    $days = $younger_age_difference;
  } elseif ($age_days > $web_days) {
    $sharing_result = "The internet was launched $older_age_difference days after I was born!";
    $days = $older_age_difference;
  } else {
    $sharing_result = "Wow! I'm exactly the same age as the internet!";
    $days = 0;
  }
?>

<!DOCTYPE html>
<!--
  Hi there, cheers for checking out my source code.

  It isn't the most spectacular stuff in the world but if you want
  do make it better you can do by visiting the github page and doing
  a pull request: https://github.com/tosbourn/howoldistheinternet

  Cheers,
  Toby (@tosbourn)
-->
<html lang="en">
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

    <?php if ($_GET['date']) { ?>
      <meta name="description" property="og:description" content="<?=$sharing_result?>">
      <meta property="og:image" name="twitter:image" content="https://www.howoldistheinter.net/image.php?text=<?= $days; ?>">
      <meta property="og:url" content="https://www.howoldistheinter.net/?date=<?= $_GET['date']; ?>" name="twitter:url">
    <?php } else { ?>
      <meta name="description" property="og:description" content="Find out just how many days old is the internet right now.">
      <meta property="og:image" name="twitter:image" content="https://www.howoldistheinter.net/social.png">
      <meta property="og:url" content="https://www.howoldistheinter.net" name="twitter:url">
    <?php } ?>

    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1757071657655796">
    <meta property="locale" content="en_GB">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tosbourn">
    <meta name="twitter:creator" content="@tosbourn">
    <link rel="canonical" href="https://howoldistheinter.net/">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Montserrat:300,700|Ubuntu:300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,700|Ubuntu:300&display=swap" media="print" onload="this.media='all'">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,700|Ubuntu:300&display=swap">
    </noscript>
    <script async defer data-domain="howoldistheinter.net" src="https://plausible.io/js/plausible.js"></script>
    <meta name="monetization" content="$ilp.uphold.com/FWUieqxLeakN">
  </head>

  <body>
    <h1>
      The Internet is <?=$web_days; ?> days old.<sup>*</sup>
    </h1>
    <p>
      What have you done today to make it better?
    </p>
    <section class="intro date-box">
    <h2 class="box-text">How old were you when the internet was launched?</h2>
    <div >
      <form action="/post-results.php" method="POST">
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
        <a class="social facebook" target="_blank" rel="noopener" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net%2Fresults.php"><img src="images/share-facebook.svg" alt="Facebook icon" width="32" height="32"><span class="social__text">Share on Facebook</span></a>
        <a class="social twitter" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?text=The+internet+is+<?=$web_days;?>+days+old&amp;url=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-twitter.svg" alt="Twitter icon" width="32" height="32"><span class="social__text">Share on Twitter</span></a>
        <a class="social linkedin" target="_blank" rel="noopener" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=The+internet+is+<?=$web_days?>+days+old&amp;summary=The+internet+is+<?=$web_days?>+days+old&amp;source=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-linkedin.svg" alt="LinkedIn icon" width="32" height="32"><span class="social__text">Share on Linkedin</span></a>
      </div>
    </section>

    <aside class="ads">
      <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYI523W&placement=howoldistheinternet" id="_carbonads_js"></script>
    </aside>

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
            <h2>DAY 0 The Birth of WWW</h2>
            Tim Berners-Lee and Robert Cailliau proposed a 'hypertext' system starting the modern Internet. Berners-Lee invented the Web while at CERN, he developed HTML, HTTP and URIs which have been further refined and form the basis of the modern internet.
          </div>
          
        </li>
        <li>
          <div>
            <time>1991</time>
            <h2>DAY 919 Release of Linux</h2>
            Linux was developed by Linus Torvalds, which is the basis for Android and Chrome OS. Linus was also responsible for developing Git, a distributed revision control system. He is a vocal advocate for Open Source software.
          </div>
          
        </li>
        <li>
          <div>
            <time>1993</time>
            <h2>DAY 1549 First Microsoft Windows browser released</h2>
            Cello was the first Microsoft Windows browser released and was used at Cornell Law School as Windows access was more widespread amongst lawyers than Unix. As hated as IE? Who knows!
          </div>
          
        </li>
        <li>
          <div>
            <time>1993</time>
            <h2>DAY 1635 <a href="https://en.wikipedia.org/wiki/W3Catalog">W3 Catalog</a></h2>
            One of the earliest web search engines was put online.
          </div>
          
        </li>
        <li>
          <div>
            <time>1993</time>
            <h2>DAY 1657 <a href="https://www.ibiblio.org/Dave/drfun.html">Doctor Fun</a></h2>
            This web comic was created by David Farley and was one of the first on the world wide web.
          </div>
          
        </li>
        <li>
          <div>
            <time>1995</time>
            <h2>DAY 2372 WinPlay3 release</h2>
            With the release of the first real-time software MP3 player, many people were able to encode and play back MP3s on their PCs.
          </div>
          
        </li>
        <li>
          <div>
            <time>1995</time>
            <h2>DAY 2181 Yahoo incorporated</h2>
            Believe it or not Yahoo were one of the pioneers of the early internet.
          </div>
          
        </li>
        <li>
          <div>
            <time>1996</time>
            <h2>DAY 2671 Hotmail goes live</h2>
            Hotmail was bought by Microsoft a year after launch and is now known as Outlook.
          </div>
          
        </li>
        <li>
          <div>
            <time>1998</time>
            <h2>DAY 3470 Google goes live</h2>
            Now a household name, since incorporation Google has had rapid growth offering a range of services including email, social networking, cloud storage, mapping and video sharing. They lead development on the Android mobile operating system and Google Chrome. They have recently made rapid developments and innovations in hardware. Remember big brother is watching you.
          </div>
          
        </li>
        <li>
          <div>
            <time>1999</time>
            <h2>DAY 3713 First major online leak</h2>
            One of the first major online leak scandals happened when the name of British intelligence agents appeared on an American website -pre Wikileaks!
          </div>
          
        </li>
        <li>
          <div>
            <time>1999</time>
            <h2>DAY 3946 Millennium Bug</h2>
            The Y2K bug was something that could’ve caused problems with dates beyond 31st December 1999, as computers often dealt with the last two numbers in a year, making 1900 the “same” as 2000. Very few problems were ever reported and despite my Father’s panic, our home PC was fine.
          </div>
          
        </li>
        <li>
          <div>
            <time>2001</time>
            <h2>DAY 4608 First iPod released</h2>
            Thus began Apple’s domination.
          </div>
          
        </li>
        <li>
          <div>
            <time>2004</time>
            <h2>DAY 5442 Facebook launches</h2>
            Facebook first launched as The Facebook for Harvard University students, now everyone has one.
          </div>
          
        </li>
        <li>
          <div>
            <time>2006</time>
            <h2>DAY 6128 Twitter founded</h2>
            Quite often the source of breaking news the world over.
          </div>
          
        </li>
        <li>
          <div>
            <time><?= date("Y"); ?></time>
            <h2>NOW</h2>
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
        <a href="https://tosbourn.com/"><img class="logo" src="images/logo.png" alt="Tosbourn logo" width="48" height="48"></a>
        Made by <a href="https://tosbourn.com/" rel="author">tosbourn ltd</a>
      </small>
    </footer>
  </body>
</html>
