<?php
//koneksi ke database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul3_aria";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
