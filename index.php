<?php
/**
 * Template Name: RETS Tests
 *
 * Full width page template.
 *
 * @package  realhomes
 * @subpackage modern
 */
$data = file_get_contents ('./retslist.json');
$json = json_encode($data,JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $data;

