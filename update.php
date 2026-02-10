<?php
include 'koneksi.php';

$id       = $_POST['id'];
$status   = $_POST['status'];
$feedback = $_POST['feedback'];

// Update langsung tanpa prepared statement
$query = "UPDATE aspirasi 
          SET status = '$status', feedback = '$feedback' 
          WHERE id_aspirasi = $id";

mysqli_query($koneksi, $query);

// Kembali ke halaman admin
header("Location: admin.php");
exit;
