<?php
date_default_timezone_set("Europe/London");
$now                 = time();
$birthday            = strtotime("{$_GET['year']}-{$_GET['month']}-{$_GET['day']}");
$age_days            = floor(($now - $birthday)/(60*60*24));
$start_date_web      = strtotime("1989-03-12");
$web_days            = floor(($now - $start_date_web)/(60*60*24));
$older_days          = floor(($now - $birthday)/(60*60*24));

$younger_age_difference      = $web_days - $age_days;
$older_age_difference        = $age_days - $web_days; ?>

<?php
$result = "";
$sharing_result = "";

if ($age_days < $web_days) {
  $result = "The internet was $younger_age_difference days old when you were born!";
  $sharing_result = "The internet was $younger_age_difference days old when I was born!";
  $days = $younger_age_difference;
} elseif ($age_days > $web_days) {
  $result = "The internet was launched $older_age_difference days after you were born!";
  $sharing_result = "The internet was launched $older_age_difference days after I was born!";
  $days = $older_age_difference;
} else {
  $result = "Wow! You're exactly the same age as the internet!";
  $sharing_result = "Wow! I'm exactly the same age as the internet!";
  $days = 0;
} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="How old is the internet?">
    <meta property="og:title" name="twitter:title" content="How old is the internet?">
    <meta property="og:description" content="This is how old the internet was when I was born!">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1757071657655796">
    <meta property="locale" content="en_GB">
    <meta property="og:url" content="https://www.howoldistheinter.net/results.php?year=<?= $_GET['year'] ?>&month=<?= $_GET['month'] ?>&day=<?= $_GET['day'] ?>" name="twitter:url">
    <meta property="og:image" name="twitter:image" content="https://www.howoldistheinter.net/image.php?text=<?= $days ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@tosbourn">
    <meta name="twitter:creator" content="@tosbourn">
  </head>
  <body>

    <p><?= $result; ?></p>

    <section class="socialshares">

      <a class="social facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net%2Fresults.php">Facebook</a>
      <a class="social twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?=$sharing_result;?>&amp;url=http%3A%2F%2Fhowoldistheinter.net">Twitter</a>

      <a class="social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=<?=$sharing_result?>&amp;summary=<?=$sharing_result?>&amp;source=http%3A%2F%2Fhowoldistheinter.net">LinkedIn</a>

    </section>

    <a href="/index.php" class="submit">Try another date!</a>

    <aside class="ads">
      <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=howoldistheinternet" id="_carbonads_js"></script>
    </aside>

    <img alt="How many days old you are in relation to the internet" src="/image.php?text=<?= $days ?>">

    <footer>
      <small class="madeby">
        Made by <a href="http://tosbourn.com/" rel="author">tosbourn ltd</a>.
      </small>
    </footer>

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
