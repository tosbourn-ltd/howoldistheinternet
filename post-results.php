<!-- <?php
date_default_timezone_set("Europe/London");
$now                 = time();
$birthday            = strtotime("{$_GET['year']}-{$_GET['month']}-{$_GET['day']}");
$age_days            = floor(($now - $birthday)/(60*60*24));
$start_date_web      = strtotime("1989-03-12");
$web_days            = floor(($now - $start_date_web)/(60*60*24));
$older_days          = floor(($now - $birthday)/(60*60*24));

$younger_age_difference      = $web_days - $age_days;
$older_age_difference        = $age_days - $web_days; ?> -->







<?php header("Location: /results.php?result=12431323232") ?>
