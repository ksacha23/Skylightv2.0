<?php

$dbhost = "localhost:8888";
$dbuser = "root";
$dbpass = "";
$dbname = "skylight_db";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to connect!");
}