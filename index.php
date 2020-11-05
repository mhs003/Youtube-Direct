<?php
/**
 * Youtube Direct
 * @auth: Monzurul Hasan
 * @file: index.php
 * @date: 5/11/2020
 */

error_reporting(0);
header('Content-Type: text/plain');
require_once('logic.php');

$logic = new logic();
$id = $logic->getId("https://youtu.be/R5a__2ejzgQ");

if($id){
  print_r($logic->getVideoInfo());
} else {
  echo "Url is not valid!";
}