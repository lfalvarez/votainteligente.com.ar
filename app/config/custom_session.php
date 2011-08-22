<?php
//Cookie lifetime set to 0, so session is destroyed when browser is closed and doesn't persist for days as it does by default when Security.level is 'low' or 'medium'
$minutes = 30;
$timeForACookieToExpire = $minutes*60;
ini_set('session.cookie_lifetime', $timeForACookieToExpire);
?>
