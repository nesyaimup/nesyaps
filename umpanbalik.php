<?php
include 'koneksi.php';

$query = "SELECT a.*, k.ket_kategori
          FROM aspirasi a
          JOIN kategori k ON a.id_kategori = k.id_kategori
          ORDER BY id_aspirasi DESC";

$result = mysqli_query($koneksi, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Umpan Balik | Portal Pengaduan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        padding-top:72px;
        background:#dc3545;
    }
    .card-modern{
        border:none;
        border-radius:16px;
        box-shadow:0 10px 28px hsl(290, 70%, 47%);
        transition:.2s ease;
    }
    .card-modern:hover{
        transform:translateY(-3px);
        box-shadow:0 16px 36px hsl(266, 91%, 34%);
    }
    .accent{
        width:6px;
        border-radius:16px 0 0 16px;
    }
</style>
</head>
<body>

<!-- NAVBAR -->
<?php include 'navbar.php'; ?>

<!-- HEADER -->
<header class="container text-center my-4">
    <h3 class="fw-bold mb-1">Umpan Balik </h3>
    <p class="text-muted mb-0">Daftar aspirasi dan status penanganannya</p>
</header>

<!-- CONTENT -->
<main class="container pb-5">

<?php if(empty($data)): ?>
    <div class="alert alert-info text-center">
        Belum ada pengaduan.
    </div>
<?php endif; ?>

<?php foreach($data as $d): ?>
<?php
$color = match($d['status']){
    'menunggu' => 'warning',
    'proses'   => 'info',
    'selesai'  => 'success',
    default    => 'danger'
};
?>

<div class="card card-modern mb-4">
    <div class="row g-0">
        <div class="col-auto">
            <div class="accent bg-<?= $color ?>"></div>
        </div>

        <div class="col">
            <div class="card-body px-4 py-3">

                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <span class="badge bg-light text-primary mb-1">
                            <?= $d['ket_kategori'] ?>
                        </span>
                        <h6 class="fw-semibold mb-0">Aspirasi Siswa</h6>
                    </div>
                    <span class="f-10px ms-auto p-3">
                        <?= date('d/m/Y', strtotime($d['created_at'])); ?>
                    </span>
                    <span class="badge bg-<?= $color ?> col-1 ">
                        <?= ucfirst($d['status']) ?>
                    </span>
                </div>

                <div class="row text-muted small mb-2">
                    <div class="col-md-3">👤 NIS: <strong><?= $d['nis'] ?></strong></div>
                    <div class="col-md-4">📍 Lokasi: <strong><?= $d['lokasi'] ?></strong></div>
                </div>

                <p class="mb-2"><?= $d['ket'] ?></p>

                <?php if(!empty($d['feedback'])): ?>
                    <div class="bg-light rounded p-3 mt-3">
                        <small class="text-muted d-block mb-1">💬 Feedback Sekolah</small>
                        <?= $d['feedback'] ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

</main>

<!-- FOOTER -->
<footer class="bg-white border-top py-3 text-center text-muted small">
    © 2026 Sekolah SMKS Miftahul Ulum • Portal Pengaduan
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
