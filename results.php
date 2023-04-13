<?php
  date_default_timezone_set("Europe/London");
  $now                 = time();
  $birthday            = $_GET['date'];
  $age_days            = floor(($now - $birthday)/(60*60*24));
  $start_date_web      = strtotime("1989-03-12");
  $web_days            = floor(($now - $start_date_web)/(60*60*24));
  $older_days          = floor(($now - $birthday)/(60*60*24));
  $younger_age_difference      = $web_days - $age_days;
  $older_age_difference        = $age_days - $web_days;

  $result = "";
  $sharing_result = "";

  if ($age_days < $web_days) {
    $result = "The internet was $younger_age_difference days old when you were born!";
    $sharing_result = "The internet was $younger_age_difference days old when I was born! Click on the link to find out just how old you were when the internet was launched.";
    $days = $younger_age_difference;
  } elseif ($age_days > $web_days) {
    $result = "The internet was launched $older_age_difference days after you were born!";
    $sharing_result = "The internet was launched $older_age_difference days after I was born! Click on the link to find out just how old you were when the internet was launched.";
    $days = $older_age_difference;
  } else {
    $result = "Wow! You're exactly the same age as the internet!";
    $sharing_result = "Wow! I'm exactly the same age as the internet! Click on the link to find out just how old you were when the internet was launched.";
    $days = 0;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="How old is the internet?">
    <meta property="og:title" name="twitter:title" content="How old is the internet?">
    <meta name="description" property="og:description" content="<?=$sharing_result?>">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1757071657655796">
    <meta property="locale" content="en_GB">
    <meta property="og:url" content="https://howoldistheinter.net/results.php?date=<?= $birthday; ?>" name="twitter:url">
    <meta property="og:image" name="twitter:image" content="https://howoldistheinter.net/image.php?text=<?= $days; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tosbourn">
    <meta name="twitter:creator" content="@tosbourn">
    <link rel="canonical" href="https://howoldistheinter.net/">
    <script async defer data-domain="howoldistheinter.net" src="https://plausible.io/js/plausible.js"></script>
    <link rel="me" href="https://masto.ai/@tosbourn">
    <link rel="me" href="https://tosbourn.com">
    <link rel="me" href="mailto:toby@tosbourn.com">
  </head>
  <body>
    
    <h1><?= $result; ?></h1>
    
    <div class="intro date-box">
      <a href="/" class="submit">Try another date!</a>
    </div>
    
    <div class="socialshares">
      <h2>Share</h2>
      <a class="social facebook" target="_blank" rel="noopener" href="http://www.facebook.com/sharer/sharer.php?u=<?= urlencode("https://howoldistheinter.net/?date={$birthday}")?>"><img src="images/share-facebook.svg" alt="Facebook icon" width="32" height="32"><span>Facebook</span></a>

      <a class="social twitter" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?text=<?= $sharing_result; ?>&amp;url=<?= urlencode("https://howoldistheinter.net/?date={$birthday}")?>"><img src="images/share-twitter.svg" alt="Twitter icon" width="32" height="32"><span>Twitter</span></a>

      <a class="social linkedin" target="_blank" rel="noopener" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?= urlencode("https://howoldistheinter.net/?date={$birthday}")?>&amp;title=<?=$sharing_result?>&amp;summary=<?=$sharing_result?>&amp;source=<?= urlencode("https://howoldistheinter.net/?date={$birthday}")?>"><img src="images/share-linkedin.svg" alt="LinkedIn icon" width="32" height="32"><span>Linkedin</span></a>
</div>

    <aside class="ads">
      <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYI523W&placement=howoldistheinternet" id="_carbonads_js"></script>
    </aside>

    <footer>
      <p class="madeby">
        <a href="https://tosbourn.com/"><img class="logo" src="images/logo.png" alt="Tosbourn logo"></a>
        Made by <a href="https://tosbourn.com/" rel="author">tosbourn ltd</a>
      </small>
    </p>
</html>
