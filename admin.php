<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$query = "SELECT a.* , k.ket_kategori FROM aspirasi a
          JOIN kategori k ON a.id_kategori = k.id_kategori
          ORDER BY a.id_aspirasi DESC";

$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin | Kelola Aspirasi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        padding-top:72px;
        background:#f8f9fa;
    }
    .card-modern{
        border:none;
        border-radius:16px;
        box-shadow:0 10px 28px rgba(0,0,0,.06);
        transition:.2s ease;
    }
    </style>
</head>

<body>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-semibold" href="index.php">
            🏫 Pengaduan Sekolah
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid px-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Kelola Aspirasi</h3>
        <p class="text-muted mb-0">Kelola status dan feedback aspirasi siswa</p>
    </div>

    <!-- CARD -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Feedback & Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $no = 1; ?>
                    <?php foreach ($data as $d): ?>

                    <?php
                    $badge = match ($d['status']) {
                        'menunggu' => 'warning',
                        'proses'   => 'info',
                        'selesai'  => 'success',
                        default    => 'secondary'
                    };
                    ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($d['nis']) ?></td>
                        <td><?= htmlspecialchars($d['ket_kategori']) ?></td>
                        <td><?= htmlspecialchars($d['lokasi']) ?></td>
                        <td style="max-width:300px">
                            <small><?= htmlspecialchars($d['ket']) ?></small>
                        </td>
                        <td>
                            <span class="badge bg-<?= $badge ?>">
                                <?= ucfirst($d['status']) ?>
                            </span>
                        </td>
                        <td>
                            <form action="update.php" method="post" class="d-flex flex-column gap-2">
                                <input type="hidden" name="id" value="<?= $d['id_aspirasi'] ?>">

                                <textarea name="feedback"
                                          class="form-control form-control-sm"
                                          rows="2"
                                          placeholder="Tulis feedback..."><?= htmlspecialchars($d['feedback']) ?></textarea>

                                <div class="d-flex gap-2">
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="menunggu" <?= $d['status']=='menunggu'?'selected':'' ?>>Menunggu</option>
                                        <option value="proses" <?= $d['status']=='proses'?'selected':'' ?>>Proses</option>
                                        <option value="selesai" <?= $d['status']=='selesai'?'selected':'' ?>>Selesai</option>
                                    </select>

                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
