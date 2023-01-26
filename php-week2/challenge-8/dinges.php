<?php
date_default_timezone_set("Europe/Amsterdam");
echo "Time in Amsterdam: ".date_create()->format('H:i');
date_default_timezone_set("America/New_York");
echo "<br> Time in New York: ".date_create()->format('H:i');
date_default_timezone_set("Australia/Sydney");
echo "<br>Time in Sydney: ".date_create()->format('H:i');
date_default_timezone_set("Etc/GMT");

date_default_timezone_set("Europe/Amsterdam");
echo"<br><br>";

echo date("d-m-Y") . "<br>";
echo date("d-m-y") . "<br>";

echo "<br>";

echo date ("l d F Y") . "<br>";
$formatter = new IntlDateFormatter('nl_NL', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format(time()) . "<br>";

echo "<br>";

$now = date_create(date("d-m-Y"));
$birthday = date_create(date("26-07-Y"));
$daysbetween = date_diff($now, $birthday);
echo $daysbetween->format("%a " . "dagen tot mijn verjaardag <br>");