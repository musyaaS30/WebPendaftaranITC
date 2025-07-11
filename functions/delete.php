<?php
require './crud.php';

$status = '';
$message = '';
$icon = '';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    if (deleteData($id)) {
        $status = 'Berhasil!';
        $message = 'Data berhasil dihapus!';
        $icon = 'success';
    } else {
        $status = 'Gagal!';
        $message = 'Gagal menghapus data!';
        $icon = 'error';
    }
} else {
    $status = 'Oops!';
    $message = 'ID tidak ditemukan!';
    $icon = 'warning';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Penghapusan</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        Swal.fire({
            icon: '<?= $icon ?>',
            title: '<?= $status ?>',
            text: '<?= $message ?>',
            showConfirmButton: false,
            timer: 2000
        }).then(() => {
            window.location.href = '/bedemos/dashboard.php';
        });
    </script>
</body>
</html>
