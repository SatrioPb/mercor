<?php
$host = "localhost";
$user_db = "root";
$pass_db = "";
$db = "mercor";
$con = mysqli_connect($host, $user_db, $pass_db) or die(mysqli_error($con));
mysqli_select_db($con, $db) or die(mysqli_error($con));
