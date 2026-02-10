<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$ket = $_POST['ket'];
$status = 'menunggu';
$feedback = 'thankyouu';


//cek nis tersedia
$cek = mysqli_query($koneksi, "SELECT nis FROM siswa WHERE nis = '$nis'");

if (mysqli_num_rows($cek) == 0) {
    echo "<script>
            alert('NIS tidak terdaftar. Silakan periksa kembali!');
            window.location='aspirasi.php';
          </script>";
    exit;
}

$query = "INSERT INTO aspirasi (nis, id_kategori, lokasi, ket, status, feedback)
          VALUES ('$nis', '$kategori', '$lokasi', '$ket', '$status', '$feedback')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Aspirasi Anda telah terkirim. Terima kasih!');
            window.location='umpanbalik.php';
          </script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}