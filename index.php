<?php
  date_default_timezone_set("Europe/London");
  $now                 = time();
  $start_date_web      = strtotime("1989-03-12");
  $start_date_internet = strtotime("1969-10-29");
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
      The Internet is <span class="larger"><?=$web_days; ?><sup><a href="#days-old">*</a></sup></span> days old
    </h1>

    <section class="intro date-box">
      <h3 class="box-text">How old were you when the internet was launched?</h3>
      <div>
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
          <input type="submit" value="Find out!" class="submit">
        </form>
      </div>
    </section>

    <section class="socialshares">
      <h3>Share</h3>
      <a class="social facebook" target="_blank" rel="noopener" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net%2Fresults.php"><img src="images/share-facebook.svg" alt="Facebook icon" width="32" height="32"><span>Facebook</span></a>
      <a class="social twitter" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?text=The+internet+is+<?=$web_days;?>+days+old&amp;url=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-twitter.svg" alt="Twitter icon" width="32" height="32"><span>Twitter</span></a>
      <a class="social linkedin" target="_blank" rel="noopener" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=The+internet+is+<?=$web_days?>+days+old&amp;summary=The+internet+is+<?=$web_days?>+days+old&amp;source=http%3A%2F%2Fhowoldistheinter.net"><img src="images/share-linkedin.svg" alt="LinkedIn icon" width="32" height="32"><span>Linkedin</span></a>
    </section>

    <section class="intro">
      <h2>Internet Timeline &darr;</h2>
    </section>

    <section class="timeline">
      <ul>
        <li>
          <div class="timeline-element">
            <time datetime="1989">1989 - day <span class="day-highlight">0</span></time>
            <h3>The Birth of WWW</h3>
            Tim Berners-Lee and Robert Cailliau proposed a 'hypertext' system starting the modern Internet. Berners-Lee invented the Web while at CERN, he developed HTML, HTTP and URIs which have been further refined and form the basis of the modern internet.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1991">1991 - day <span class="day-highlight">919</span></time>
            <h3>Release of Linux</h3>
            Linux was developed by Linus Torvalds, which is the basis for Android and Chrome OS. Linus was also responsible for developing Git, a distributed revision control system. He is a vocal advocate for Open Source software.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1993">1993 - day <span class="day-highlight">1549</span></time>
            <h3>First Microsoft Windows browser released</h3>
            Cello was the first Microsoft Windows browser released and was used at Cornell Law School as Windows access was more widespread amongst lawyers than Unix. As hated as IE? Who knows!
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1993">1993 - day <span class="day-highlight">1635</span></time>
            <h3><a href="https://en.wikipedia.org/wiki/W3Catalog">W3 Catalog</a></h3>
            One of the earliest web search engines was put online.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1993">1993 - day <span class="day-highlight">1685</span></time>
            <h3>First Livestream</h3>
            A coffee pot at the University of Cambridge was the subject of the world's first livestream.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1993">1993 - day <span class="day-highlight">1657</span></time>
            <h3><a href="https://www.ibiblio.org/Dave/drfun.html">Doctor Fun</a></h3>
            This web comic was created by David Farley and was one of the first on the world wide web.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1993">1994 - day <span class="day-highlight">1978</span></time>
            <h3>The first ecommerce site & transaction</h3>
            This is a contended fact but NetMarket claims to have conducted the first online sale for a Sting CD for the grand total of $12.48 plus postage and packaging.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1994">1994</time>
            <h3>The first banner ad!</h3>
            This isn't the first banner ad, but it does help the site!
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYI523W&placement=howoldistheinternet" id="_carbonads_js"></script>
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1995">1995 - day <span class="day-highlight">2181</span></time>
            <h3>Yahoo incorporated</h3>
            Believe it or not Yahoo were one of the pioneers of the early internet.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1995">1995 - day <span class="day-highlight">2372</span></time>
            <h3>WinPlay3 release</h3>
            With the release of the first real-time software MP3 player, many people were able to encode and play back MP3s on their PCs.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1996">1996 - day <span class="day-highlight">2671</span></time>
            <h3>Hotmail goes live</h3>
            Hotmail was bought by Microsoft a year after launch and is now known as Outlook.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1996">1996 - day <span class="day-highlight">2713</span></time>
            <h3>First mobile phone with internet access</h3>
            The phone was large and heavy but the first that could access the internet.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1998">1998 - day <span class="day-highlight">3470</span></time>
            <h3>Google goes live</h3>
            Now a household name, since incorporation Google has had rapid growth offering a range of services including email, social networking, cloud storage, mapping and video sharing. They lead development on the Android mobile operating system and Google Chrome. They have recently made rapid developments and innovations in hardware.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1999">1999 - day <span class="day-highlight">3713</span></time>
            <h3>First major online leak</h3>
            One of the first major online leak scandals happened when the name of British intelligence agents appeared on an American website -pre Wikileaks!
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="1999">1999 - day <span class="day-highlight">3946</span></time>
            <h3>Millennium Bug</h3>
            The Y2K bug was something that could’ve caused problems with dates beyond 31st December 1999, as computers often dealt with the last two numbers in a year, making 1900 the “same” as 2000. Very few problems were ever reported and despite my Father’s panic, our home PC was fine.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2001">2001 - day <span class="day-highlight">4608</span></time>
            <h3>First iPod released</h3>
            Thus began Apple’s domination.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2004">2004 - day <span class="day-highlight">5442</span></time>
            <h3>Facebook launches</h3>
            Facebook first launched as The Facebook for Harvard University students.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2004">2005 - day <span class="day-highlight">5886</span></time>
            <h3>The first YouTube video</h3>
            Uploaded by cofounder Jawed Karim. It was a video of of himself at the San Diego Zoo called <a href="https://www.youtube.com/watch?v=jNQXAC9IVRw">"Me at the zoo"</a>.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2006">2006 - day <span class="day-highlight">6128</span></time>
            <h3>Twitter founded</h3>
            Quite often the source of breaking news the world over.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2006">2010 - day <span class="day-highlight">7692</span></time>
            <h3>First iPad launched</h3>
            Although not the first tablet, it's the ubiquitous term for tablet devices.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2006">2012 - day <span class="day-highlight">8685</span></time>
            <h3>First video with 1 billion views on YouTube</h3>
            South Korean superstar Psy was the first to reach 1 billion views with the viral hit Gangnam Style.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="2016">2016 - day <span class="day-highlight">10035</span></time>
            <h3>TikTok launched</h3>
            A new social media platform for a new generation.
          </div>
        </li>

        <li>
          <div class="timeline-element">
            <time datetime="<?= date("Y"); ?>"><?= date("Y"); ?> - day <span class="day-highlight"><?=$web_days; ?></span></time>
            <h3>NOW</h3>
            Something we left out? Something happened that you think we should include? <a href="https://www.twitter.com/tosbourn">Contact us!</a>
          </div>
        </li>
      </ul>
    </section>

    <footer>
      <p>
        <sup id="days-old">*</sup>Assuming by Internet we mean the Internet as we know it today (<a href="http://en.wikipedia.org/wiki/History_of_the_World_Wide_Web">the World Wide Web</a>).
      </p>
      <p>
        If you want the number of days from the time the internet technology was made it is <a href="https://en.wikipedia.org/wiki/Internet#History"><?=$internet_days;?></a>.
      </p>
      <p class="madeby">
        <a href="https://tosbourn.com/"><img class="logo" src="images/logo.png" alt="Tosbourn logo" width="48" height="48"></a>
        Made by <a href="https://tosbourn.com/" rel="author">tosbourn ltd</a>
      </p>
    </footer>
  </body>
</html>
