<?php
//$locale = "fr_FR";
$locale = "en_US";
if (isSet($_GET["locale"])) $locale = $_GET["locale"];
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain("message", "./locale");
textdomain("message");
?>
