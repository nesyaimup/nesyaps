<?php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$query = "SELECT * FROM admin 
          WHERE username = '$username' 
          AND password = '$password'";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    // SIMPAN SESSION LOGIN
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;

    header("Location: admin.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
