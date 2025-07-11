<?php
require 'crud.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script>alert('ID tidak valid!'); window.location.href='/bedemos/index.php';</script>";
    exit;
}

$id = $_GET['id'];
$data = ambilData($id); 

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href='/bedemos/index.php';</script>";
    exit;
}

if (isset($_POST['update'])) {
    $nama     = $_POST['nama'];
    $kelamin  = $_POST['kelamin'];
    $email    = $_POST['email'];
    $telepon  = $_POST['telepon'];
    $divisi   = $_POST['divisi'];
    $alasan   = $_POST['alasan'];

    if (updateData($id, $nama, $kelamin, $email, $telepon, $divisi, $alasan)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='/bedemos/index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f3f7ff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-container {
      background-color: white;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #0d6efd;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h2>Edit Data Peserta</h2>
    <form method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required />
      </div>

      <div class="mb-3">
        <label for="kelamin" class="form-label">Jenis Kelamin</label>
        <select name="kelamin" id="kelamin" class="form-select" required>
          <option value="laki-laki" <?= $data['kelamin'] === 'laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
          <option value="perempuan" <?= $data['kelamin'] === 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($data['email']) ?>" required />
      </div>

      <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control" value="<?= htmlspecialchars($data['telepon']) ?>" required />
      </div>

      <div class="mb-3">
        <label for="divisi" class="form-label">Divisi Minat</label>
        <select name="divisi" id="divisi" class="form-select" required>
          <option value="web" <?= $data['divisi'] === 'web' ? 'selected' : '' ?>>Web</option>
          <option value="design" <?= $data['divisi'] === 'design' ? 'selected' : '' ?>>Design</option>
          <option value="robotic" <?= $data['divisi'] === 'robotic' ? 'selected' : '' ?>>Robotic</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="alasan" class="form-label">Alasan</label>
        <textarea name="alasan" id="alasan" rows="3" class="form-control" required><?= htmlspecialchars($data['alasan']) ?></textarea>
      </div>

      <div class="d-grid">
        <button type="submit" name="update" class="btn btn-success">Update Data</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
