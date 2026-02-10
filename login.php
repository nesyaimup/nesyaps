<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Sistem Informasi Sekolah</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .bg-image {
    background-image: url("foto.png");
    background-size: 100% 100%; 
    background-position: center;
  }
</style>

</head>
<body>
<?php  include 'navbar.php'; ?>
<div class="container-fluid">
  <div class="row min-vh-100">

    <!-- KIRI: GAMBAR -->
    <div class="col-md-6 d-none d-md-block bg-image"></div>

    <!-- KANAN: FORM -->
    <div class="col-md-6 d-flex align-items-center justify-content-center bg-danger">
      <div class="card shadow p-4" style="width:100%; max-width:420px;">

        <div class="text-center mb-3">
          <!-- Logo sekolah -->
          <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" width="100" class="mb-2"><br>
          <small class="text-muted">Silakan login untuk melanjutkan</small>
        </div>

        <form action="proses_login.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="user" placeholder="Masukkan username">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Masukkan password">
          </div>

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">
              Login
            </button>
          </div>

          <div class="text-center">
            <small>© 2026 SMKS Miftahul Ulum</small>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
