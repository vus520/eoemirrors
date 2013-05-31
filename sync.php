#!/bin/php
<?php
if(PHP_SAPI !== 'cli') exit;

$orc = 'http://www.oracle.com/technetwork/java/javase/downloads/index.html';

$html = file_get_contents($orc) or die ("fetch oracle download page error");
preg_match("@jdk7-downloads-\d+.html@is", $html, $match);
if(empty( $match[0] )) die(can not find the download version');

print_r($match[0]);


