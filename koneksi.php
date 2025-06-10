<?php
$host = "localhost:3310";
$user = "root";
$pass = "";
$db   = "tba_website";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
