<?php

define("DBHOST","182.50.133.173");
define("DBUSER","studDB21a");
define("DBPASS","stud21DB1!");
define("DBNAME","studDB21a");
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if(mysqli_connect_errno()){
    die("DB conniction failed");
}