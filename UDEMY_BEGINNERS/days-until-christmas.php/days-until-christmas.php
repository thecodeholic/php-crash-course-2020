<?php

date_default_timezone_set('Australia/Brisbane');

$christmasDay = strtotime("December 25 2021");

$currentTime = time();

$seconds = $christmasDay - $currentTime;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = ceil($hours / 24);

echo "There are $days days until Christmas";