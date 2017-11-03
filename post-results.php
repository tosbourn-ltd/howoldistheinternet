<?php
date_default_timezone_set("Europe/London");
$date = strtotime("{$_POST['year']}-{$_POST['month']}-{$_POST['day']}");
header("Location: /results.php?date={$date}");
?>
