<?php
/**
 * Template Name: RETS Tests
 *
 * Full width page template.
 *
 * @package  realhomes
 * @subpackage modern
 */
//$data = file_get_contents ('data/retslist.json');
$dataip =file_get_contents('http://67.205.141.118/');
$json = json_encode($dataip,JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $dataip;

