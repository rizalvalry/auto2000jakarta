<?php

$host = "localhost";
$dbs = "auto2000";
$user = "root";
$pass = "";

$db = new mysqli($host, $user, $pass, $dbs);
// if(!$db) {
//   die( print_r( $db));
// } else {
//     echo "berhasilkah";
// }