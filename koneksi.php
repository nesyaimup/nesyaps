<?php   
$server = "localhost";
$host = "root";
$password = "";
$database = "ukk_nesyacantik";

$koneksi = mysqli_connect($server, $host, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
