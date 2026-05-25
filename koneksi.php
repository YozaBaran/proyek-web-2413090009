<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_dosen";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
  die("Tidak dapat membuat koneksi dengan server database!");
} else {
}


function db_disconnect($con)
{
  mysqli_close($con);
}
