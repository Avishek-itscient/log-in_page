<?php
$sname = 'localhost';
$uname = "root";
$password = "";


$db_name = "it-scient";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn ){
    echo "conenction failed ";
}