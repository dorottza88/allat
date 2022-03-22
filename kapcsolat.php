<?php

$url = 'localhost';
$uName = 'root';
$password = '';
$dbname="allatmenhely";
$conn = mysqli_connect($url,$uName, $password,$dbname);
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_error());
}