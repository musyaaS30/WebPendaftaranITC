<?php
include "conn.php";

function createData()
{
    global $conn;

    $nama = htmlspecialchars($_POST["nama"]);
    $kelamin = htmlspecialchars($_POST["kelamin"]);
    $email = htmlspecialchars($_POST["email"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $divisi = htmlspecialchars($_POST["divisi"]);
    $alasan = htmlspecialchars($_POST["alasan"]);
    $created_at = date("Y-m-d H:i:s");

    // Cek apakah nama/email/telepon sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM demos_tb WHERE nama = '$nama' OR email = '$email' OR telepon = '$telepon'");
    if (mysqli_num_rows($cek) > 0) {
        return "duplicate";
    }

    // Lanjutkan insert
    $sql = "INSERT INTO demos_tb VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $nama, $kelamin, $email, $telepon, $divisi, $alasan, $created_at);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        error_log("DB Error: " . mysqli_error($conn));
        return false;
    }
}


function readData($search = '', $divisi = '')
{
    global $conn;

    $sql = "SELECT * FROM demos_tb WHERE 1=1";
    $params = [];
    $types = "";

    // Jika search diisi
    if (!empty($search)) {
        $sql .= " AND (nama LIKE ? OR email LIKE ?)";
        $search = "%" . $search . "%";
        $params[] = $search;
        $params[] = $search;
        $types .= "ss";
    }

    // Jika divisi diisi
    if (!empty($divisi)) {
        $sql .= " AND divisi = ?";
        $params[] = $divisi;
        $types .= "s";
    }

    $stmt = mysqli_prepare($conn, $sql);
    if ($params) {
        mysqli_stmt_bind_param($stmt, $types, ...$params);
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}



function deleteData($id)
{
    global $conn;

    if (!is_numeric($id)) {
        return false;
    }

    $sql = "DELETE FROM demos_tb WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function ambilData($id)
{
    global $conn;

    if (!is_numeric($id)) {
        return false;
    }

    $sql = "SELECT * FROM demos_tb WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);
    return $data;
}

function updateData($id, $nama, $kelamin, $email, $telepon, $divisi, $alasan)
{
    global $conn;

    if (!is_numeric($id)) {
        return false;
    }

    $nama = htmlspecialchars($nama);
    $kelamin = htmlspecialchars($kelamin);
    $email = htmlspecialchars($email);
    $telepon = htmlspecialchars($telepon);
    $divisi = htmlspecialchars($divisi);
    $alasan = htmlspecialchars($alasan);

    $sql = "UPDATE demos_tb SET nama = ?, kelamin = ?, email = ?, telepon = ?, divisi = ?, alasan = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssssssi", $nama, $kelamin, $email, $telepon, $divisi, $alasan, $id);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    return $result;
}

