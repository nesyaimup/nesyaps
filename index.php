<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal Pengaduan Sekolah</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f4f6f9;
    }

    .card {
      border: none;
      border-radius: 16px;
    }

    .btn {
      border-radius: 10px;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Header -->
  <header class="bg-info py-4 shadow-sm">
    <div class="container ">
      <h2 class="fw-bold mb-1">🏫 Portal Pengaduan Sekolah</h2>
      <p class="mb-0 opacity-75">
        Sampaikan aspirasi dan keluhan demi sekolah yang lebih baik
      </p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container flex-fill d-flex align-items-center">
    <div class="row justify-content-center w-100">

      <div class="col-md-6 col-lg-9 px-5">
        <div class="card shadow-sm">
          <div class="card-body p-4">

            <h5 class="text-center fw-semibold mb-4">
              📋 Daftar Menu
            </h5>

            <div class="d-grid gap-2 px-4 mx-auto">
              <a class="btn btn-outline-primary btn-md fw-semibold" href="aspirasi.php">📝 Input Aspirasi</a>
              <a class="btn btn-outline-success btn-md fw-semibold" href="umpanbalik.php">📩 Umpan Balik</a>
              <hr>
              <a href="login.php" class="btn btn-outline-danger btn-md fw-semibold">
                🔐 Login Admin
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="py-3 bg-white border-top">
    <div class="container text-center text-muted small">
      © 2026 Sekolah Anda • Portal Pengaduan
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>