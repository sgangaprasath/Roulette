<?php

header('Content-Type: text/html; charset=utf-8');
require_once 'KLogger.php';

$log = new KLogger ( "/var/www/html/php/logRoulette.txt" , KLogger::DEBUG );
//$log = new KLogger ( "logRoulette.txt" , KLogger::DEBUG );

$log->LogError($_POST['uid'] .'_'. $_POST['key'] . '_' . $_POST['value']);


?>
