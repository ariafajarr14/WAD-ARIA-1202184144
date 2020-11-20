<?php
//koneksi ke database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "  ";
$dbname = "wad_modul3_aria";

$conn = mysql_connect($dbhost, $dbuser,  $dbname, $dbpass);

if ($conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
