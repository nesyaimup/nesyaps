<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengaduan Sekolah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    

    <style>
        body {
            padding-top: 30px;
            background-color: #f8f9fa;
        }
    </style>
  </head>
<body class="bg-light">
<?php include 'navbar.php'; ?>
<div class="container">
<div class="card mt-5 col-6 mx-auto">
  <h5 class="card-header text-center">Form Aspirasi</h5>
  <div class="card-body">

    <form action="proses.php" method="post">
        <label for="">NIS</label>
        <input type="text" class="form-control mb-3" name="nis" placeholder="masukan Nis ..." required>
        <label for="">Kategori</label>
        <select name="kategori" class="form-control mb-3">
        <option disabled selected>Pilih Kategori</option>
        <option value="1">Sarana</option>
        <option value="2">Prasarana</option>    
        </select>
        <label for="">Lokasi</label>
        <input type="text" class="form-control mb-3" name="lokasi" placeholder="masukan Lokasi..." required>
        <label for="">Keterangan</label>
        <textarea  class="form-control mb-3" rows="4" name="ket" placeholder="masukan Keterangan..." required></textarea>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Kirim Aspirasi</button>
        </div>
    </form>

  </div>
</div>
</div>
</body>
</html>
